<?php

namespace realSamy\reBot;
use realSamy\reBot\Exceptions\TelegramRPC;
use ReflectionException;
use ReflectionMethod;
use RuntimeException;

abstract class ApiFactory
{
    protected string $token;
    /**
     * @var string|null
     */
    private ?string $namespace;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param string $url
     * @param array  $parameters
     * @return object
     * @throws TelegramRPC
     */
    private function curlHandler(string $url, array $parameters): object|array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            throw new RuntimeException(curl_error($ch));
        }
        $res = json_decode($res, true);
        if (!$res['ok']) {
            throw new TelegramRPC($res['description'], $res['error_code']);
        }
        return (is_array($res['result']) ? json_decode(json_encode($res['result']), false) : json_decode(json_encode([$res['result']]), false));
    }

    /**
     * @param string $method
     * @param array  $parameters
     * @return object
     * @throws TelegramRPC
     */
    private function telegramCall(string $method, array $parameters): object
    {
        foreach($parameters as $key => $value) {
            if (is_null($value)) {
                unset($parameters[$key]);
            }
        }
        return $this->curlHandler("https://api.telegram.org/bot" . $this->token . "/" . $method, $parameters);
    }

    /**
     * @param string $name
     * @param array  $arguments
     * @return object
     * @throws TelegramRPC
     * @throws ReflectionException
     */
    public function __call(string $name, array $arguments = []): object
    {
        $method = new ReflectionMethod('\realSamy\reBot\\' . $this->namespace, $name);
        foreach($method->getParameters() as $key => $parameter) {
            $arguments[$parameter->name] = $arguments[$key] ?? null;
        }
        return $this->telegramCall($name, $arguments);
    }
    public function __get(string $name): self
    {
        $this->namespace = $name;
        return $this;
    }
    public function __set(string $name, mixed $value): void
    {
        $this->$name = $value;
    }
    public function __isset(string $name): bool
    {
        return property_exists(__CLASS__, $name);
    }
}

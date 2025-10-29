<?php

namespace ErfanMohseni20\SimpleCustomRequest;

class ApiResponseBuilder
{
    private ApiResponse $response;

    public function __construct()
    {
        $this->response = new ApiResponse();
    }

    public function message(string $message): self
    {
        $this->response->message($message);
        return $this;
    }

    public function data(mixed $data): self
    {
        $this->response->data($data);
        return $this;
    }

    public function status(int $status): self
    {
        $this->response->status($status);
        return $this;
    }

    public function appends(array $appends): self
    {
        $this->response->appends($appends);
        return $this;
    }

    public function error(string $message, int $status = 400): self
    {
        $this->response->error($message, $status);
        return $this;
    }

    public function build()
    {
        return $this->response->build();
    }

    public static function success(string $message = 'Success', mixed $data = null, int $status = 200): self
    {
        $builder = new self();
        return $builder->message($message)->data($data)->status($status);
    }

    public static function fail(string $message = 'Error', mixed $data = null, int $status = 400): self
    {
        $builder = new self();
        return $builder->error($message, $status)->data($data);
    }
}
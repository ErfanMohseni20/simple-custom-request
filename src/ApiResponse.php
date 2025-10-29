<?php

namespace ErfanMohseni20\SimpleCustomRequest;

class ApiResponse
{
    private ?string $message = null;
    private mixed $data = null;
    private int $status = 200;
    private array $appends = [];

    public function message(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function data(mixed $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function status(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function appends(array $appends): self
    {
        $this->appends = $appends;
        return $this;
    }

    public function error(string $message, int $status = 400): self
    {
        $this->message = $message;
        $this->status = $status;
        return $this;
    }

    public function build()
    {
        $body = [
            'success' => $this->status >= 200 && $this->status < 300,
        ];
        if ($this->message !== null) {
            $body['message'] = $this->message;
        }
        if ($this->data !== null) {
            $body['data'] = $this->data;
        }
        $body = array_merge($body, $this->appends);
        return response()->json($body, $this->status);
    }
}
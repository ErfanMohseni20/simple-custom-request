<?php

namespace LaravelApiResponse\Request;

use Illuminate\Foundation\Http\FormRequest;

class ApiRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [];
    }
}
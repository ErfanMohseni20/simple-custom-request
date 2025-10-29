<?php

namespace ErfanMohseni20\SimpleCustomRequest\Console;

use Illuminate\Console\GeneratorCommand;

class MakeApiRequestCommand extends GeneratorCommand
{
    protected $name = 'make:ApiRequest';
    protected $description = 'Create a new API request class';
    protected $type = 'Request';

    protected function getStub()
    {
        return __DIR__ . '/../Request/Stubs/api-request.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Requests';
    }
}
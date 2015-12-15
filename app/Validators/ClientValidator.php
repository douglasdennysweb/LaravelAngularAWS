<?php

namespace AngularLaravel\Validators;

use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required',
        'responsible' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
    ];
}
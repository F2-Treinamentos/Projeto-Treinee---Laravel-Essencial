<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function olaMundo()
    {
        return 'Ola mundo via controller';
    }
}

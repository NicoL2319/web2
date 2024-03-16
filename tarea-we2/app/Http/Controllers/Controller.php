<?php

namespace app\Http\Controllers;
namespace app\Http\Controllers\TodosController;

use app\Http\Controllers\TodosController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

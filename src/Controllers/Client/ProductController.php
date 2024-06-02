<?php

namespace Pc\FpolyBaseWeb3014\Controllers\Client;

use Pc\FpolyBaseWeb3014\Commons\Controller;

class ProductController extends Controller
{
    public function index()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id;
    }
}

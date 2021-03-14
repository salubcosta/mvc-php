<?php

namespace App\Controllers;

class ProductsController extends \CODE\Controller
{
    // public function __construct(\App\Models\Product $model)
    // {
    //     var_dump(\get_class($model));
    //     $this->model = $model;
    // }
    public function __construct(\App\Models\Product $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $this->render(['table'=> $this->model->getTableName()]);
    }
}
<?php

namespace App\Controllers;

class UsersController extends \CODE\Controller
{
    // public function __construct(\App\Models\User $model)
    // {
    //     var_dump(\get_class($model));
    //     $this->model = $model;
    // }
    // public function handler()
    // {
    //     return self::class;
    // }
    public function index()
    {
        // $this->render(['nome'=>'salumao'], 'users/index');
        $user = $this->model->get();
        $this->render($user);
    }

    public function create()
    {
        return 'create - usuários';
    }
}
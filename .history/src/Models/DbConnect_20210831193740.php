<?php

namespace App\Models;

class DbConnect {

    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost'
    }

}


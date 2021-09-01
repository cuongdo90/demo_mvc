<?php

namespace App\Models;

class DbConnect
{

    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=demo_pdo';
        $this->user = 'root';
        $this->pass = '123456@';
    }

    public function connect()
    {
        try {
            return new 
        }
    }
}

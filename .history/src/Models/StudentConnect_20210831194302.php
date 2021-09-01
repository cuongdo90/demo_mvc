<?php 

namespace App\Models;

class StudentConnect {
    
    protected $data;

    public function __construct()
    {
        $student = new DbConnect();
        $this->data = $student->connect();
    }

    public function getAll()
    {
        $sql = \
    }
}
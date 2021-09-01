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
        $sql = 'select * from students';
        $stmt = $this->data->query($sql);
        v
        return $stmt->fetchAll();
    }
}
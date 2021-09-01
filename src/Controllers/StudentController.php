<?php 

namespace App\Controllers;

use App\Models\StudentConnect;


class StudentController {

    protected $data;

    public function __construct()
    {
        $this->data = new StudentConnect();
    }

    public function getStudent()
    {
        $students = $this->data->getAll();

        include 'Views/list.php';
    }

}
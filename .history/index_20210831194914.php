<?php

require_once __DIR__ . "/vendor/autoload.php";
use App\Controllers\StudentController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$student = new StudentController();

switch ($page){
    case 'l'
}
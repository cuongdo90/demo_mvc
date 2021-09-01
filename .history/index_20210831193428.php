<?php

require_once __DIR__ . "/vendor/autoload.php";
use App\controller\CustomerController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$customer = new ();


switch ($page){
    case 'add':
        $customer->add();
        break;
    case 'edit':
        $customer->edit();
        break;

    case 'delete':
        $id = $_REQUEST['id'];
        $customer->delete($id);
        break;

    case 'search':
        $customer->search();
        break;

    default:
        $customer->index();
}
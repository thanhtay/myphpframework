<?php
function dd($string)
{
    echo "<pre>";
    print_r($string);
    echo "</pre>";
    die;
}
function d($string)
{
    echo "<pre>";
    print_r($string);
    echo "</pre>";
}

// call autoload to defind the rule of namespace
require __DIR__ . '/../vendor/autoload.php';

use Mysql\Database;
use Controllers\SiteController;
use Controllers\UserController;
use Models\logic\UserModel;

echo "<h1>Hello world!</h1>";
$db = new Database();
d($db->getDb());

$site = new SiteController();
d($site->index());

$user = new UserController();
d($user->index());

$userModel = new UserModel();
d($userModel->getClassName());
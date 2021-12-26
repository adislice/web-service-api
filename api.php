<?php 
require_once "connection.php";
require_once "method.php";

$apotek = new Apotekku();

$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method){
    case 'GET':
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'get_user') {
                if (isset($_GET['email'])) {
                    $apotek->get_user($_GET['email']);
                } 
            } elseif ($_GET['action'] == 'get_daftar_obat') {
                $apotek->get_daftar_obat();
            }
        }
        break;
    case 'POST':
        echo "uwu";
}

?>
<?php
include_once 'utils.php';

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

if(empty($login)) error("Faltando o campo login");
if(empty($senha)) error("Faltando o campo senha");

$admin = db_query("SELECT * FROM admin WHERE login = ? AND senha = ?", [$login, $senha]);
if(empty($admin)) error("Login ou senha errado");

session_start();
$_SESSION['admin'] = $admin[0];
redirect('/front/home.php');
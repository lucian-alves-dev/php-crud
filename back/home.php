<?php

session_start();
include_once 'utils.php';
$sql = "SELECT * FROM pessoa";
$params = array_filter($_GET);

$sql .= " WHERE ";
if(isset($params['nome'])) {
    $sql .= "nome LIKE :nome AND ";
    $params['nome'] = '%'. $params['nome'] .'%';
}
if(isset($params['cpf'])) $sql .= "cpf = :cpf AND ";
if(isset($params['data_nascimento'])) $sql .= "data_nascimento = :data_nascimento AND ";
$sql = rtrim($sql, " AND ");
$sql = rtrim($sql, " WHERE "); 

$clientes = db_query($sql, $params);
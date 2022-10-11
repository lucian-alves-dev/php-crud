<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/back/utils.php';

$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$data_nascimento = $_REQUEST['data_nascimento'];

if(empty($nome)) error("Faltando o campo Nome");
if(empty($cpf)) error("Faltando o campo CPF");
if(empty($data_nascimento)) error("Faltando o campo Data de Nascimento");

db_query(
    "INSERT INTO cliente (nome, cpf, data_nascimento) VALUES(?, ?, ?)",
    [$nome, $cpf, $data_nascimento]
);

redirect('/front/clientes/listagem.php');
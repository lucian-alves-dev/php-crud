<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/back/utils.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$data_nascimento = $_REQUEST['data_nascimento'];

if(empty($nome)) error("Faltando o campo Nome");
if(empty($cpf)) error("Faltando o campo CPF");
if(empty($data_nascimento)) error("Faltando o campo Data de Nascimento");

db_query(
    "UPDATE cliente SET nome = ?, cpf = ?, data_nascimento = ? WHERE id = ?",
    [$nome, $cpf, $data_nascimento, $id]
);

redirect('/front/clientes/listagem.php');
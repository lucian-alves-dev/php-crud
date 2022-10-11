<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/back/utils.php';

$id = $_REQUEST['id'];
db_query("DELETE FROM cliente WHERE id = ?", [$id]);

redirect('/front/clientes/listagem.php');
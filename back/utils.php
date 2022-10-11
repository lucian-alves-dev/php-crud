<?php
 
function db_query($sql, $params = [])
{
    $conn = new PDO("mysql:host=localhost;port=33066;dbname=crud-php", 'root', '123456');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    $conn = null;
    return ($results) ? $results : [];
}

function redirect($url)
{
    header("Location: $url");
    die;
}

function error($msg = "")
{
    header("Location: /front/erro.php?msg=$msg");
    die;
}

function dump(...$args)
{
    ob_clean();
    echo "<pre>";
    foreach($args as $arg) {
        var_dump($arg);
    }
    echo "</pre>";
    exit;
}
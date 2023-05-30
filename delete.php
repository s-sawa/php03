<?php
$id = $_GET["id"];
// echo $id;
require_once 'funcs.php';
/** @var PDO $pdo */
$pdo = db_conn();

$sql = "DELETE FROM my_tabelog WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //:idに$idを渡す
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt); //関数実行 
} else {
    redirect("index.php");
}

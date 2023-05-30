<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DBConnection
// 戻り値の型指定。intelephenseでエラー表示されるため。
/**
 * @return PDO
 */
function db_conn()
{
    try {
        $db_name = "tabelog";    //データベース名
        $db_id   = "root";      //アカウント名
        $db_pw   = "";          //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
        $db_host = "localhost"; //DBホスト
        return new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        // $pdo = new PDO('mysql:dbname=swshgeek_tabelog;charset=utf8;host=mysql57.swshgeek.sakura.ne.jp', 'swshgeek', 'gssawa1234');
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}
//SQLエラー関数：sql_error($stmt)
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit("SQLError:" . $error[2]);
}
//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    header("Location: " . $file_name);
    exit();
}

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            margin: 10px;
            padding: 20px;
            font-size: 18px;
            background-color:cornflowerblue;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class=container>
        <div class="box box-text"><a href="input.php">データ登録</a></div>
        <div class="box"><a href="select.php">データ一覧</a></div>
        <div class="box"><a href="search_input.php">検索</a></div>
    </div>
    <!-- <div><a href=""></a></div> -->
</body>

</html>
<!DOCTYPE HTML>
<!-- test -->
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>DB登録</title>
        </head>
        <body>
            
            <?php
            $con = mysql_connect('127.0.0.1', 'root', '8080');
            if (!$con) {
              exit('データベースに接続できませんでした。');
            }

            $result = mysql_select_db('bike', $con);
            if (!$result) {
              exit('データベースを選択できませんでした。');
            }

            $result = mysql_query('SET NAMES utf8', $con);
            if (!$result) {
              exit('文字コードを指定できませんでした。');
            }
            
            $no   = $_REQUEST['no'];
            $name = $_REQUEST['name'];
            $tel  = $_REQUEST['tel'];
            
            $result = mysql_query("INSERT INTO address(no, name, tel) VALUES('$no', '$name', '$tel')", $con);
            if (!$result) {
                exit('データを登録できませんでした。');
            }

            $con = mysql_close($con);
            if (!$con) {
                exit('データベースとの接続を閉じられませんでした。');
            }
            
            ?>
        </body>
    </html>
</x-app-layout>
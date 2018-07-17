<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
    print 'ログインされていません。<br>';
    print '<a href="../staff_login/staff_login.html"> ログイン画面へ </a>';
    exit();
}
else
{
    print $_SESSION['staff_name'];
    print 'さんログイン中<br>';
    print '<br>';
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ショップ管理トップ</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <!-- Custom styles for this template -->
    <link href="../bootstrap/css/signin.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
<body>
    <div class="container">

      <div class="starter-template">
        <h1>ショップ管理トップメニュー</h1>
<!--         <p class="lead">
            ショップ管理トップメニュー<br> -->
        <br>
        <a href="../staff/staff_list.php"> スタッフ管理 </a><br>
        <br>
        <a href="../product/pro_list.php"> 商品管理 </a><br>
        <br>
        <a href="../order/order_download.php"> 注文ダウンロード </a><br>
        <br>
        <a href="staff_logout.php"> ログアウト </a><br>
        </p>
      </div>

    </div><!-- /.container -->
</body>
</html>
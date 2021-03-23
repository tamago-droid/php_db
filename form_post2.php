<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name=$_POST["name"];
    $email=$_POST["mail"];
    $date=$_POST["date"];
    $pass=$_POST["pass"];
    $feeling=$_POST["feeling"];
    // 表示／非表示の設定
    $_POST["feeling"]=="good"."bad"?"checked":"";
　　
    ?>

    <p><?php echo $date ?></p>
    <p>私は、<?php echo $name ?>です。</p>
    <p>アドレスは<?php echo $email ?>です。</p>
    <p><?php echo $feeling ?></p>
    
</body>
</html>

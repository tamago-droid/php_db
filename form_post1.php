<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォーム：POST</title>
</head>
<body>

<form method="post" action="form_post2.php">
<p>お名前:<input type="text" name="name" size="20"></p>
<p>日付:<input type="date" name="date"></p>
<p>MAIL:<input type="text" name="mail" size="20"></p>
<p>PassWord:<input type="password" name="pass" maxlength="5"></p>
<p>今日の気分:</p>
<p><input type="radio" name="feeling[]" value="いい感じ">いい感じ</p>
<p><input type="radio" name="feeling[]" value="調子悪いわ～">調子悪いわ～</p>
<input type="reset" value="入力をリセットする">
<p><input type="submit" value="送信"></p>
</form>

</body>
</html>

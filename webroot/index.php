<?php
   $title=time();
?>
<html>
<head>
    <meta charset='utf-8'>
    <title><?= $title ?></title>
</head>
<body>

<form  action="/" method="post">
    <label>名稱: </label><input name="name" type="text" placeholder="請輸入你的名稱" ="<?= $_POST['name'] ?>">
    <label>留言: </label><input name="content" type="text" placeholder="請輸入留言內容">
    <input type="submit" value="送出"> 
    

</form>
</body>
</html>

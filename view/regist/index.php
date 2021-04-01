<?php
require_once '../../config/database.php';

$pdo = new PDO(DSN,USERNAME,PASSWORD);
$stmh = $pdo->query('select * from MyDatabase.regist');

$regist_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登録情報一覧画面</title>
</head>
<body>
  <div>
    <?php if($regist_list):?>
    <ul>
      <?php foreach($regist_list as $regist):?>
        <li><?php echo $regist['name'];?></li>
      <?php endforeach;?>
    </ul>
    <?php else:?>
      <div>データなし</div>
    <?php endif;?>
  </div>
</body>
</html>
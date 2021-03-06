<?php

use lib\Db;

spl_autoload_extensions('.class.php');
spl_autoload_register();


$db = new Db();
$db->useDatabase('articles');
// $dropDatabase = $db->dropDatabase('mydb');
//$createDatabase = $db->createDatabase('mydb');
//$selectOneRow = $db->select('article', ['id' => 1]);
//$selectAll = $db->select('article');
//$selectCustomFields = $db->select(['table', ['col1', 'col2']], '', '3', '0', ['id' => 'ASC']);

//$insertOneRow = $db->insert('article', ['id' => null, 'title' => 'Заголовок № 10', 'content' => 'Тут текст записи № 10.']);


// $checkConnection = $db->connectionStatus();
//$insertMultipleRows = $db->insertMultiple(
//        'article',
//        ['id, title, content'],
//        [
//            [29, 'title №13', 'content №13'],
//	        [28, 'title №14', 'content №14']
//        ]
//);
//not tested
/*$db->createTable("CREATE TABLE IF NOT EXISTS users (
             id INT(11) NOT NULL AUTO_INCREMENT,
             firstName VARCHAR(255) NOT NULL,
             lastName VARCHAR(255) NOT NULL,
             email VARCHAR(255) NOT NULL,
             PRIMARY KEY (id))"
);*/

// works
//$db->dropDatabase('comments');
//$db->update('article', ['Материал 1' => 'Материал 1 (updated)'], ['id' => 8]);
$updateRow = $db->update('article', ['title' => 'Материал 1 (updated1)'], ['id' => 9]);
if ($updateRow) {
    echo 'updated ' . $updateRow . ' successfully!';
} else {
    echo 'update failed!';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<?php
//
//foreach ($selectCustomFields as $rows): ?>
<!--<p>-->
<!--    --><?php //foreach ($rows as $col_k => $col_v): ?>
<!--    --><?php //echo $col_k . ': ' . $col_v . '<br>'; ?>
<!--    --><?php //endforeach; ?>
<!--</p>-->
<?php //endforeach; ?>

<?php

echo '<br><hr>';

// работает
//var_dump($selectAll);

echo '<br><hr>';

// работает
//var_dump($selectCustomFields);

echo '<br><hr>';

// работает
//var_dump($insertOneRow);

echo '<br><hr>';

// работает, вернет bool
//var_dump($insertMultipleRows);

echo '<br><hr>';



// работает, вернет bool
//echo '<br><hr>';
//if ($dropDatabase) {
//    echo 'db dropped successfully';
//} else {
//    echo 'drop database failed!';
//}

//echo '<br><hr>';
//if ($createDatabase) {
//    echo 'db created successfully';
//} else {
//    echo 'database creation failed!';
//}
echo phpversion();
?>


<br><br><br><br><br>
</body>
</html>

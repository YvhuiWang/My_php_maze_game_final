
<?php

  $id=0;
  $numbers = isset($_GET["numbers"]) ? $_GET["numbers"] : '';


  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PWD','root');//密码
  define('DB_NAME','mysql');

  //连接数据库
  $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysqli_error());

  //选择指定数据库，设置字符集
  mysqli_select_db($connect,DB_NAME) or die('数据表连接错误，错误信息：'. mysqli_error());

  //从数据库里把表的数据提出来（获取记录集）


  $query="UPDATE new_maze SET number_array='$numbers' WHERE id=$id";
  $result = mysqli_query($connect,$query) or die('SQL错误，错误信息：'. mysqli_error());

  mysqli_close($connect);
echo 'saved';
?>

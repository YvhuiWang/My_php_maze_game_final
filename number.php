<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','root');//密码
define('DB_NAME','mysql');
$the_content=array(0,2,0,1);


//连接数据库
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysqli_error());

//选择指定数据库，设置字符集
mysqli_select_db($connect,DB_NAME) or die('数据表连接错误，错误信息：'.mysqli_error());


//从数据库里把表的数据提出来（获取记录集）
$query = "SELECT number_array FROM new_maze";
$result = mysqli_query($connect,$query) or die('SQL错误，错误信息：'.mysqli_error());
$i=0;
while( $row=mysqli_fetch_array($result,MYSQLI_NUM))
{
      $the_content=$row[0];
      
}

echo $the_content;

mysqli_close($connect);

?>

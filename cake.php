<?php

ignore_user_abort(true);//即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
set_time_limit(0);// 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去
$interval=2;
//





while(1){
  $run = include 'config.php';
  if(!$run) die('process abort');

  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PWD','root');//密码
  define('DB_NAME','mysql');
  $the_content=array(0,2,0,1);
  $id=0;
  //从数据库里把表的数据提出来（获取记录集）
  $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysqli_error());

  //选择指定数据库，设置字符集
  mysqli_select_db($connect,DB_NAME) or die('数据表连接错误，错误信息：'.mysqli_error());
  $query = "SELECT number_array FROM new_maze";
  $result = mysqli_query($connect,$query) or die('SQL错误，错误信息：'.mysqli_error());
  $i=0;
  while( $row=mysqli_fetch_array($result,MYSQLI_NUM) )
  {
    if($i>0)
      break;

      $the_content=$row[0];
      $i+=1;
  }

  $number1=explode(" ",$the_content);


  for($m=0;$m<=100;$m++)
  {
    if($number1[$m] >= '15')
       $number1[$m] = '0';
  }
  echo '1';
  for($m=0;$m<=5;$m++)
  {
     $k=rand(1,100);
     if($number1[$k]!='0')
      continue;
    else if($m==5){
      $number1[$k]='17';
      $m+=1;
      continue;
    }
    else if($m==4){
      $number1[$k]='15';
      $m+=1;
      continue;
    }
    else {
      $number1[$k]='16';
      $m+=1;
      continue;
    }
  }


  $number2=implode(" ",$number1);

  $query="UPDATE new_maze SET number_array='$number2' WHERE id=$id";
  $result = mysqli_query($connect,$query) or die('SQL错误，错误信息：'. mysqli_error());
  mysqli_close($connect);
  sleep(2);
  echo '3';
 }


?>

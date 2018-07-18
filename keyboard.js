
function jumpPage() {
  if (event.keyCode==37)//左
  fun_a();
  if (event.keyCode==38)//上
  fun_b();
  if (event.keyCode==39)//右
  fun_c();
  if (event.keyCode==40)//下
  fun_d();

  if (event.keyCode==65)//左
  fun_a2();
  if (event.keyCode==87)//上
  fun_b2();
  if (event.keyCode==68)//右
  fun_c2();
  if (event.keyCode==83)//下
  fun_d2();

  if (event.keyCode==74)//左
  fun_a3();
  if (event.keyCode==73)//上
  fun_b3();
  if (event.keyCode==76)//右
  fun_c3();
  if (event.keyCode==75)//下
  fun_d3();
  }
function fun_a(){
  //zuo
  var next_po = position1-1;
  //下面是一对检查条件

  if(position1%10==1) return;

  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;


  eat_cake(1,next_po);
  var temp=number2[position1];
  number2[position1]=number2[next_po];
  number2[next_po]=temp;



  save(number2);
 }
function fun_b(){
  //shang
  var next_po = position1-10;
  //下面是一对检查条件
  if(position1<11) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(1,next_po);
  var temp=number2[position1];
  number2[position1]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
function fun_c(){
  //you
  var next_po = position1+1;
  //下面是一对检查条件
  if(position1>0 && position1%10==0) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(1,next_po);
  var temp=number2[position1];
  number2[position1]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
function fun_d(){
  //xia
  var next_po = position1+10;
  //下面是一对检查条件(能否下滑)
  if(position1>90) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(1,next_po);
  var temp=number2[position1];
  number2[position1]=number2[next_po];
  number2[next_po]=temp;

  save(number2);
}
function fun_a2(){
  //zuo
  var next_po = position2-1;
  //下面是一对检查条件

  if(position2%10==1) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(2,next_po);
  var temp=number2[position2];
  number2[position2]=number2[next_po];
  number2[next_po]=temp;

  save(number2);
 }
function fun_b2(){
  //shang
  var next_po = position2-10;
  //下面是一对检查条件

  if(position2<11) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

eat_cake(2,next_po);
  var temp=number2[position2];
  number2[position2]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
function fun_c2(){
  //you
  var next_po = position2+1;
  //下面是一对检查条件

  if(position2>0 && position2%10==0) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(2,next_po);
  var temp=number2[position2];
  number2[position2]=number2[next_po];
  number2[next_po]=temp;

  save(number2);
}
function fun_d2(){
  //xia
  var next_po = position2+10;
  //下面是一对检查条件(能否下滑)

  if(position2>90) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(2,next_po);
  var temp=number2[position2];
  number2[position2]=number2[next_po];
  number2[next_po]=temp;

  save(number2);
}
function fun_a3(){
  //zuo
  var next_po = position3-1;
  //下面是一对检查条件

  if(position3%10==1) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(3,next_po);
  var temp=number2[position3];
  number2[position3]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
 }
function fun_b3(){
  //shang
  var next_po = position3-10;
  //下面是一对检查条件

  if(position3<11) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(3,next_po);
  var temp=number2[position3];
  number2[position3]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
function fun_c3(){
  //you
  var next_po = position3+1;
  //下面是一对检查条件

  if(position3>0 && position3%10==0) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
  && number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(3,next_po);
  var temp=number2[position3];
  number2[position3]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
function fun_d3(){
  //xia
  var next_po = position3+10;
  //下面是一对检查条件(能否下滑)

  if(position3>90) return;
  if(number2[next_po]!='0'&& number2[next_po]!='8'&& number2[next_po]!='5'
&& number2[next_po]!='3'&& number2[next_po]!='15' && number2[next_po]!='16' && number2[next_po]!='17') return;

  eat_cake(3,next_po);
  var temp=number2[position3];
  number2[position3]=number2[next_po];
  number2[next_po]=temp;


  save(number2);
}
document.onkeydown=jumpPage;

function eat_cake(num,pos)
{
  if(number2[pos]=='15')
      {
        number2[pos]='0';
        points[num]+=1;
        number2[100+num]=String(points[num]);
      }
  if(number2[pos]=='16')
      {
        number2[pos]='0';
        points[num]+=2;
        number2[100+num]=String(points[num]);
      }
  if(number2[pos]=='17')
      {
        number2[pos]='0';
        points[num]+=5;
        number2[100+num]=String(points[num]);
      }
}
//
// function addone(str)
// {
//   var x=interval(str);
//   x+=1;
//   str=toString(x);
// }


function save(number2)
{
  var numbers= number2.join(" ");

  var xmlHttp;
  if (window.XMLHttpRequest)
  {
      // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
      xmlhttp=new XMLHttpRequest();
  }
  else
  {
      // IE6, IE5 浏览器执行代码
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }


  xmlhttp.open("GET","save.php?numbers="+numbers,true);
  xmlhttp.send();

}

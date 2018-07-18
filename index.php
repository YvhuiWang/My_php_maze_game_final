<html>
<style>
p.pos_fixed1
{
	position:fixed;
	top:30px;
	right:70px;
}
p.pos_fixed2
{
	position:fixed;
	top:30px;
	left:70px;
}
</style>

<body>

  <script>
  var i;
  var size=10;
  var position1=0;
  var position2=0;
  var position3=0;
	var points=new Array(7);
  var number = new Array(150);
  var number2 = new Array(150);

  var i2=number.length;
  while(i2--){number[i2] = 0;}
  i2=number2.length;
  while(i2--){number2[i2] = 0;}
	i2=points.length;
  while(i2--){points[i2] = 0;}

  var myimgs = new Array();
  myimgs[0] = "0.jpg";  myimgs[1] = "1.jpg";  myimgs[2] = "2.jpg";  myimgs[3] = "103.jpg";
  myimgs[4] = "4.jpg";  myimgs[5] = "102.jpg";  myimgs[6] = "6.jpg";  myimgs[7] = "7.jpg";
  myimgs[8] = "101.jpg";  myimgs[9] = "9.jpg";
  myimgs[10] = "21.jpg";  myimgs[11] = "22.jpg";  myimgs[12] = "23.jpg";  myimgs[13] = "24.jpg";
  myimgs[14] = "25.jpg"; myimgs[15]="cake1.jpg";myimgs[16]="cake2.jpg";myimgs[17]="cake5.jpg";

  </script>


<p class="pos_fixed1"><img src="maze7.jpg" alt="Big Boat" width="230" height="600"></p>
<p class="pos_fixed2"><img src="maze6.jpg" alt="Big Boat" width="230" height="600"></p>

<center>

<img src="maze1.jpg" alt="Big Boat" width="320" height="200">
<input type="button" value="开始游戏"  onclick="start()" />
<input type="button" value="分数清零"  onclick="restart()" />

</center>

<center>
	<div id="101"></div>
	<div id="102"></div>
	<div id="103"></div>

	<!-- <table width="100" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td id="101"></td>
	<td id="102"></td>
	<td id="103"></td>
	</tr>
 </table> -->

</center>




  <center>
    <table width="100" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td id="1"></td><td id="2"></td><td id="3"></td><td id="4"></td><td id="5"></td>
    <td id="6"></td><td id="7"></td><td id="8"></td><td id="9"></td><td id="10"></td>
    </tr>
    <tr>
      <td id="11"></td><td id="12"></td><td id="13"></td><td id="14"></td><td id="15"></td>
      <td id="16"></td><td id="17"></td><td id="18"></td><td id="19"></td><td id="20"></td>
    </tr>
    <tr>
      <td id="21"></td><td id="22"></td><td id="23"></td><td id="24"></td><td id="25"></td>
      <td id="26"></td><td id="27"></td><td id="28"></td><td id="29"></td><td id="30"></td>
    </tr>
    <tr>
      <td id="31"></td><td id="32"></td><td id="33"></td><td id="34"></td><td id="35"></td>
      <td id="36"></td><td id="37"></td><td id="38"></td><td id="39"></td><td id="40"></td>
    </tr>
    <tr>
      <td id="41"></td><td id="42"></td><td id="43"></td><td id="44"></td><td id="45"></td>
      <td id="46"></td><td id="47"></td><td id="48"></td><td id="49"></td><td id="50"></td>
    </tr>
    <tr>
      <td id="51"></td><td id="52"></td><td id="53"></td><td id="54"></td><td id="55"></td>
      <td id="56"></td><td id="57"></td><td id="58"></td><td id="59"></td><td id="60"></td>
    </tr>
    <tr>
      <td id="61"></td><td id="62"></td><td id="63"></td><td id="64"></td><td id="65"></td>
      <td id="66"></td><td id="67"></td><td id="68"></td><td id="69"></td><td id="70"></td>
    </tr>
    <tr>
      <td id="71"></td><td id="72"></td><td id="73"></td><td id="74"></td><td id="75"></td>
      <td id="76"></td><td id="77"></td><td id="78"></td><td id="79"></td><td id="80"></td>
    </tr>
    <tr>
      <td id="81"></td><td id="82"></td><td id="83"></td><td id="84"></td><td id="85"></td>
      <td id="86"></td><td id="87"></td><td id="88"></td><td id="89"></td><td id="90"></td>
    </tr>
    <tr>
      <td id="91"></td><td id="92"></td><td id="93"></td><td id="94"></td><td id="95"></td>
      <td id="96"></td><td id="97"></td><td id="98"></td><td id="99"></td><td id="100"></td>
    </tr>


    </table>

  </center>


<script>

var respon;
var xmlHttp;
var text=new Array();
function createXMLHttpRequest(){
 if(window.ActiveXObject){
  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 else if(window.XMLHttpRequest){
  xmlHttp = new XMLHttpRequest();
 }
}
function start(){

 createXMLHttpRequest();
 var url="number.php";
 xmlHttp.open("GET",url,true);
 xmlHttp.onreadystatechange = callback;
 xmlHttp.send(null);

 refresh();

}

function callback(){

 if(xmlHttp.readyState == 4){
  if(xmlHttp.status == 200){
   text = xmlHttp.responseText;

   number = text.split(' ');
   number2 = text.split(' ');

   for(var x=100;x>0;x--)
   {  if(number[x]=='8') position1=x;
      if(number[x]=='5') position2=x;
      if(number[x]=='3') position3=x;
    }

   setTimeout("start()",50);
  }
 }

}


function refresh(){
   var x=1;

   for(x=1;x<=100;x++)
   {
       var y=x.toString();
       document.getElementById(y).innerHTML='<img src="'+myimgs[number[x]]+'" alt="Big Boat" width="100" height="100">';
      }
			points[1]=Number(number[101]);
			points[2]=Number(number[102]);
			points[3]=Number(number[103]);
	 document.getElementById('101').innerHTML='玩家一得分:'+number[101];
	 document.getElementById('102').innerHTML='玩家二得分:'+number[102];
	 document.getElementById('103').innerHTML='玩家三得分:'+number[103];

}

function restart()
{
	points[1]=0;
	points[2]=0;
	points[3]=0;
	number2[100+1]='0';
	number2[100+2]='0';
	number2[100+3]='0';
	save(number2);

}

</script>

<script type="text/javascript" src="keyboard.js"></script>


</body>


</html>

@extends('app')
@section('title', 'Our Team')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="http://www.supermap.com/favicon.ico" type="image/x-icon">
<title>Buy page</title>

<style type="text/css">
<!--
.formone {
	height: 550px;
	width: 400px;
	margin-top: 30px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<div class="formone">
  <form id="form1" name="form1" method="post" action="Registration.php">
    <table width="100%" border="10" cellspacing="0" cellpadding="5" bordercolor="#00FF00" bgcolor="#00CC00">
      <tr  bgcolor="#00CC00">
        <td colspan="2"><div align="center">Delivery Services </div></td>
      </tr>
      <tr bgcolor="#00CC00" >
        <td><label for="textfield">
          <div align="left">First Name:</div>
        </label></td>
        <td>
          
          <div align="left">
            <input name="fname" type="text" id="fname" />
          </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td><label for="label">
          <div align="left">Last Name:</div>
        </label></td>
        <td>
          
          <div align="left">
            <input type="text" name="lname" id="label" />
          </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td><label for="label2">
          <div align="left">E-mail:</div>
        </label></td>
        <td>
          
          <div align="left">
            <input type="text" name="email" id="label2" />
          </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td><label for="label3">
          <div align="left">Address</div>
        </label></td>
        <td>
          
          <div align="left">
            <input type="text" name="address" id="label3" />
          </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td><label for="label4">
          <div align="left">Contact Number</div>
        </label></td>
        <td>
          
          <div align="left">
            <input type="text" name="contactnumber" id="label4" />
          </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td><label for="select">
          <div align="left">Product</div>
        </label></td>
        <td>
          
                  <div align="left">
                            <select name="product" id="product">
                              <option>Choose product</option>
                              <option>Chicken Chop</option>
                              <option>Tom Yam</option>
                              <option>Shawarma</option>
                              <option>Roti Canai</option>
                              <option>Lamb Chop</option>
                              <option>Chicken Curry</option>
                              <option>Beef Burger</option>
                              <option>Kuey Teow</option>
                              <option>Special Burger</option>
                              <option>Chicken Burger</option>
                              
                    </select>
                  </div></td>
				  
				  <tr bgcolor="#00CC00">
        <td><label for="select">
          <div align="left">Select Total number</div>
        </label></td>
        <td>
          
                  <div align="left">
                            <select name="Totalnumber" id="Totalnumber">
                              <option>How much food</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                               <option>10</option>
                              
                    </select>
                  </div></td>
      </tr>
      <tr bgcolor="#00CC00">
        <td colspan="2"><label for="Submit"></label>
          
          <div align="center">
            <input name="Submit" type="submit" id="Submit" onclick="MM_validateForm('fname','','R','label','','R','label2','','RisEmail');return document.MM_returnValue" value="Submit" />
          </div></td>
      </tr>
    </table>
  </form>
</div>

<table width="100%" border="10" cellspacing="0" cellpadding="5" bordercolor="#00FF00">
  <tr bgcolor="#00CC00">
    <td><div align="center">
      <p>Contact : 013-3291272</p>
      <p>Email: mnazmi95.nn@gmail</p>
    </div></td>
  </tr>
  <tr bgcolor="#00CC00">
  <td><div align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.356921928445!2d101.7324808139519!3d3.2504766976335078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc38c2f70795af%3A0xf808897bf1163a3!2sOffice%20of%20Internal%20Audit%2C%20IIUM%20Gombak!5e1!3m2!1sen!2smy!4v1610641716906!5m2!1sen!2smy" width="500" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
 <div align="center"><p> Location to meet</p></div></td>
  </tr>
</table>
<br />
<br />
<div align="center">
<a href="file:Food homepage.html"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="home">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a></div>

</body>
<body background="Gambar jam/metal_slug_sub.png" >
</html>

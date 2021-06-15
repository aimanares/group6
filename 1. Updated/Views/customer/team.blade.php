@extends('customerDashboard')
@section('content')

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

@include('nav')

@endsection

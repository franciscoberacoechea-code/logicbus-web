<!DOCTYPE>
  <html>
  <head>
  <title>Responsive Table</title>
  <style> 
  /* only for demo purpose. you can remove it */
 .container{border: 1px solid #ccc; background-color: #ff0000; 
  margin: 10px auto;width: 98%; height:auto;padding:5px; text-align: center;}

 /* required */
.tablewrapper{width: 95%; overflow-y: hidden; overflow-x: auto; 
 background-color:green;  height: auto; padding: 5px;}

 /* only for demo purpose just for stlying. you can remove it */
 table { font-family: arial; font-size: 13px; padding: 2px 3px}
 table.responsive{ background-color:#1a99e6; border-collapse: collapse; 
 border-color: #fff}

tr:nth-child(1) td:nth-of-type(1){
 background:#333; color: #fff}
 tr:nth-child(1) td{
 background:#333; color: #fff; font-weight: bold;}
 table tr td:nth-child(2) {
 background:yellow;
}
 tr:nth-child(1) td:nth-of-type(2){color: #333}
 tr:nth-child(odd){ background:#ccc;}
 tr:nth-child(even){background:#fff;}
</style>
</head>
<body>

<div class="container">
<div class="tablewrapper">
<table  class="responsive" width="98%" cellpadding="4" cellspacing="1" border="1">
 <tr> 
 <td>Name</td> 
 <td>Email</td> 
 <td>Phone</td> 
 <td>Address</td> 
 <td>Contact</td> 
 <td>Mobile</td> 
 <td>Office</td> 
 <td>Home</td> 
 <td>Residency</td> 
 <td>Height</td>
 <td>Weight</td>
 <td>Color</td> 
 <td>Desease</td> 
 <td>Extra</td>
 <td>DOB</td>
 <td>Nick Name</td> 
</tr>
<tr>  
<td>RN Kushwaha</td>
<td>rn.kushwaha@test.com</td>
<td>--</td>  
<td>Varanasi</td>
<td>-</td> 
<td>999999999</td> 
<td>022-111111</td> 
<td>-</td>
<td>India</td> 
<td>165cm</td> 
<td>58kg</td> 
<td>bright</td> 
<td>--</td> 
<td>--</td> 
<td>03/07/1986</td> 
<td>Aryan</td> 
</tr>
</table>
</div>
</div>
</body>
</html>
</html>
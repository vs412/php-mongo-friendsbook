<html>

<head>
<style>
		body	{
		background-image:url("http://localhost/project/update.jpg") ;
		background-size:100% 100%;
		color: white;
		font-family: Monotype corsiva;
		font-size: 30px;
		font-weight:bold;
		letter-spacing:4px;
		}
		h2
		{	
				
			font-size: 70px;
			letter-spacing:4px;
		}
		 table
		{ 
		font-size:30px;
		text-color:green;
		letter-spacing:3px;
		
		}
		
</style>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;Friends Book</h2>
 <?php	 include("menu.html");	 ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Details Presesnt
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="20" >

<tr><td>Name:</td><td><input type="text" name="name" id="t1"></td>
<td> Nick Name:</td><td><input type="text" name="nickname" id="t2"></td></tr>
<tr><td>Mobile No:</td><td><input type="text" name="mno" id="t3"></td>
<td>Email Id:</td><td><input type="text" name="email" id="t4"></td></tr>
<tr><td>Address:</td><td><textarea name="address" rows="2" cols="22" scrolling="1" id="t5"></textarea></td>
<td>Zodiac Sign:</td><td><input type="text" name="zsign" id="t6"></td>
</tr>
<tr><td>Date of Birth:</td><td><input type="text" name="dob" id="t7"></td>
<td>Favourite Movie:</td><td><input type="text" name="movie" id="t8"></td
</tr>
<tr><td>Favourite Actor:</td><td><input type="text" name="actor" id="t9"></td>
<td>Favourite Actress:</td><td><input type="text" name="actress" id="t10"></td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="submit" name="sub"  >
&nbsp;&nbsp;<button name="reset"  onClick="erase()"  >Reset</button>
</form>

</body>
</html>

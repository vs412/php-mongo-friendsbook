
<html >

<head>

<style>
		body	{
		background-image:url("http://localhost/project/1.jpg") ;
		background-size:100% 100%;
		color: black;
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
		text-color:black;
		letter-spacing:3px;

		}

</style>

<title>My Slam Search</title>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Friends Book</h2>

<form action="search2.php" method="post">
<?php include("menu.html"); ?><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search Book</p><br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter Name : <input type="text" name= "name1">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="find1" >Search Record</button><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Nick Name : <input type="text" name= "nickname2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="find2" >Search Record</button>
</form>

</body>
</html>













<html >
<head>
<style>
		body
		{
		background-image:url("http://localhost/project/1.jpg") ;
		background-size:100% 100%;
		color: black;
		font-family: Monotype corsiva;
		font-size: 30px;

		}
		table
		{
			font-size:20px;
			letter-spacing:2px;
			font-weight:bold;
		}
		.many
		{
			-webkit-column-count:2;
			-webkit-column-gap:5px;
			-webkit-column-width: 200px;

		}

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;	
</style>
<title>My FriendView</title>
</head>
<body>

<a id="top" ></a>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Friends Book</h2>
<?php include("menu.html"); ?>

<center>
<table id="t01">
   <tr>
    <th>Name</th>
    <th>Mob.NO</th> 
    <th>Email</th>
    <th>DOB</th>
    <th>College</th> 
    <th>Branch</th>
  </tr>
 <tr>
    <td>vinay</td>
    <td>9109825451</td>
    <td>vs412882@gmail.com</td>
    <td>01-01-1996</td>
    <td>niit</td>
    <td>cse</td>
  </tr>
 <tr>
    <td>user1</td>
    <td>123456789</td>
    <td>user1@gmail.com</td>
    <td>01-01-1997</td>
    <td>niit</td>
    <td>cse</td>
  </tr>
  <tr>
    <td>user2</td>
    <td>123456789</td>
    <td>user2@gmail.com</td>
    <td>01-01-1998</td>
    <td>niit</td>
    <td>ece</td>
  </tr>
</table>
<?php
		$m=new mongoclient();
		$db=$m->project;
		$collection=$db->data;
		$cursor=$collection->find();
		$num=$cursor->count();
		
		
		if($num > 0)
		
		{
		    	
			
			       foreach ($cursor as $obj)
			        {
					
       					echo "<table cellspacing='2'><tr><td>";         echo "Name:" ;	echo "</td><td>";
							echo $obj["name"];      echo "</td></tr>";   
					
				echo "<tr><td>";	     echo "  Nickname: " ;	echo "</td><td>";
					   	  echo $obj["nickname"] ; 	echo "</td></tr>";

      				    echo "<tr><td>";     echo "Mobile No: " ;  echo "</td><td>";
						echo  $obj["mno"] ;     echo "</td></tr>";

				 echo "<tr><td>";      echo "Email: " ;	echo "</td><td>";
					 	echo $obj["email"] ;    echo "</td></tr>";

				echo "<tr><td>";   	echo "Address:" ; 		echo "</td><td>";
						echo $obj["address"] ;	 echo "</td></tr>";

				echo "<tr><td>";   	echo "Zodiac Sign: " ; 	echo "</td><td>";
						echo $obj["zsign"] ;		 echo "</td></tr>";

				echo "<tr><td>";   	echo "Date of Birth: " ;	echo "</td><td>";
						echo  $obj["dob"] ;		 echo "</td></tr>";

				echo "<tr><td>";   	echo "Hobby:" ;	echo "</td><td>";
						echo $obj["movie"] ;		 echo "</td></tr>";

				echo "<tr><td>";   	echo "College: " ; 		echo "</td><td>";
						echo $obj["actor"] ;		 echo "</td></tr>";

				echo "<tr><td>";   	echo "Branch: " ;	echo "</td><td>";
				
					echo $obj["actress"] ;	 echo "</td></tr></table><hr width='600px'>";
				
  			      }
			   
		}
		
?>
<form action="<?php  $_SERVER['PHP_SELF'];  ?>"   method="post">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<button name="top" ><a href="#top">Top</a></button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button name="back" >Search</button>
	
</form>
</center>
<?php
	if(isset( $_POST['back']) )
	{
		header("Location:http://localhost/project/search.php");
	}
				
?>

</body>
</html>

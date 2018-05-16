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

				
		
</style>

<title>My Friend Delete</title>
</head>
<body>
<center><h4>Contact deleted</h4></center>
<?php
	$delname=$_POST['name3'];
	
	$m=new mongoclient();
	$db=$m->project;
	$collection=$db->data;
	
	$flag=0;
	if( isset($_POST['find3']) )
	{
		
		
		$doc=array(  "name" => "$delname" );
		$cursor=$collection->find($doc);
		$num=$cursor->count();
		if($num > 0)
		
		{
		    	echo "<div class='many'> <table cellspacing='10'>" ; 
			
			       foreach ($cursor as $obj)
			        {
       					echo "<tr><td>";         echo "Name:" ;	echo "</td><td>";
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
						echo $obj["actress"] ;	 echo "</td></tr>";
  			      }
			   echo "</table></div>";
		}	
	}
	if( isset($_POST['find3']) )
	{
		$select=$collection->find();
		foreach($select as $id)
		{
     			   $uname = $id['name'];
			if($uname==$delname)
			{ 
				$collection->remove(array("name"=>$uname) );
				$flag=1;
			}
				
    		}
		if($flag==0)
		{
			echo " <br>Incorrect Name.  Please Verify";
		}
	}
		 
?>
<form action="<?php  $_SERVER['PHP_SELF'];  ?>"   method="post">
	<br>	<center><button name="back" >Go Back</button></center>
</form>
<?php
	if(isset( $_POST['back']) )
	{
		header("Location:http://localhost/project/delete.php");
	}		
?>
</body>
</html>
 

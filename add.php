
<html >
<head>
<script language="javascript">
function erase();
{
	document.getElementById("t1").value="";
	document.getElementById("t2").value="";
	document.getElementById("t3").value="";
	document.getElementById("t4").value="";
	document.getElementById("t5").value="";
	document.getElementById("t6").value="";
	document.getElementById("t7").value="";
	document.getElementById("t8").value="";
	document.getElementById("t9").value="";
	document.getElementById("t10").value="";
}



</script>

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

<title>My Friend Add</title>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;Friends Book</h2>
<?php include("menu.html"); ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Fill Details
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="20" >

<tr><td>Name:</td><td><input type="text" name="name" id="t1" placeholder="First_Name Last_Name " autofocus></td>
<td> Nick Name:</td><td><input type="text" name="nickname" id="t2" placeholder="eg. John " autofocus></td></tr>
<tr><td>Mobile No:</td><td><input type="text" name="mno" id="t3" placeholder="10 digit No " autofocus></td>
<td>Email Id:</td><td><input type="text" name="email" id="t4" placeholder="eg.abc@xyz.com" autofocus></td></tr>
<tr><td>Address:</td><td><textarea name="address" rows="2" cols="22" scrolling="1" id="t5" placeholder="Flat no, Area, City, Pincode." autofocus></textarea></td>
<td>Zodiac Sign:</td><td><input type="text" name="zsign" id="t6"></td>
</tr>
<tr><td>Date of Birth:</td><td><input type="text" name="dob" id="t7" placeholder="dd/mm/yyyy"></td>
<td>Hobby:</td><td><input type="text" name="movie" id="t8"></td
</tr>
<tr><td>College:</td><td><input type="text" name="actor" id="t9"></td>
<td>Branch:</td><td><input type="text" name="actress" id="t10"></td>
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
<?php
	$pname=$_POST['name'];
	$pnickname=$_POST['nickname'];
	$pmno=$_POST['mno'];
	$pemail=$_POST['email'];
	$paddress=$_POST['address'];
	$pzsign=$_POST['zsign'];
	$pdob=$_POST['dob'];
	$pmovie=$_POST['movie'];
	$pactor=$_POST['actor'];
	$pactress=$_POST['actress'];





if(isset($_POST['sub']) )
	{
		$m= new MongoDB\Driver\Manager("mongodb://localhost:27017");
		$bulk = new MongoDB\Driver\BulkWrite;
		$doc=array("name"=>"$pname","nickname"=>"$pnickname","mno"=>$pmno,"email"=>"$pemail","address"=>"$paddress",
			   "zsign"=>"$pzsign","dob"=>"$pdob","movie"=>"$pmovie","actor"=>"$pactor","actress"=>"$pactress");
		$bulk->insert($doc);
  		$m->executeBulkWrite('project.data', $bulk);
		$db=$m->project;
		$collection=$db->data;


	if( isset($_POST['name']))
	{
		$cursor=$collection->find();
		$num=$cursor->count();
		if($num > 0)

		{


			      	 foreach ($cursor as $obj)
			       	 {
					if( ($obj["name"]==$pname))
					{

					echo "<script language='javascript'> alert('username alreasy exists..!!')</script>";
   					location.reload();
					}
					else  if (empty($_POST["name"]))
{
echo "<script language='javascript'> alert('username cannot be empty!!')</script>";
location.reload();
}

else if (!preg_match("/^[a-zA-Z ]*$/",$pname))
	{
	echo "<script language='javascript'> alert('only letters allowed!!')</script>";
	location.reload();
	}

else if(empty($_POST["nickname"]))
	{
    	echo "<script language='javascript'> alert('nickname cannot be empty!!')</script>";
	location.reload();
	}

else if(strlen($pmno)!=10)
    	{
        echo "<script language='javascript'> alert('invalid contact number!!')</script>";
   	location.reload();
	}

else if (empty($_POST["email"]))
	{
	echo "<script language='javascript'> alert('email is required!!')</script>";
	location.reload();
	}

else if (empty($_POST["email"]))
	{
	echo "<script language='javascript'> alert('email is required!!')</script>";
	location.reload();
	}



else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$pemail))
	{
	echo "<script language='javascript'> alert('invalid email id!!')</script>";
	location.reload();
	}

else if ($paddress==NULL)
	{
	echo "<script language='javascript'> alert('address field cannot be empty!!')</script>";
	location.reload();
	}
  			    	  }

		}
}	
		$bulk->insert($doc);
  		$m->executeBulkWrite('project.data', $bulk);
		echo "Added to Book";
	}






?>
</body>
</html>

add.php
Displaying add.php.

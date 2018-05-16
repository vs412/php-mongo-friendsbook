<html>
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

<body>
<h2>&nbsp;&nbsp;&nbsp;Friend Book</h2>
<?php include("menu.html");  $gotname=$_POST['name4']; ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Update Details of <?php  echo $gotname; ?>
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="20" >

<tr><td>Name:</td><td><input type="text" name="name" id="t1"></td>
<td> Nick Name:</td><td><input type="text" name="nickname" id="t2"></td></tr>
<tr><td>Mobile No:</td><td><input type="text" name="mno" id="t3"></td>
<td>Email Id:</td><td><input type="text" name="email" id="t4"></td></tr>
<tr><td>Address:</td><td><textarea name="address" rows="2" cols="22" scrolling="1" id="t5"></textarea></td>
<td>Zodiac Sign:</td><td><input type="text" name="zsign" id="t6"></td>
</tr>
<tr><td>Date of Birth:</td><td><input type="text" name="dob" id="t7"></td>
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
	$pactor=$_POST[actor];
	$pactress=$_POST[actress];
	if(isset($_POST['sub']) )
	{
	
	//$pname=$_POST["name4"];
	//working fine
	//$pno=$_POST["roll"];
	
	$m=$m= new MongoDB\Driver\Manager("mongodb://localhost:27017");
	$db=$m->project;
	$collection=$db->data;
	$cursor=$collection->find();
	$num=$cursor->count();
	
	if($num > 0)
		
		{
		    	 
				
			       foreach ($cursor as $obj)
			        {
					if( $obj["name"]==$pname )
					{
					//echo $pname;
					//echo $pno;
					 $collection->remove(array("name"=>"$pname"));
					$doc=array("name"=>"$pname","nickname"=>"$pnickname","mno"=>					$pmno,"email"=>"$pemail","address"=>"$paddress",
					   "zsign"=>"$pzsign","dob"=>"$pdob","movie"=>"$pmovie","actor"=>"$pactor","actress"=>"$pactress");
					$collection->insert($doc);
					echo "Added to Book";
	
						
					}
  			      }

	}
}
?>

</body>
</html>

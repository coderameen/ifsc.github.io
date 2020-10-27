<!--how to get bank details from ifsc code using php https://ifsc.razorpay.com/SBIN0000691  -->
<html>
<head>
	<title>ifsc details</title>
	<style type="text/css">
		#bgstyle{
			background-image: url('bank.jpg');
			width:100%;
			height: 100vh;
			background-size: 100% 100%;
			
			background-repeat: no-repeat;
		}
		#block{
			background-color: rgba(232, 225, 7,0.7);
			width:27%;
			height: 250px;
			background-size: 100% 100%;
			margin-top: 100px;
			margin-left:450px;
			border:2px solid darkblue;
			border-radius: 5px;

		}
	</style>
	</head>
	<body id="bgstyle">
		<div id="block">
			<center>
<form method="post">
	<h2 style="padding-top:1px;text-shadow:5px 5px 8px ">ENTER THE IFSC CODE:</h2>
	<input type="textbox" name="ifsc" style="margin-top:50px;border:4px solid darkblue;padding:10px;border-radius: 5px" required>

</br></br>
	<input type="submit" name="submit" style="border:1px solid darkblue;padding:10px;border-radius: 10px;background-color:rgba(91, 230, 53);">

</form>
</center>
</div>
</body>
<?php
//echo	$ifsc=$_POST['ifsc'];//to retrive the data form input field
if(isset($_POST['ifsc']))
{
	$ifsc=$_POST['ifsc'];
	$json=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
	//echo $json;
	$arr=json_decode($json);
	/* echo '<pre>';
	print_r($arr); */

    /*
	echo "Branch:-".$arr->BRANCH."<br>";
	echo "Address:-".$arr->ADDRESS."<br>";
	echo "city:-".$arr->CITY."<br>";
	echo "state:-".$arr->STATE."<br>";
	echo "bank:-".$arr->BANK."<br>"; */
	

    if(isset($arr->BRANCH)){  ?>
<div style="background-color: lightgreen;
			width:30%;
			height: 150px;
			background-size: 100% 100%;
			margin-top: 100px;
			margin-left:450px;
			border:2px solid green;
			border-radius: 5px;
">
	<center>
    	<?php
	echo "Branch:-".$arr->BRANCH."<br>";
	echo "Address:-".$arr->ADDRESS."<br>";
	echo "city:-".$arr->CITY."<br>";
	echo "state:-".$arr->STATE."<br>";
	echo "bank:-".$arr->BANK."<br>";
    }else{
    	echo "Invalid ifsc code,:(";
    }
	



}



?>

</center>
</div>
<footer>
	<center>
	<h4 style="color:white">designed by Mohammed Ameen</h4>
</center>
</footer>
</html>
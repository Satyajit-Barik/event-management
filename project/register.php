<?php 

include("conection.php");
error_reporting(0);
?>


<!DOCTYPE html>

<html>
<head>
	<title></title>
	<style>
		
		#s1{
			text-align: center;
			color: green;
		}
		h1{
			color: grey;
			text-align: center;
		}
		body{

			background-image:url(background-images-for-registration-page-11.jpg); 
		}

	</style>
	<h1>REGISTRATION FORM</h1>
</head>
<body>
	
	<form  method="POST" onsubmit="return check()">
		<table bgcolor="lightblue" border="1" cellpadding="15" align="center">
		<tr>
		      <td>Enter your name:</td>
		      <td><input type="text" name="name" id="name"><br></td>
		</tr>
		<tr>
		   <td>
			Enter your email:
		</td>
			<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="e1"><br></td>
	   </tr>
	   <tr>
	   	 <td>
		Enter your mobile number:
	    </td>
		<td><input type="text" name="phnno" id="checkno"><br>
		 </td>
	   </tr>
	   <tr>
	   	 <td>
		Enter your password:
	    </td>
		<td>
			<input type="password" name="password" id="password">
		 </td>
	   </tr>
	</table>
	<table align="center">
		<tr><td>
        <input type="submit" id="s1" name="submit" value="submit">
        </td>
    </tr>
        <tr><td>
        	
        </td></tr>
        <tr><td>
        <span id="s"></span><br>
        </td></tr>
     </table>   
        
	</form>

    <script type="text/javascript">
		

		function check(){

			var w=document.getElementById("e1").value;

		   var z=document.getElementById("name").value;

           var x=document.getElementById("checkno").value;
           
           var a=document.getElementById("password").value;

        if (z=="") {

            document.getElementById("s").innerHTML="**please enter your name"
             document.getElementById("s").style.color="red"  
             return false;
          }

          if (!isNaN(z)) {

            document.getElementById("s").innerHTML="**enter only characters"
             document.getElementById("s").style.color="red"
             return false;

          }

          

          else if (w=="") {

            document.getElementById("s").innerHTML="**please enter email"
             document.getElementById("s").style.color="red"
             return false;
          }

           
            else  if (x=="") {

            document.getElementById("s").innerHTML="**please enter your number"
             document.getElementById("s").style.color="red"
             return false;
          }

          if (isNaN(x)) {

            document.getElementById("s").innerHTML="**please enter a number"
             document.getElementById("s").style.color="red"
             return false;

          }

          if (x.length<10) {
            document.getElementById("s").innerHTML="**please enter 10 digit number"
             document.getElementById("s").style.color="red"
             return false;
          }

          if (x.length>10) {
                document.getElementById("s").innerHTML="**please enter 10 digit number"
             document.getElementById("s").style.color="red"
             return false;

          }
          if ((x.charAt(0)!=9) && (x.charAt(0)!=8)) {
                  
                  document.getElementById("s").innerHTML="**please enter valid digit number"
             document.getElementById("s").style.color="red"
             return false;

          }
          if(a=="")
			{
				document.getElementById("s").innerHTML="please enter your password"
				document.getElementById("s").style.color="red"
				return false;
			}

			if(a.length<8)
			{
				document.getElementById("s").innerHTML="use 8 digit password"
				document.getElementById("s").style.color="red"
				return false;
			}

			else if(a.search(/[0-9]/) == -1)
			{
				document.getElementById("s").innerHTML="atleast one numerical value"
				document.getElementById("s").style.color="red"
				return false;
			}

			else if(a.search(/[a-z]/) == -1)
			{
				document.getElementById("s").innerHTML="atleast one small letter must be enter"
				document.getElementById("s").style.color="red"
				return false;
			}
			else if(a.search(/[A-Z]/) == -1)
			{
				document.getElementById("s").innerHTML="atleast one upper letter must be enter"
				document.getElementById("s").style.color="red"
				return false;
			} 
			else{
			   document.getElementById("s").innerHTML="successful"
				document.getElementById("s").style.color="green"
				return true;
			}
          
        }
	</script>
	<?php
	// if(isset($_POST['submit'])){
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$phnno = $_POST['phnno'];
	// 	$password = $_POST['password'];
	// 	echo $name;
	// 	echo $email;
	// 	echo $phnno;
	// 	echo $password;
	// }

   if (isset($_POST['submit'])) 
 {
 	
 	$name=$_POST['name'];
 	$e=$_POST['email'];
 	$p=$_POST['phnno'];
 	$s=md5($_POST['password']);
 	 	
 	if ($name!="" && $e!="" && $p!="" && $s!="")
 		{
 		
 		$query="insert into registration values('','$name','$e','$p','$s')";
 		$data=mysqli_query($con,$query);

 			if ($data) 
 			{
 			  echo "data inserted successfully";
 			}
       }
       else
       {

 			echo "required";
 	    }
	 
}



	?>

</body>
</html>
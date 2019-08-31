<?php include('conection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION</title>
</head>
<body>
    <form method="post">
        <table border="1" cellpadding="10" cellspacing="10" align="center" bgcolor="cyan">
            <tr>
                <td>username: <input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Password: <input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php   
    if (isset($_POST['submit'])) {
        # code...
        $username = $_POST['name'];
        $password = md5($_POST['password']);
        $sql="SELECT * from registration where name ='".$username."' AND password='".$password."'  ";
        
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            echo " you have successfully logged in";
        }
        else
        {
            echo  " you have entered incorrect password";
        }
    }

?>
</html>

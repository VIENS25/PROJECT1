<?php 
$username = "";
$usererr = "";
$passerr = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
if($username == "admin"){
    if( $_POST['pin'] == 12345){
        header ("Location: formulir.html");
    }else{
        $passerr = "password anda salah!!";
    }
}else{
    $usererr = "username salah!!";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>RESTORAN VIENSX_</title>
    
</head>
<body>

   <center>
   <h1 class ="h1"> RESTORAN SUKA SUKA</h1>
     <div class="div">
         <h2 class = "jarak2"> DAFTAR BARU PESAN </h2>
            <form action ="<?php echo $_SERVER['PHP_SELF']?>" method="POST">  

                <input class = "jarak3" type= "text" name ="username" placeholder = "username"><br><br>
                <p><?php echo $usererr;?></p>
                <input class = "jarak3" type= "password" name = "pin" placeholder = "password"><br><br>
                <p><?php echo $passerr;?></p>
                <input class=" jarak4" type = "submit" value = "Simpan">

            </form>
     </div>         
    
    </center>
</body>
</html>
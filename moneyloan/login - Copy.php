<?php 

include 'header.php';
error_reporting(0);

?>


<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/gif" href="animated_favicon1.gif">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3 css/w3.css">


<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>
<body style="background-color: #E7D3D5">

<!-- Content -->
<div class="w3-content" style="max-width:75%;margin-top:80px;margin-bottom:40px">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;">
  <center>
  
  <span>
   <br>
   <form action="#" method="post">
    <input type="text" name="txtUN" placeholder="Username" style="text-align: center;font-size: 150%;width: 50%;background-color: #ffffff;color: black;"><br><br>
    <input type="password" name="txtPW" placeholder="Password" style="text-align: center;font-size: 150%;width: 50%;background-color: #ffffff;color: black;"><br><br>
    <input type="submit"  value="LOGIN" style="text-align: center;font-size: 200%;font-weight: bolder;background-color:  #4E424F;color: rgb(255,255,255);"></form>
    

<?php
session_start();

if ($_SESSION['strLogin']=="yes") {
	        //header("Location: logged-in.php");
 echo '<script type="text/javascript">
        window.location.href="logged-in.php";
			  </script>';

}else{

if($_SERVER['REQUEST_METHOD']=='POST'){
 $user = $_POST['txtUN'];
    $pass = $_POST['txtPW'];


//$conn = mysqli_connect("localhost", "id4079997_cherrymobileq6i", "iamasinner555", "id4079997_account");
// $con="mysql:host=localhost;dbname=db_moneyloan"; // mysql

// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => FALSE, 
// ];

// try {
//  $pdocon = new PDO($con,"root","", $options);  
// } catch (\PDOException $e) { 
//     throw new \PDOException($e->getMessage(), (int)$e->getCode());

//     }




//$conn = mysqli_connect("localhost", "root", "", "db_moneyloan");




if(empty($_POST["txtUN"]) || empty($_POST["txtPW"]))
{
$error = "both fields are required.";
}else{




// echo "<script>already logged-in!  </script><br><br><br><br><br><br><br><br>".$_SESSION['user']."not";
    $user = $_POST['txtUN'];
    $pass = $_POST['txtPW'];


//$con=mysqli_connect("localhost","root","","account");
// Check connection


// $pds=$pdo->prepare($sql);
// foreach($products as $p) {
//      $pds->execute(array($p));
// }

//$count=$pdo->query($sql)->fetchColumn();



//) {
     // successful; $row now contains the rest of the details

    /////////////////////////
//   try {
//     $conn = new PDO("mysql:host=localhost;dbname=db_moneyloan", "root", "");
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }


//     // $sql="SELECT Role FROM login";

//     $sql="SELECT Role FROM login WHERE Username = $user";

//     $pds=$PDO->prepare($sql);

//     $pds=$PDO->query($sql);

//     $PDO->exec($sql);

//     echo "";

        /////////////////////////


    // $res1= $conn->query($sql);
    //  while ($row1 = $res1->fetch_assoc()):; 
    //    echo  $row1['User_ID'];
    //    echo "<script>alert('while');</script>";
    //  endwhile;

// $pds=$pdo->prepare($sql);
// $pds->execute([$user]);
// //if(
//   $row=$pds->fetch(PDO::FETCH_NUM);
//   if(!$row) exit('No rows');
//   var_export($row);
//   //list($id)=$row;
//   echo "$id".$row.$row['User_ID'];
//   $pds = null;

// }
// else {
//      // unsuccessful ($row is FALSE)
//   echo $row."else";
// }

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    $_SESSION['rights']=$row[0];
    }
  // Free result set




$sql="SELECT Username FROM login";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo "".$row[0];
    }
  // Free result set
  mysqli_free_result($result);
}

  mysqli_free_result($result);
}

        
    $query = mysqli_query($conn, "SELECT * FROM login WHERE Username = '$user' and Password = '$pass' ");
     	
    $rows = mysqli_num_rows($query);
   
    if ($rows >= 1 ){
  
    $_SESSION['user']=$user;


        header("Location: logged-in1.php");

        $_SESSION['strLogin']="yes";

 
       }
    else
    {
     echo "<script>
     alert('Username & Password Incorrect!');
     window.location.href='login.php';
     </script>";
        }
    
}

}
}
?>

    <br><br>

  </span>

</center>

</div>
</div>
</div>

<?php 

include 'footer.php';

?>

<?php
session_start();
?>



<html>
<head>
<title>
Employee info Hiking Buddies
</title>

<style>
    body
{
    background-color: rgb(172, 172, 243);
}
.header .container img
{
    width: 150px;
    height: 80px;
    float: left;
}
h1
{
    text-align: center;
}
h4{
    margin-top: 150px;
    text-align: left;
    margin-left: 500px;
    font-size: 20px;
    
}

h5{
    
    text-align: left;
    margin-left: 500px;
    font-size: 20px;
}
h3{
    margin-right: 500px;
}

button {
    background-color: rgb(250, 182, 56);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px;
    cursor: pointer;
    width: 10%;
    margin-left: 900px;
  }
  #btn:hover {
    background-color: rgb(69, 86, 243);
  }

  .arrow
{
    background-color: rgb(247, 191, 89);
}

    </style>
</head>
<body>
<div class="arrow">
        <font size=3 align='center'><a href="i clogin.php"><img src="arrow.jpg" height="20px" width="20px"/></a></font></button>    
    </div>
<section class="header">
<div class="container">
<img src="bb.jpg">
</div>
<form action="i clogin.php" method="post">
<?php
$username=$_SESSION["username"];
$password=$_SESSION["password"];


$conn=new mysqli('localhost','root','','country');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from login_details where username='$username' and password='$password'");
$row=mysqli_fetch_array($result);
if($row==FALSE)
{
    echo" wrong Credentials" ;
    exit();
}
if($row['username']==$username && $row['password']==$password)
{
    ?>
    <h1>Welcome <?php echo "". $row['fname'] ?>  </h1>
    
     
     <h4> First Name: :<?php echo "".$row['fname'] ?> </h4>
     <h5> Middle Name :<?php echo "".$row['mname'] ?> </h5>
     <h5> Last Nmae :<?php echo "".$row['lname'] ?> </h5>
     <h5> Address :<?php echo "".$row['address'] ?> </h5>
     <h5> contact :<?php echo "".$row['pnum'] ?> </h5>
     <h5> Email ID :<?php echo "".$row['emailid'] ?> </h5>

     <h5> Username :<?php echo "".$row['username'] ?> </h5>
     <button type="submit" id="btn">Back</button>




    <?php
}
else{
    ?>
    <h2> sorry <?php echo "failed "; ?> to login </h2>
    
     
     <?php
}
?> 
</form>
</section>
</body>
</html>
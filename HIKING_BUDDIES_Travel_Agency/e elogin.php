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
    border: none;
    cursor: pointer;
    width: 10%;
    margin-left: 900px;
  }
  #btn:hover {
    background-color: rgb(69, 86, 243);
  }
    </style>
</head>
<body>
<section class="header">
<div class="container">
<img src="bb.jpg">
</div>
<form action="a home page.html" method="post">
<?php
$username=filter_input(INPUT_POST,'uname');
$password=filter_input(INPUT_POST,'psw');


$conn=new mysqli('localhost','root','','branch');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from emp where username='$username' and password='$password'");
$row=mysqli_fetch_array($result);
if($row==FALSE)
{
    echo" wrong Credentials" ;
    exit();
}
if($row['username']==$username && $row['password']==$password)
{
    ?>
    <h1>Welcome <?php echo "". $row['name'] ?>  </h1>
    
     <h3> <?php echo '<img src="data: image; base64,'.base64_encode($row['image']).'"  style="width :100px; height : 100px;"  align="right">';?></h2>
     <h4> Name :<?php echo "".$row['name'] ?> </h4>
     <h5> DOB :<?php echo "".$row['DOB'] ?> </h5>
     <h5> Designation :<?php echo "".$row['designation'] ?> </h5>
     <h5> Salary :<?php echo "".$row['salary'] ?> </h5>
     <h5> Missions :<?php echo "".$row['Missions'] ?> </h5>
     <h5> Languages Known :<?php echo "".$row['Languages'] ?> </h5>
     <h5> Blood-Group :<?php echo "".$row['Blood-Group'] ?> </h5>
     <h5> Adress :<?php echo "".$row['adress'] ?> </h5>
     <h5> Username :<?php echo "".$row['username'] ?> </h5>
     <h5> Password :<?php echo "".$row['password'] ?> </h5>
      <button type="submit" id="btn">Logout</button>



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
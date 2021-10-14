<html>
    <head>
        <title>Sign In </title>
        <style>
                button {
    background-color: rgb(250, 182, 56);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
    margin-right : 900px;
    margin-bottom : 900px;
  }

  #btn:hover {
    background-color: rgb(69, 86, 243);
  }

  .arrow
{
  padding-top:0;
    background-color: rgb(247, 191, 89);
}
 h1
{
    padding-top: 100px;
    padding-bottom: 0;
    font-size: 55px;
    
}

.form h2
{
    padding-top: 100px;
    padding-bottom: 0;
    font-size: 55px;
    
}
.form h3
{
    padding-top: 100px;
    padding-bottom: 0;
    font-size: 55px;
    
}

body
{
  background-color: rgb(172, 172, 243);
}

            </style>
</head>
<body>
<div class="arrow">
        <font size=3 align='center'><a href="d SignUp.html"><img src="arrow.jpg" height="20px" width="20px"/></a></font></button>    
    </div>
    <form action="i clogin.html" method="post">

    <?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$emailid=filter_input(INPUT_POST,'emailid');
$fname=filter_input(INPUT_POST,'fname');
$mname=filter_input(INPUT_POST,'mname');
$lname=filter_input(INPUT_POST,'lname');
$address=filter_input(INPUT_POST,'address');
$DOB=filter_input(INPUT_POST,'DOB');
$pnum=filter_input(INPUT_POST,'pnum');
$conn=new mysqli('localhost','root','','country');
$result1=mysqli_query($conn,"select * from login_details where username='$username'");
$row1=mysqli_fetch_array($result1);

if($row1==FALSE)
{
$result=mysqli_query($conn,"INSERT INTO login_details(username,password,emailid,fname,mname,lname,address,pnum,DOB) values('$username','$password','$emailid','$fname',
'$mname','$lname','$address','$pnum','$DOB')");

?>
<h2>You are successfully logged in </h2>
<h3>We sent you welcome mail, now enjoy</h3>
<button type="submit" id="btn">Login</button>

 <?php








require 'phpmailer/PHPMailerAutoload.php';
$mail =new PHPMailer;
$mail ->isSMTP();

$mail ->Host='smtp.gmail.com';
$mail ->Port=587;
$mail ->SMTPAuth=true;
$mail ->SmTPSecure= 'tls';

$mail ->Username= 'hikingbuddies2020@gmail.com';
$mail ->Password= 'Ninad2001#';

$mail ->setFrom('hikingbuddies2020@gmail.com','Travel agency');
$mail ->addAddress($emailid);
$mail ->addReplyTo('hikingbuddies2020@gmail.com');

$mail ->isHTML(true);
$mail ->Subject= 'Hiking Buddies';
$mail ->Body=
"<h1>Welcome to Hiking Buddies</h1>".
"<br>".
"<h3>You will enjoy with us </h3>"."<h3><b>$fname</b></h3>".
"<br>".
"<h3>Your username  : </h3> "."<h3><b>$username</b></h3>".
"<br>".
"<h3>Your Password  :  </h3>"."<h3><b>$password</b></h3>".

"<br>".
"<h3><b>For any query contact 7066196933</b></h3>"


;
if(!$mail->send())
{
  echo"not sent";
}


}

else
{
  ?>
  <h1 ><?php echo "user already exist"?></h1>
  <?php exit(); ?>

  <?php
}   

?>

</form>
</html>
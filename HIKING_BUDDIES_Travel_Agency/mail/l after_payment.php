
<html>
    <head>
        <title>Payment</title>
    </head>
    <style> 
    .child{
        background-color: plum;
        text-align: center;
        width:200px;
        height:20px;
        width:400px;
        height:120px;
        left: 220;
        top:220;
        bottom:220;
        right:220;
        margin:auto;
        border-radius: 10px;
        padding:40px;
        

    }

    body{
            background-color: papayawhip;
        }

        .input-group
{
    width: 90% !important;
    max-width: 500px;
    border-radius: 30px;
    background: #fff;
    margin: auto;
    padding: 2px;
}

.form-control
{
    border: 0 !important;
    border-radius: 30px !important;
    margin: 2px;
    box-shadow: none !important;
}

        .input-group-text
{
    width: 100px;
    background-color: rgb(247, 191, 89);
    border: 0 !important;
    color: black !important;
    padding: 0 25px !important;
    border-radius: 30px !important;
    box-shadow: none;
    cursor: pointer;
}
    </style>
    </head>

<body>


<?php
$package=filter_input(INPUT_POST,'package');
$username=filter_input(INPUT_POST,'username');

$conn=new mysqli('localhost','root','','country');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from city where name='$package'");
$result1=mysqli_query($conn,"select * from login_details where username='$username'");
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);

if($row==FALSE || $row1==FALSE)
{
    echo" error in payment" ;
    exit();
}
else
{
?>

 <h4 align="center"><font size=10>  <b><?php echo "".$row['price'] ?> Amount is paid by <?php echo "".$row1['username'] ?>  </b></h4>

    
    
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center"><font color="white" size=5>Hiking Buddies</font></td>
            </tr>
        </table>

      <div class="child">
            <h1 align="center"><font size=40 >Payment Success ! </font></h1>

        </div>
        
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center"><font color="white" size=5>Thank You</font></td>
            </tr>
        </table>
        
    <?php
}
?>


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
$mail ->addAddress("".$row1['emailid']);
$mail ->addReplyTo('hikingbuddies2020@gmail.com');

$mail ->isHTML(true);
$mail ->Subject= 'PHP Mailer Subject';
$mail ->Body=

'<h1> this is first trail done?</h1>';


if(!$mail ->send()){

    echo "not sent";    
}

else{
    echo "Mail sent to you successfully ?  ";
}



?>


</body>
</html>

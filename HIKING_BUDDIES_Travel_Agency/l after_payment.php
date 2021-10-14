
<?php
session_start();
?>

<html>
    <head>
        <title>Payment</title>
    </head>
    <style> 
    .child{
        background-color: lightblue;
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

.container img
        {
            height: 60px;
            width:120px;
            float:left;
        }
    </style>
    </head>

<body>

<?php
$username=$_SESSION["username"];
$password=$_SESSION["password"];
$name=$_SESSION["name"];

$conn=new mysqli('localhost','root','','country');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from login_details where username='$username' and password='$password'");
$row=mysqli_fetch_array($result);

$result1=mysqli_query($conn,"select * from city where name='$name'");
$row1=mysqli_fetch_array($result1);



$country="".$row1['name'] ;
$price_amount="".$row1['price'] ;
$insurance_amount= "".$row['insurance_amount'];
$total=$price_amount+$insurance_amount;
$tax=$total*0.01;
$net_total=$total+$tax;
$person="".$row['username'];
$ad="".$row1['a_date'] ;
$dd="".$row1['d_date'] ;
$manager="".$row1['manager'] ;
?>



    
    
        <table width=100% height=10% bgcolor="orange">
            <tr>
                
                <td align="center">   <div class="container">

<img src="bb.jpg">

</div><font color="black" size=5>Hiking Buddies</font></td>
            </tr>
        </table>

      <div class="child">
            <h1 align="center"><font size=40 >Payment Success ! </font></h1>
            <h2 align="center"><font size=5 ><a href="invoice.php">Get receipt invoice</a></font></h2>

        </div>
        
        <table width=100% height=10% bgcolor="black">
            <tr>
                <td align="center"><font color="white" size=5>Thank You</font></td>
            </tr>
        </table>
        
    


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
$mail ->addAddress("".$row['emailid']);
$mail ->addReplyTo('hikingbuddies2020@gmail.com');

$mail ->isHTML(true);
$mail ->Subject= 'Hiking Buddies';
$mail ->Body=
"<h1>Thanks for Chossing us as your Travel partner</h1>".
"<br>".
"<h3>You will enjoy in </h3>"."<h3><b>$country</b></h3>".
"<br>".
"<h3>Your Departure flight: </h3> "."<h3><b>$ad</b></h3>".
"<br>".
"<h3>Your Arrival flight:  </h3>"."<h3><b>$dd</b></h3>".
"<br>".
"<h3>Guide with you:   </h3>"."<h3><b>$manager</b></h3>".
"<br>".
"<h3><b>For any query contact 7066196933</b></h3>"


;








if(!$mail ->send()){

    echo " not sent";    
}





?>


</body>
</html>

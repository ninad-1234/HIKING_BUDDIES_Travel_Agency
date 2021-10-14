
<?php
session_start();
?>

<html>
    <head>
        <title>Travel Insurance</title>
    </head>
    <style> 
    .child{
        background-color: rgb(247, 191, 89);
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
    .container img
    {
        float:left;
        width:120px;
        height:60px;
    }
    #button
            {
                background-color: orange;
                height:40px;
                width:150px;
                border-radius: 25px;
                font-size: large;
                cursor: pointer;
            }
#button:hover
{
    background-color: rgb(69, 86, 243);
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
$result=mysqli_query($conn,"update login_details set insurance='YES' where username='$username'");
$result1=mysqli_query($conn,"select * from city where name='$name' ");
$row=mysqli_fetch_array($result1);
$insurance_amount="".$row['price']*0.01;
?>

    
    <form action="l payment.php">


    
        <table width=100% height=10% bgcolor="orange">
            
            <tr>
                
                <td align="center">
                <div class="container">

<img src="bb.jpg">

</div><font color="black" size=5>Hiking Buddies</font></td>
            </tr>
        </table>

        <br><br><br><br>
        <div class="child">
            <h1 align="center"><font size=40 >
        <?php 
        echo "Net Premium Amount ";
        echo $insurance_amount;
        ?>
        <?php

$result2=mysqli_query($conn,"update login_details set insurance_amount='$insurance_amount' where username='$username'");

        ?>
        </font></h1>

      

        </div>

        <br><br><br><br><br>
        <table width=100% height=10% bgcolor="orange">
            <tr>
                <td align="center"><font color="black" size=5>Wishing you a very Happy Journey !</font></td>
            </tr>
            <tr>
            
            <td colspan="2" align='center'><input type="submit" value="Payment" id="button"></td>
         
        </tr>
        </table>
        </form>
</body>
</html>

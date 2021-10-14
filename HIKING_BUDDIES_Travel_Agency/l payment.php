
<?php
session_start();
?>
<html>
    <head>
        <title>Payment</title>
    </head>
    <style>
        table{
            font-size: 20px;
        }
        #button
            {
                background-color: rgb(250, 182, 56);
                height:40px;
                width:150px;
                border-radius: 25px;
                font-size: large;
            }
            #button:hover
            {
                background-color: rgb(69, 86, 243);
            }
            #button1
            {
                background-color: red;
                height:40px;
                width:150px;
                border-radius: 25px;
                font-size: large;
            }
            #button1:hover
            {
                background-color: rgb(69, 86, 243);
            }
            #s
            {
                background-color: rgb(69, 86, 243);
                font-size: large;
                font-size: 20px;
                width: 500px;
                height: 40px;
            }
        body{
            background-color: white;
        }

        .container img
        {
            height: 60px;
            width:120px;
            float:left;
        }
        

    </style>


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
$price_amount="".$row1['price'] ;
$insurance_amount= "".$row['insurance_amount'];
$total=$price_amount+$insurance_amount;
$tax=$total*0.01;
$net=$total+$tax;
$date=date("y/m/d");

?>
    <form method="post" action="l after_payment.php">

    <table width=100% height=10% bgcolor="orange">
        <tr>


     
            <td align="center">
            <div class="container">

<img src="bb.jpg">

</div>    
            
            <font color="black" size=10>Payment</font></td>
        </tr>
    </table>
    <br><br><br>

    </table>
    <form action="l after_payment.php" method="post">

        <table align="center" border="0" cellspacing="15" >
        
            <tr>
                <td colspan="2" rowspan="2" align="center" id="s" >
                    Hiking Buddies
                </td>
            </tr>
        </table>
        <table align="center" border="0" cellspacing="15" >
       
            
        <tr>
            <td>
                Accepted Card Types
            </td>
            <td>
                <img src="visa.png" height=50px width=90px>       <img src="master_card.jpg" height=50px width=90px>       <img src="rupay.jpg" height=50px width=90px>
            </td>

            <tr>
                <td></td>
                <td><input type="radio" name="r" required>Credit Card &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="r" required>Debit Card</td>
            </tr>

            <tr>
                <td> Name: </td>
                <td><?php echo "".$row['fname'] ?><?php echo " ".$row['mname'] ?><?php echo " ".$row['lname'] ?></td>
            </tr>    
            
            
        
        </tr>
        <tr>
            <td>Contact </td>
            <td><?php echo "".$row['pnum'] ?></td>
        </tr>

        <tr>
            <td>package selected</td>
            <td><?php echo "".$row1['name'] ?></td>
        </tr>

        <tr>
            <td>Amount </td>
            <td><?php echo " Rs ";
            echo $net;
             ?></td>
        </tr>

        <tr>
            <td>Card number </td>
            <td><input type="int" placeholder="card No." maxlength=16 size=42 required></td>
        </tr>

        <tr>
            <td> Card Holder </td>
            <td><input type="text" placeholder="card holder name" size=42 required></td>
        </tr>
        
        <tr>
            <td>Card type</td>
            <td><input type="radio" name="l" required>Visa   <input type="radio" name="l" required>Master Card   <input type="radio" name="l" required>RuPay</td>
        </tr>

        <tr>
            <td>Expiry Date</td>
            <td>
                
                
            <input type="date" placeholder="date" size=30 min= "2021-01-01" required>
                
            </td>
        </tr>
        
        
        <tr>
            <td>CVV</td>
            <td><input type="password" and type="number" placeholder="cvv" size=42 maxlength=3 required></td>
        </tr>
    
        <tr><td></td></tr><tr><td></td></tr>
        
        <tr>
            <td colspan="2" align='center'><input type="submit" value="Make Payment" id="button"><a href="i clogin.php"><input type="button" value="Cancel Payment" id="button1"></a></td>
        </tr>
        
        </table>
        
        </form>

        <table width=100% height=6% bgcolor="black">
            <tr>

            </tr>
        </table>
   






</body>
</html>

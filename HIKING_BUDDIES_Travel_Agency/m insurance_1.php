

<?php
session_start();
?>




<html>
<head>
    <title>Travel Insurance</title>
    
    <style>
        
       
        #s
            {
                background-color: blue;
                font-size: large;
                font-size: 20px;
                width: 450px;
                height: 40px;
                border-radius: 12px;
                color:white;
                
            }
            #button
            {
                background-color: orange;
                height:40px;
                width:150px;
                border-radius: 25px;
                font-size: large;
            }
            table.si
            {
                background-color:rgb(247, 191, 89);
                
                
                border-radius: 12px;
            }
            .container img
            {
                width: 120px;
                height: 60px;
                float:left;
            }


            #button:hover
            
            
{
    background-color: rgb(69, 86, 243);
}

#button
{
    cursor: pointer;
}


.arrow
{
    background-color: rgb(247, 191, 89);
}

            
    </style>
</head>
<body>
<div class="arrow">
        <font size=3 align='center'><a href="k package_after.php"><img src="arrow.jpg" height="20px" width="20px"/></a></font></button>    
    </div>
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
?>
    <table width=100% height=10% bgcolor="orange">
        <tr>
   
            <td align="center">
            <div class="container">

<img src="bb.jpg">

</div>    
            <font color="black" size=10>Travel Insurance</font></td>
        </tr>
    </table>
    

</table>
<form action="m insurance_2.php">

    <table align="center" border="0" cellspacing="15" >
    
        <tr>
            <td colspan="2" rowspan="2" align="center" id="s" >
                Hiking Buddies
            </td>
        </tr>
    </table>

</table>
<table align="center" border="0" cellspacing="15" class="si">


    <tr>
        <td>Insured Name :</td>
        <td><?php echo "".$row['fname'] ?><?php echo " ".$row['mname'] ?><?php echo " ".$row['lname'] ?></td>
    </tr>    

    <tr>
        <td>Client type </td>
        <td><input type="radio" name="ctype" required>Corporate &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="ctype" required>Non-Corporate</td>
    </tr>

    <tr>
        <td>Age Group</td>
        <td>
            <select name="age">
                <option>select age group</option>
                <option>less than 12</option>
                <option>12-20</option><option>21-30</option><option>31-40</option><option>41-50</option><option>51-60</option><option>61-65</option>
                <option>above 65
            </select>
        </td>
    </tr>

    <tr>
        <td>Address :</td>
        <td><?php echo "".$row['address'] ?> </td>

    </tr>

<tr>
    <td>Contact No.</td>
    <td><?php echo "".$row['pnum'] ?></td>
</tr>

<tr>
    <td>Email</td>
    <td><?php echo "".$row['emailid'] ?></td>
</tr>

<tr>
    <td>Adhaar No.</td>
    <td><input type="text" placeholder="Adhaar No." pattern="[0-9]{12}" maxlength="12" size="12"  required>

</td>
</tr>

<tr>
    <td>PAN No</td>
    <td><input type="text" placeholder="PAN" maxlength="10" size="10"  required></td>
</tr>

<tr>
<td>One Way/Two Way</td>
<td>
<select><option>Choose</option>
<option>one way</option><option>two way</option></select></td></tr>
<tr>
    <td>Period of Insurance</td>
    <td>
        &nbsp From: &nbsp&nbsp&nbsp&nbsp
        <input type="date" placeholder="date" size=30 min= "2020-01-01" required>

        
    </td>
</tr>

<tr>
    <td></td>
    <td>
        &nbsp To: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <input type="date" placeholder="date" size=30  required>
    </td>
</tr>

<tr>
    <td>Premium </td>
    <td>Just 1% of your selected package</td>
</tr>




<tr><td></td></tr><tr><td></td></tr>

<tr>
    <td colspan="2" align='center'><input type="submit" value="Proceed" id="button"></td>
</tr>

</table>

</form>

<table width=100% height=4% bgcolor="orange">
    <tr>

    </tr>
</table>

</body>

</html>

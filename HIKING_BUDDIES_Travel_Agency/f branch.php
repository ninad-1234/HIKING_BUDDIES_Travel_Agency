
<?php
     $con=mysqli_connect('localhost','root','');
     mysqli_select_db($con,'branch');
     ?>
       <?php 
    include_once('f branch.php');
    
    $result=mysqli_query($con,"select * from branch_info");
    ?>
 
<!DOCTYPE html>
<html>
    <head>
        <title> Branch Page </title>
    </head>
    <style>
        .container img
        {
            width:120px;
            height:60px;
            float:left;
        }


        body
{
    margin: 2;;
    padding:0;
    background-image: url("india.jpg") ;
    background-size:   contain;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}


.arrow img
{
    float:left;
    background-color: rgb(247, 191, 89);
}
        </style>
<body align="center" style="font-size:18px">
<div class="arrow">
        <font size=3 align='center'><a href="a home page.html"><img src="arrow.jpg" height="20px" width="20px"/></a></font></button>    
    </div>
<h1 style="font-family:cursive;">Branches</h1>
<div class="container">

              <img src="bb.jpg">
             
            </div>
    <table align="center">
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
         ?>  
            <tr>
            <td><img src="data:image/jpeg;base64,<?php echo base64_encode( $rows['image'] ); ?>" width="220" height="180"></td>
                <td style="text-align:left"><b><u><?php echo $rows['place']; ?></b></u><br>
                <?php echo $rows['label1']; ?><?php echo $rows['b_id']; ?><br>
                <?php echo $rows['label2']; ?><?php echo $rows['b_add']; ?><br>
                <?php echo $rows['label3']; ?><?php echo $rows['b_mg']; ?><br>
                <?php echo $rows['label4']; ?><?php echo $rows['c_no']; ?><br>
                <?php echo $rows['label5']; ?><?php echo $rows['e_id']; ?></td>
        </tr>
               
                <?php
        }
    ?>    
    </table>
    
</body>
</html>
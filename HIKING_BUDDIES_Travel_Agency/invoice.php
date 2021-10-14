
<?php
session_start();
?>

<?php
require('C:/xampp/htdocs/fpdf.php');
?>

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

?>






<?php

$country="".$row1['name'] ;
$price_amount="".$row1['price'] ;
$insurance_amount= "".$row['insurance_amount'];
$total=$price_amount+$insurance_amount;
$tax=$total*0.01;
$net_total=$total+$tax;
$ad="".$row1['a_date'] ;
$dd="".$row1['d_date'] ;

$pdf =new FPDF('p','mm','A4');

$pdf->AddPage();


$pdf ->SetFont('Arial','B',14);



$pdf -> Cell(130 ,5, 'Hiking Buddies',0,0);
$pdf -> Cell(59  ,5, 'Invoice',0,1);
$pdf -> Cell(189 ,5,'',0,1);



$pdf ->SetFont('Arial','',12);


$pdf -> Cell(20 ,5, 'Address  :',0, 0);
$pdf -> Cell(110  ,5, 'Hill Road,Delhi,India',0,0);
$pdf -> Cell(25 ,5, 'Date',0,0);
$pdf -> Cell(34 ,5, '16/05/2020',0,1);

$pdf -> Cell(130 ,5, 'phone     : 7066158632',0, 0);
$pdf -> Cell(25 ,5, 'invoice ID',0,0);
$pdf -> Cell(34 ,5, '56234856',0,1);

$pdf -> Cell(130 ,5, 'Email-ID : hikingbuddies2020@gmail.com',0, 0);




$pdf -> Cell(189 ,5,'',0,1);
$pdf -> Cell(189 ,5,'',0,1);

$pdf -> Cell(189 ,5, 'Package Details :',0,1);

$pdf -> Cell(189 ,5,'',0,1);



$pdf -> Cell(100 ,5, 'Country :',0,0);
$pdf -> Cell(89 ,5, $country,0,1);

$pdf -> Cell(100 ,5, 'Arival Date :',0,0);
$pdf -> Cell(89 ,5, $ad,0,1);

$pdf -> Cell(100 ,5, 'Departure Date :',0,0);
$pdf -> Cell(89 ,5, $dd,0,1);






$pdf -> Cell(189 ,5, '',0,1);


$pdf ->SetFont('Arial','B',12);

$pdf -> Cell(130 ,5, 'Amount description',1,0);
$pdf -> Cell(59 ,5, 'Amount',1,1);

$pdf ->SetFont('Arial','B',10);

$pdf -> Cell(130 ,5, 'Package amount',1,0);
$pdf -> Cell(49 ,5, $price_amount,1,0);
$pdf -> Cell(10 ,5, 'Rs',1,1);


$pdf -> Cell(130 ,5, 'Insurance',1,0);
$pdf -> Cell(49 ,5,$insurance_amount ,1,0);
$pdf -> Cell(10 ,5, 'Rs',1,1);

$pdf -> Cell(130 ,5, 'Taxes',1,0);
$pdf -> Cell(49 ,5,$tax ,1,0);
$pdf -> Cell(10 ,5, 'Rs',1,1);

$pdf -> Cell(130 ,5, 'Total Amount',1,0);
$pdf -> Cell(49 ,5, $net_total,1,0);
$pdf -> Cell(10 ,5, 'Rs',1,1);

$pdf -> Cell(189 ,5, '',0,1);

$pdf ->SetFont('Arial','B',14);

$pdf -> Cell(130 ,5, 'Payment Status',1,0);
$pdf -> Cell(59 ,5, 'Paid',1,1);

$pdf -> Output();


?>
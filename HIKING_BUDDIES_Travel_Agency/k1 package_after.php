
<?php
session_start();
?>


<html>
<head>
<title>
Package info Hiking Buddies
</title>


<style>

body
{
    padding: 0;
    margin: 0;
}

.header
{
    height: 80%;
    width: 100%;
    
    
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(ww.jpg) ;
    background-size: cover;
   
    background-attachment: fixed;
    background-position: center;
    padding-top: 20px;
    text-align: center;
    color: #fff;
    
}

.header img
{
    width: 150px;
    float: left;
}
.header h1
{
    padding-top: 200px;
    
    font-size: 55px;
}
.header h6
{
    text-align: right;
    margin-right: 15px;
    font-size: 15px;
}
.header h5
{
    color : yellow;
    margin-left: 25px; 
    text-align: left;
    font-size: 30px; 
    
}
.header h2
{
    color : yellow;
    margin-right: 25px; 
    text-align: right;
    font-size: 30px; 
}


.features
{
    padding: 100px 0;
    background-image: linear-gradient(rgb(250, 182, 56),rgb(69, 86, 243));
}


.features h1
{
    text-align: center;
    padding-bottom: 30px;
}
.features h6
{
    margin-left: 500px;
}



.feature-details
{
    padding: 20px;
    text-align:justify;
}

.feature-details h4
{
    font-weight: 600;
    margin-top: 20px;
    text-align: center;
}
.feature-details p
{
    font-weight: 200;
    margin-top: 20px;
    text-align: center;
}

.feature-box
{
    box-shadow: 0 0 10px 1px rgba(37, 73, 214, 0.18);
    margin-bottom: 30px;
}
.banner
{
    height:80%;
    background-image: url(vv.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    padding-top: 14%;
}

.banner-highlights
{
    padding: 100px 0;
    background: rgba(28, 41, 18, 0.7);
    text-align: center;
    color: #fff;

}

.booking-btn
{
    width: 120px;
    padding: 8px 0;
    outline: none !important;
    border: 2px ;
    border-radius: 50px;
    background: rgb(250, 182, 56);
    color: black;
    margin-top: 20px;
    cursor: pointer;
}

.insurance-btn
{
    width: 60px;
    padding: 4px 0;
    outline: none !important;
    border: 2px ;
    border-radius: 25px;
    background:rgb(250, 182, 56);
    color: black;
    margin-top: 10px;
    cursor: pointer;   
}

#book:hover
{
    background-color: rgb(69, 86, 243);
}

#ins:hover
{
    background-color: rgb(69, 86, 243);
}
.input-group-text
{
    width: 100px;
    background-color:  rgb(250, 182, 56);;
    border: 0 !important;
    color: black !important;
    padding: 0 25px !important;
    border-radius: 30px !important;
    box-shadow: none;
}

.header1
{
    height: 50%;
    width: 100%;
    
    
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(aa.jpg) ;
    background-size: cover;
   
    background-attachment: fixed;
    background-position: center;
    padding-top: 20px;
    text-align: center;
    color: #fff;
    
}


.header1 h1
{
    padding-top: 100px;
    padding-bottom: 0;
    font-size: 55px;
}

.header1 p{
    margin: 18px 0;
}
#search:hover
{
    background-color: rgb(69, 86, 243);
}
#search
{
    width: 150px;
    height: 25px;
}
.input-group
{
    width: 90% ;
    max-width: 500px;
    border-radius: 30px;
    background: transparent;
    margin: auto;
    padding: 1px;
}

.form-control
{
    border: 0 !important;
    border-radius: 30px !important;
    margin: 2px;
    box-shadow: none !important;
    width: 500px;
    height: 25px;
}
.Logout-btn
{
    width: 100px;
    padding: 8px 0;
    outline: none !important;
    border: 2px ;
    border-radius: 50px;
    background: rgb(250, 182, 56);
    color: black;
    float: right;
    
}
#logout:hover
{
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


<?php
$name1=$_GET['city_n'];
$_SESSION["name"]=$name1;
$name=$_SESSION["name"];



$conn=new mysqli('localhost','root','','country');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from city where name='$name' ");
$row=mysqli_fetch_array($result);
if($row==FALSE)
{
    echo" sorry we dont have package" ;
    exit();
}
if($row['name']==$name )
{
    
    ?>
    <img src="bb.jpg">
    <a href="a home page.html">
              <button type="button" class="Logout-btn" id="logout">Logout</button>
            </a>
            <a href="f1_profile.php">
              <button type="button" class="Logout-btn" id="logout">View Profile</button>
            </a>
            


   <h1>Welcome to <?php echo "". $row['name'] ?>  </h1>
     <h5> Exciting Offers !!</h5><br>
     <h2> <?php echo "".$row['offer'] ?> </h2>

    </section>





    <section class="features">
            <h1> Destination </h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="feature-box">
                    <div class="feature-img">
                    <h6>
     <?php echo '<img src="data: image; base64,
     '.base64_encode($row['img1']).'"  
     style="width :50%%; height : 50%;"  align="center">';?>
</h6>    
                        
                        
                        
                    </div>
                    <div class="feature-details">
                        <h4><b>
                         <?php echo "".$row['place1'] ?> 
                        </b></h4>
                        <p>
                        <b>
                        <?php echo "".$row['des1'] ?> 
                        </b></p>
                       
                    </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                            <h6>
     <?php echo '<img src="data: image; base64,
     '.base64_encode($row['img2']).'"  
     style="width :50%; height : 50%;"  align="center">';?>
</h6>    
                                
                            </div>
                            <div class="feature-details">
                                <h4><b>
                                <?php echo "".$row['place2'] ?> 
                                </b></h4>
                                <p><b>
                                <?php echo "".$row['des2'] ?> 
                                </b></p>
                                
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                            <h6>
     <?php echo '<img src="data: image; base64,
     '.base64_encode($row['img3']).'"  
     style="width :50%; height : 50%;"  align="center">';?>
</h6>    
                                
                            </div>
                            <div class="feature-details">
                                <h4><b>
                                <?php echo "".$row['place3'] ?> 
                                </b></h4>
                                <p><b>
                                <?php echo "".$row['des3'] ?> 
                                </b></p>
                               
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="banner">
            
            <div class="banner-highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3> Period :<?php echo "".$row['period'] ?></h3>
                            <br>
                            <h3> Price :<?php echo "".$row['w_price'] ?></h3>
                            <p>Hurry Up , You can be the lucky one</p>
                        </div>
                        <div class="col-md-4">
                        <form  action="l payment.php"  method="post">
                            <button type="submit" class="booking-btn" id="book">Book Now</button>
                            </form>
                        </div>
                        <div class="insurance">
                            <h4>You can add your own insurance !!</h4>
                            <a href="m insurance_1.php">
                            <button type="submit" class="insurance-btn" id="ins">Add</button>
                            </a>
                        </div> 
                        
                    </div>
                </div>
            </div>
           
        </section>

   
       


        

     
     
    
    
     
    

    <?php
}

    ?>
   
    
     
     


</body>
</html>
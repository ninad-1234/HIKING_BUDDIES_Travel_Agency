
<?php
session_start();
?>

<html>
    <head>
        <title> Packages Hiking Buddies</title>
    <link rel="stylesheet" href="k package_after.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
    font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    .header
{
    height: 80%;
    width: 100%;
    
    
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(aa.jpg) ;
    background-size: cover;
  
    background-attachment: fixed;
    background-position: center;
    padding-top: 20px;
    text-align: center;
    color: #fff;
    
}
    a:link {
  
  background-color: transparent;
  margin-left: 0px;
  text-decoration: none;
  
}
a:hover {
    color: rgb(253, 195, 6);
  background-color: transparent;
  text-decoration: underline;
}



.center
{
  width: 150px;
  height: 60px;
  margin-left: 1px;
  float: left;
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

.banner-highlights
{
    padding: 70px 0;
    background: rgba(252, 125, 6, 0.7);
    text-align: center;
    color: #fff;

}
.features
{
    background-image: linear-gradient(rgb(250, 182, 56),rgb(69, 86, 243));
    padding: 100px 0;
    height:80%;
}


.gallery
{
    padding:100px 0 ;
    background-image: linear-gradient(rgb(69, 86, 243),rgb(250, 182, 56));
}
.footer
{
    padding: 100px 20px 15px;
    background-image: linear-gradient(rgb(250, 182, 56),rgb(69, 86, 243));
    color: black;

}

#search:hover
{
    background-color: rgb(69, 86, 243);
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


#book:hover
{
    background-color: rgb(69, 86, 243);
}

.user-feedback
{
    padding: 100px 0;
    height: 60%;
}
.user-feedback h1
{
    padding-top:10px;
}

.banner
{
    height:70%;
    background-image: url(kk.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    padding-top: 14%;
}
.user-review
{
    text-align: center;
    box-shadow: 0 0 10px 0 rgba(0,0,100,0.2);
    padding-bottom: 50px;
}

.gallery-box img
{
    width: 100%;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
    height:150px;
}

#btn {
    background-color: rgb(250, 182, 56);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px;
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

    <?php
  $username=$_SESSION["username"];
 $password=$_SESSION["password"] ;



$conn=new mysqli('localhost','root','','country');
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from login_details where username='$username' and password='$password'");
$result1=mysqli_query($conn,"select * from login_details where username='$username'");
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
if($row==FALSE && $row1==TRUE)
{
    ?>

    <h1><?php echo" wrong Password"; ?></h1>
    <a href="i clogin.html">
    <button type="button" id="btn">Retry</button></a>

    <?php exit();
}
?>
<?php
if($row1==FALSE)
{?>
<h1><?php echo"  Username not exist"; ?></h1>
<a href="i clogin.html">
    <button type="button" id="btn">Retry</button></a>
   <?php exit();
}
?>
<?php

if($row['username']==$username && $row['password']==$password)
{
    ?>
     
        
            <form method="post" action="i2 login.php">
               
            <div class="container">
            <img src="bb.jpg" class="center">
              <a href="end_session.php">
              <button type="button" class="Logout-btn" id="logout">Logout</button>
            </a>
            <a href="f1_profile.php">
              <button type="button" class="Logout-btn" id="logout">View Profile</button>
            </a>
            </div>
            <h1>
                Travel Across The Globe
            </h1>
            <p>
                Experience the Beauty of Nature
            </p>
            <div class="input-group">
                <input type="text" class="form-control"
                 placeholder="Search Country or City" name="search">
                <div class="input-group-append">
                    <button type="submit" class="input-group-text btn" id="search">Search</button>

                </div>
            </div>
        </form>
        </section>
        
        <section class="features">
            <h1><b>Featured destinations</b></h1>
            <div id="feature"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="feature-box">
                    <div class="feature-img">
                    <a href="k1 package_after.php?city_n=France">
                        <img src="ee.jpg"></a>
                        <div class="price">
                            <p>2.5L</p>
                        </div>
                        <div class="rating">
                            <i class="star"> &#11088;</i>
                            <i class="star"> &#11088;</i>
                            <i class="star"> &#11088;</i>
                            <i class="star"> &#11088;</i>
                            <i class="star"> &#11088;</i>
                            
                        </div>
                    </div>
                    <div class="feature-details">
                        <h4>
                           <b> Paris </b>
                        </h4>
                        <p>
                           <b> No words for the beauty of Paris !!</b>
                        </p>
                        <div>
                            <b><span><i class="day"></i>&#9788;15 Days</span>
                            <span><i class="night"></i>&#9790; 14 Nights</span></b>    
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                            <a href="k1 package_after.php?city_n=USA">
                                <img src="cc.jpg"></a>
                                <div class="price">
                                    <p>3.5L</p>
                                </div>
                                <div class="rating">
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                   
                                    
                                </div>
                            </div>
                            <div class="feature-details">
                                <h4>
                                    <b>Los Angeles</b>
                                </h4>
                                <p>
                                <b>Experience heaven on the earth !!</b>
                                </p>
                                <div>
                                <b><span><i class="day"></i>&#9788;10 Days</span>
                                    <span><i class="night"></i>&#9790; 9 Nights</span>
                                    </b> </div>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-img">
                            <a href="k1 package_after.php?city_n=Australia">
                                <img src="dd.jpg"></a>
                                <div class="price">
                                    <p>4.5L</p>
                                </div>
                                <div class="rating">
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    <i class="star"> &#11088;</i>
                                    
                                </div>
                            </div>
                            <div class="feature-details">
                                <h4>
                                <b>    Australia</b>
                                </h4>
                                <p>
                                <b> My best friend Kangaroo !!</b>
                                </p>
                                <div>
                                <b>
                                    <span><i class="day"></i>&#9788;8 Days</span>
                                    <span><i class="night"></i>&#9790; 7 Nights</span>
                                    </b></div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section class="gallery">
            <h1> Travelling Gallery</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <a href="https://www.google.com/search?q=africa+tourism&sxsrf=ALeKk01aKhF2qL-HBDZUjZJhKuoNL5dOJQ:1589248813734&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjlgIKYna3pAhX8yzgGHdfAAgUQ_AUoAXoECBoQAw&biw=1536&bih=792">
                            
                        <img src="ff.jpg">
                    </a>
                        <h4>Africa</h4>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <a href="https://www.google.com/search?q=india+tourism&tbm=isch&ved=2ahUKEwih97OZna3pAhW1huYKHSwMCOsQ2-cCegQIABAA&oq=india+tourism&gs_lcp=CgNpbWcQA1AAWABgpBpoAHAAeACAAQCIAQCSAQCYAQCqAQtnd3Mtd2l6LWltZw&sclient=img&ei=MAO6XqGfJ7WNmgesmKDYDg&bih=792&biw=1536">
                        <img src="gg.jpg">
                    </a>
                        <h4>India</h4>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <a href="https://www.google.com/search?q=dubai+tourism&tbm=isch&ved=2ahUKEwiegenxrLXpAhWNPysKHQluD4gQ2-cCegQIABAA&oq=dubai+tourism&gs_lcp=CgNpbWcQAzIECCMQJzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIAFDlB1jlB2D4C2gAcAB4AIABkgGIAZIBkgEDMC4xmAEAoAEBqgELZ3dzLXdpei1pbWc&sclient=img&ei=YkW-Xp7IHo3_rAGJ3L3ACA&bih=792&biw=1536">
                            <img src="hh.jpg">
                    </a>
                        <h4>Dubai</h4>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <a href="https://www.google.com/search?q=new+zealand+tourism&tbm=isch&ved=2ahUKEwiOyvT5na3pAhXyXHwKHc5aAL4Q2-cCegQIABAA&oq=new+&gs_lcp=CgNpbWcQARgAMgQIIxAnMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAOgUIABCDAVCmoAFY-qQBYKi1AWgAcAB4AIABmAGIAckEkgEDMC40mAEAoAEBqgELZ3dzLXdpei1pbWc&sclient=img&ei=-wO6Xs7gAfK58QPOtYHwCw&bih=792&biw=1536">
                        <img src="ii.jpg">
                    </a>
                        <h4>New Zealand</h4>
                    </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="banner">
            <div id="user"></div>
            <form method="post" action="k1 package_after.php?city_n=Europe">
            <div class="banner-highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Get 30% on top destination</h2>
                            <p> Book your tickets before 31st march and avail 30% 
                                flat discount.</p>
                        </div>
                        <div class="col-md-4">
                        
                            <button type="submit" class="booking-btn" id="book">Book Now</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            </form>
        </section>
   
        <section class="user-feedback">

            <h1>Users Review</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="user-review">
                        <p>I like this agency so much , you have to 
                            try this and enjoy your moments!!
                        </p>  
                        <h5>Sangramjeet </h5>
                        <small>Dubai</small>      
                        </div>
                        <img src="aa.jpg">
                    </div>
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>Create bond between you and Nature !!
                            </p>  
                            <h5>Sahil</h5>
                            <small>Los Angeles</small>      
                            </div>
                            <img src="aa.jpg">
                        </div>
                   
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>Best memories
                            </p>  
                            <h5>Ninad </h5>
                            <small>Germany</small>      
                            </div>
                            <img src="aa.jpg">
                        </div>
                    </div>
                </div>
           
        </section>
        <div id="end"></div>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="bb.jpg" class="footer-logo">
                <p>
                    Break the Boundaries 
                </p>
            </div>
            <div class="col-md-3">
                <h4> Quick Contact</h4>
                <p><i class="fa fa-phone-square"></i> &#9742;+91 7065326855</p>
                <p><i class="fa fa-envelope"></i>&#128237;Hiking_Buddies@gmail.com</p>
                <p><i class="fa fa-home"></i>&#128204;Hill road, Delhi City</p>
            </div>
            <div class="col-md-3">
                <h4>Branch Info</h4>
                <a href="f1 branch.php" style="color: black;">Click on for more Branch info </a>
               
            </div>

            <div class="col-md-3">
                <h4>Follow Us on</h4>
                <p><i class="fa fa-facebook-official"></i>FACEBOOK</p>
                <p><i class="fa fa-youtube-play"></i>YOUTUBE</p>
                <p><i class="fa fa-twitter"></i>TWITTER</p>
            </div>
            
        </div><hr>
        <p class="copyright">Made with &#128147;<i class="fa fa-heart"></i>by Hiking Buddies</p>
    </div>
</section>
<?php
}
?>
    
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

  <style >
    
   
body{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: beige ;

} 

#myHeader {
        position: absolute;
width: 1392px;
height: 72px;
text-align: center;
top: -50px;
font-size:100px;

}
#header {
        position: absolute;
width: 1392px;
height: 72px;
text-align: center;
top: 90px;
font-size:50px;

}

.s a{
  display: inline-block;
  font-size: 40px;
  width: 100px;
  height: 100px;
  line-height: 100px;
  text-align: center;
  color:grey;
  margin: 0 16px;
  transition: .4s linear;
  position: relative;
}

.s a::before, .s a::after{
  content: '';
  position: absolute;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  transition: .4s linear;
}

.s a:hover{
  transform: scale(.8);
}

.s a:hover::before{
  border-left: 4px solid;
  border-right: 4px solid;
  transform: skewX(20deg);
}

.s a:hover::after{
  border-top: 4px solid;
  border-bottom: 4px solid;
  transform: skewY(-20deg);
}
.section {
  background-color: beige;
  color: grey;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}

.profile{
        background-color: beige;
        border: 2px solid black;
        float: bottom;
        padding:50px;

}


.image{
        length: 10px;
        width: 50px;
       
}
  </style>


</head>
<body>
<h1 id="myHeader">  Hello</h1>
<h2 id="header">How can we help you?</h2>
<div class="section">
        <h id="header2" >Social media:</h>
<div class="s">
    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/?lang=en-gb"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    <a href="https://www.tiktok.com/@tiktok"><i class="fab fa-tiktok"></i></a>
</div>
</div>
<div class="profile">
        <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
        Humera Muhammad
<div>
        <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
<h>200060828@aston.ac.uk</h>
</div>
</div>



</body>
<footer class="footer">
        <br/>
        <br/>
        <span>
            <center>Copyright 2022 TresorLDN Limited Company</center>
        </span>
        <br/>
        <span>
            <center>TresorLDN a limited company that advertises and sells various 
                homeware products for all customers and businesses.
            </center>
        </span>
        <span>
            <center>Providing customer satisfaction
                by selling products that can be tailored to meet the customers needs.
            </center>
        </span>
        <br/>
        <span>
            <center>Our website is powered by Laravel a PHP Framework created by <a href="https://github.com/taylorotwell">Taylor Otwell</a></center>
        </span>
        <br/>
        <span>
            <center>
                <img src="{{asset("svg/logo-no-background.svg")}}" width="250" height="35"/>
            </center>
        </span>
        <br/>
        <br/>
        <br/>
        <br/>
    </footer>


</html>
@extends('layouts.app')
<head>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

  <style >
    
.background {
background-color:#ECE4D0;
}
.section {
  background-color: #DBCFB8;
  color: #522121;
  border: 1px solid black;
  border-radius: 6px;
  margin: 20px;
  padding: 20px;
}

.section a {
  color: #522121;
}

.section a:hover {
  color: #522121;
}

.myHeader {
  margin: 0;
  background-image: url("{{asset('jpg/contacts.jpg')}}");
  background-size: 100% 100%;
  background-blend-mode: color-burn;
  filter: brightness(95%);
  width: 100%;
  padding: 15%;
  height: 100%;
}

.myHeader h1, h2 {
    text-align: center;
    padding: 1.5% 12.5%;
    color: #522121;
    font-size: 450%;
}

#header {
text-align: center;
top: 90px;
font-size:50px;

}

.s {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
}

.s a{
  display: inline-block;
  padding: 2.5% 0.5%;
  font-size: 40px;
  width: 100px;
  height: 100px;
  line-height: 100px;
  text-align: center;
  color:#522121;
  margin: 0 16px;
  transition: .4s linear;
  position: relative;
  text-decoration: none;
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
  color: #522121;
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

.flex-container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
}

.flex-container .contactsContainer {
  background-color: #DBCFB8;
  width: 25%;
  height: fit-content;
  margin: 2.5%;
  text-align: center;
  border: 1px solid black;
  border-radius: 6px;
  font-size: 10px;
  color:#522121;
}


.flex-container .image{
    height: 50%;
    width: 20%;      
}

.flex-container .userImageIcon {
  width: 100%;
  height: auto;

}

.flex-container .mailIcon {
  width: 100%;
  height: 50%;
  
}
  </style>


</head>
@section('content')

<div class= "background">
<div class="myHeader" >
  <h2><strong></strong></h2>
</div>
<div class="container">
<h2><strong>How can we help you?</strong></h2>
<div class="section">
        <h2 id="header2" >Social media:</h2>
        <!-- Social media that the company is following -->
<div class="s">
    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/?lang=en-gb"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    <a href="https://www.tiktok.com/@tiktok"><i class="fab fa-tiktok"></i></a>
</div>
</div>
<!-- Contact details about the company -->
<div class="section">
  <p>If you have any enquiries regarding our online ordering system and would like to improve our service 
          please contact us via <a href="mailto:enquiries@tresorldn.com">enquiries@tresorldn.com</a></p>
  <p>If you would like to have a refund, or support from our team please e-mail <a href="mailto:support@tresorldn.com">support@tresorldn.com</a></p>
  <p>If you would like to call us for supporting your customer enquiry please contact <a href="tel:0121 123 4567">0121 123 4567</a></p>       
</div>   
<div class="flex-container">
 <div class="contactsContainer">  
    <div class="userImageIcon">
      <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture">
    </div>
    <div>Humera Muhammad</div>
    <a href="mailto:200060828@aston.ac.uk">200060828@aston.ac.uk</a>
    <div class="mailIcon">
      <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
    </div>
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Ibrahim Ahmad</div>
  <a href="mailto:210029073@aston.ac.uk">210029073@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>   
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Ben Squelch </div>
  <a href="mailto:210052484@aston.ac.uk">210052484@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>     
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Thomas Merricks</div>
  <a href="mailto:180204511@aston.ac.uk">180204511@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>      
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Anaami Patel</div>
  <a href="mailto:220197368@aston.ac.uk">220197368@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>     
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Zainab Desai</div>
  <a href="mailto:200064745@aston.ac.uk">200064745@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>   
</div> 

<div class="contactsContainer"> 
  <div class="userImageIcon"> 
    <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture"> 
  </div>
  <div>Sachin Kumar</div>
  <a href="mailto:220253114@aston.ac.uk">220253114@aston.ac.uk</a>
  <div class="mailIcon"> 
    <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
</div>      
</div>

<div class="contactsContainer">  
    <div class="userImageIcon">
      <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture">
    </div>
    <div>Faryal Mansoor</div>
    <a href="mailto:220254155@aston.ac.uk">220254155@aston.ac.uk</a>
    <div class="mailIcon">
      <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
    </div>
</div> 

<div class="contactsContainer">  
    <div class="userImageIcon">
      <img class="image" src="https://cdn2.iconfinder.com/data/icons/user-interface-3-flat/64/user_profile_circle_interface_person-512.png" alt="profile picture">
    </div>
    <div>Boluwatife Akinola </div>
    <a href="mailto:210119226@aston.ac.uk">210119226@aston.ac.uk</a>
    <div class="mailIcon">
      <img class="image" src="https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/439/aiga_mail-256.png">
    </div>
</div> 

</div> 
</div>
</div>
</div>
</div>
@endsection
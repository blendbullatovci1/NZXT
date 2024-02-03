<?php
include_once 'Database.php';
include_once 'ItemsRepository.php';
include_once 'UserItemsRepository.php';
include_once 'UserRepository.php';
session_start();
if(!isset($_SESSION['username']))
{
  header("location:LogIn.php");
}
if(isset($_POST['Log']))
{
  session_destroy();
  header("location:LogIn.php");
}

$Role =$_SESSION['Role'];
$username = $_SESSION['username'];
$ir = new ItemRepository();
$uir = new UserItemRepository();
$ur = new UserRepository();
$cartID = $ur->getCartByUsername($username);
$CartQuantity = $uir->CartTotal($cartID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NZXT Home page</title>
    <link rel="stylesheet" href="NZXTStyles/Style.css">
</head>
<body>
    <div class="box1">
        <div class="empty"></div>
        <div class="Slider">
            <p>All PCs built in 10-15 Business Days. <a class="Nothing">See Terms. <span class="arrow-right">&#x276F;</span></a></p>
        </div>
        <div class="empty"></div>
    </div>
    <div class="navbar">
        <div class="empty"></div>
        <div class="Categories">
            <a href="index.php" class="Title">NZXT</a>
            <ul class="list">
            <button class="I"><a href="AboutUs.php"  style="text-decoration:none;color:white">About Us <span class="Symbol">&#x276E;</span></button>
              <button class="I"><a href="ContactUs.php"  style="text-decoration:none;color:white">Contact Us <span class="Symbol">&#x276E;</span></button>
              <button class="I" id="Dashboard"><a href="dashboard.php"  style="text-decoration:none;color:white">Dashboard <span class="Symbol">&#x276E;</span></a></button>
              <button class="I"><a href="Shop.php" style="text-decoration:none;color:white">Shop <span class="Symbol">&#x276E;</span></a></button>
            </ul>
        </div>
        <div class="Interact">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <button class="I js-Register" name="Log" style="padding-bottom:10px;">Log Out</button>
             <a href="Checkout.php"><img width="24" height="24" src="https://img.icons8.com/ios/24/FFFFFF/shopping-cart--v1.png" alt="Shop"/><button>
              <span class="js-shopping-cart"><?php echo $CartQuantity; ?></span>
            </button></a>
            </form>
        </div>
        <div class="empty"></div>
    </div>
<div style="width:100%; height:500px; margin-bottom:100px; padding-top:80px">
  <video autoplay="" src="https://stream.mux.com/C1x02T5TothVuy8HoI8XTgWikStCWmjzh/high.mp4"loop=""poster="https://image.mux.com/C1x02T5TothVuy8HoI8XTgWikStCWmjzh/thumbnail.jpg?&amp;time=01"
  playsinline="" muted="" class="w-full h-full object-cover object-top md:object-center" style="min-height:750px;width:100%;height:100%"></video>
</div>         
<div class="img1">      
  <img width="1000" height="330" src="AboutUs/pc.png" alt="-" title="-" class="" decoding="async" style="margin-left: 150px; margin-top:250px;"
  loading="lazy">           
  <img src="AboutUs/1.png" alt="" title="" class="" decoding="" style="margin-top:100px; margin-left: 90px;">
  <img src="AboutUs/2.png" alt="" title="" class="" decoding="" style="margin-left:80px;">           
  <img src="AboutUs/5.png" alt="" title="" class="" decoding="" style="margin-left:150px ;">
</div>           
<div>       
  <p class="start" style="display:inline-block; margin-left: 165px; margin-top: 10px;margin-bottom: 10px;">
    (Our secret sause)
  </p>             
  <h1 style="display:inline-block; margin-left: 200px; color: rgb(10, 10, 10); "> 
    Simply the Best
  </h1>             
  <h1 style="display:inline-block;margin-left: 200px; width: 190px; color: rgb(7, 7, 7);"> 
    End-to-End Solutions
  </h1>
<div style="display:flex; justify-content: space-between;">
  <p style="margin:0;margin-left: 530px; width: 300px; font-size:x-large; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
  We offer a streamlined selection of high-performance parts, letting you dive into gaming faster and without fuss.
  </p>
  <p style="margin:0; margin-right: 40px;width: 300px; font-size:x-large; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  We make hardware, software, and services that guide you along your journey, each step of the way.
  </p>             
</div>           
<div class="img2">
  <img src="AboutUs/6.png" alt="" title="" class="" decoding="" style="margin-top:100px; margin-left: 120px;">             
  <img src="AboutUs/7.png" alt="" title="" class="" decoding="" style="margin-left: 160px; margin-right: 130px;">             
  <img src="AboutUs/8.png">
</div>
  <h1 style="display:inline-block; margin-left: 165px; margin-top: 10px;margin-bottom: 10px;">
    Minimal Flare
  </h1>      
  <h1 style="margin:0;display:inline-block; margin-left: 200px; color: rgb(7, 7, 7); "> 
    Built to Last
  </h1>           
  <h1 style="margin:0;display:inline-block; margin-left: 200px; width: 190px; color: rgb(10, 10, 10);"> 
    We Got You Covered
  </h1>      
<div style="display:flex; justify-content: space-between;">
  <p style="margin:0;margin-left: 150px; width: 300px; font-size:x-large; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    We design timeless products with universal appeal to fit seamlessly anywhere, for anyone.
  </p>
  <p style=" margin:0;margin-left: 20px;width: 300px; font-size:x-large; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    Our products are engineered for endurance, built with high-quality components, and rigorously tested.
  </p>             
  <p style="margin:0; margin-right: 50px;width: 300px; font-size:x-large; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    From our top-quality support team to our comprehensive warranties, we aim for peace of mind.
  </p>
</div>
<div class="empty"></div>        
<div class="img3">               
  <h1 style="width: 409px;background-image: url(nzxtpage.png); background-repeat: no-repeat;background-position: right 50% bottom 25%; background-size: 450px;
background-color: rgb(206, 239, 243);padding-top: 40px;padding-bottom: 120px; padding-left:300px; padding-right: 300px; margin-top: 200px; margin-left: 140px; border-radius: 1%; text-align: center;">
 We’ve been serving the PC gaming community since 2004. It’s not just our job, it’s our passion.
  </h1>           
</div>      
<div class="empty"></div>        
<div class="header1" style="justify-content: center;text-align:center">          
  <h1 style="margin-top:200px;">
     We Love Our Community
  </h1>      
</div>       
<div id="container"></div>        
<div class="header2">          
  <h2 class="p1" style="margin:0; margin-left: 280px; font-size: small; margin-top: 300px;">
    GIVING BACK 
  </h2>
  <h1 class="p2" style=" margin:0;display:inline-block; margin-left: 280px; font-weight: bold; ">
    Gamers Outreach 
  </h1>           
  <img src='AboutUs/10.png' style='float: right; margin: right; margin-right: 120px;'/>
  <p class="p3" style="margin:10px;width: 450px;margin-left: 280px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: medium;">
    As a longtime partner of Gamers Outreach, we played a significant role in re-imagining the new iteration of GO Kart (Gamers Outreach Karts). 
    GO Karts are portable video game kiosks built specifically for hospitals.
  </p>           
</div>       
<div class="img3">          
  <img src="AboutUs/11.png" alt="" style="margin:20px;margin-left: 280px; ">
</div>       
<div class="class4">          
  <img src='AboutUs/12.png' style='float:left; margin: right; margin-left: 280px; padding-top: 100px;'/>
</div>       
<div id="empty"></div>             
<div class="class3">
  <h2 style="margin:0; font-size: small;text-align: right;margin-top:170px;margin-right: 430px;">
    GEARING UP
  </h2>             
  <h1 style="margin:0; text-align: right ;margin-right:230px;">
    UCI Esports Arena 
  </h1>           
  <p style="width: 300px; margin-left: 100px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  The UCI Esports Arena is the first of its kind on a college campus. 
  We provided 36 top-of-the-line NZXT prebuilt PCs to foster the growth and development of a new generation of players.
  </p>           
</div>       
<div class="header2">        
  <h1 style="margin-top:300px; margin-left: 250px; font-size: 55px;">
  Hear From People We Care About 
  </h1>      
</div>      
<div class ="empty"></div>
<div class="img4" style="display:flex;flex-direction: row;">
  <img src="AboutUs/14.png" style="margin-left: 90px; margin-top: 90px">
  <img src="AboutUs/15.png" style="margin-left: 90px; margin-top: 90px">
  <img src="AboutUs/16.png" style="margin-left: 90px; margin-top: 90px">
  <div class="news"></div>
</div>
<div class="img5">
  <h1 style="margin-top: 100px; text-align: center; font-size: 50px; margin-bottom: 70px;">
   What We Live By 
  </h1>
</div>                   
<div class="start4">          
  <h1 class="p2" style="margin:0;display:inline-block; margin-left: 360px; font-weight: bold; margin-top: 100px; ">
  Give a Sh*t 
  </h1>
  <img src='AboutUs/17.png' style='float: right; margin: right; margin-right: 120px;'/>
  <p class="p3" style=" margin:10px;width: 350px;margin-left: 280px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: larger;">We're
  obsessed with doing right by our community internally and externally.
  </p>       
</div>
<div class="img5">     
  <img src="AboutUs/18.png" style='float: left; margin: right; margin-left: 180px;margin-top: 160px;'/>
</div>           
<div class="class6">
  <h1 style="margin: 0;text-align: right;margin-top:280px;margin-right: 290px; font-weight:700;">
  Learn & Grow 
  </h1>               
  <p style=" margin:0; width: 380px; text-align: center; margin-left: 100px; margin-top:20px;font-size:large;  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We
  see our challenges as opportunities. Progress over perfection.
  </p>       
</div>       
<div class="start5">               
  <img src='AboutUs/19.png' style='float: right; margin: right; margin-right: 160px;margin-top: 140px;'/>               
  <h1 class="p2" style=" margin:0;display:inline-block; margin-left: 300px; font-weight: bold; margin-top: 140px; ">
  Win Together 
  </h1>
  <p class="p3" style=" margin:10px;width: 350px;margin-left: 240px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: larger;">We're
  obsessed with doing right by our community internally and externally. 
  </p>             
</div>        
<div class="img6">
  <img src="AboutUs/20.png" style='float:left; margin: right; margin-left: 140px;margin-top: 190px;'/>
</div>
<div class="class7">
  <h1 style="margin:0;text-align: right;margin-top:280px;margin-right: 260px; font-weight:700;">
  Keep it Simple 
  </h1>               
  <p style="margin:0; width: 380px; text-align: center; margin-left: 140px; margin-top:20px;font-size:large;  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We
  remove complications to focus on what's needed.
  </p>         
</div>         
<div class ="empty"></div> 
<div class="img6">
  <img src="AboutUs/333.png" style="padding-top: 200px; padding-left: 130px;">
</div>       
<div class="Footer"> 
        <div class="Socials">
          <div class="empty"></div>
          <ul>
            <li><a href="https://www.facebook.com/NZXT/" target="_blank"><img src="NZXTStyles\icons8-facebook-24 (1).png" alt="FB"></a></li>
            <li><a href="https://twitter.com/intent/follow?screen_name=nzxt" target="_blank"><img src="NZXTStyles\icons8-twitter-24.png" alt="Twitter"></a></li>
            <li><a href="https://www.instagram.com/nzxt/" target="_blank"><img src="NZXTStyles\icons8-instagram-24.png" alt="IG"></a></li>
            <li><a href="https://youtube.com/nzxtus" target="_blank"><img src="NZXTStyles\icons8-youtube-24.png" alt="YT"></a></li>
            <li><a href="https://www.twitch.tv/nzxt" target="_blank"><img src="NZXTStyles\icons8-twitch-24 (1).png" alt="Twitch"></a></li>
            <li><a href="https://www.reddit.com/r/nzxt" target="_blank"><img src="NZXTStyles\icons8-reddit-24.png" alt="Reddit"></a></li>
            <li><a href="https://www.tiktok.com/@nzxt" target="_blank"><img src="NZXTStyles\icons8-tiktok-24.png" alt="TikTok"></a></li>
            <li><a href="https://discord.gg/NZXT" target="_blank"><img src="NZXTStyles\icons8-discord-24.png" alt="Discord"></a></li>
          </ul>
          <div class="empty"></div>
        </div>
        <div class="Footer-categories">
          <div class="empty"></div>
          <div class="Footer-Contact">
            <p>CONTACT</p>
            <button class="Footer-buttons">Company</button>
            <button class="Footer-buttons">Customer Support</button>
            <button class="Footer-buttons">Submit a Request</button>
            <button class="Footer-buttons">Support Center</button>
          </div>
          <div class="Footer-Contact">
            <p>ABOUT NZXT</p>
            <button class="Footer-buttons">Founder Q & A</button>
            <button class="Footer-buttons">Careers</button>
            <button class="Footer-buttons">Customer Reviews</button>
          </div>
          <div class="Footer-Contact">
            <p>COMMUNITY</p>
            <button class="Footer-buttons">Our Discord</button>
            <button class="Footer-buttons">Newsroom & Blog</button>
          </div>
          <div class="Footer-Contact">
            <p>SOFTWARE</p>
            <button class="Footer-buttons">CAM</button>
            <button class="Footer-buttons">CAM Feedback</button>
          </div>
          <div class="Footer-Contact">
            <p>ACCOUNT</p>
            <button class="Footer-buttons">Manage Your Account</button>
          </div>
          <div class="Footer-Contact">
            <p>NZXT STORE</p>
            <button class="Footer-buttons">NZXT BLD PC</button>
            <button class="Footer-buttons">Refurbished Builds</button>
            <button class="Footer-buttons">FAQ</button>
            <button class="Footer-buttons">Find a Retailer</button>
          </div>
          <div class="empty"></div>
        </div>
        <div class="END">
          <div class="empty"></div>
          <div class="END-END">
            <p style="margin-bottom:5px;margin-left:10px"><b>NZXT</b></p>
            <p style="display: inline-block; margin:0px; color: #91919c;margin-left:10px">&#xa9;NZXT Inc. 2023 All Rights Reserved</p>
            <button class="END-buttons">Legal</button>
            <button class="END-buttons">Privacy Policy</button>
            <button class="END-buttons">Manage Cookie Preferences</button>
          </div>
          <div class="empty"></div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded',function() {
      if('<?php echo $Role?>' == 'Admin')
      {
        let dashboard = document.getElementById('Dashboard');

        dashboard.style.display = 'block';
      }
    });
    </script>
</body>
</html>
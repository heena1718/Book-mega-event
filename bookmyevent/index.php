 <?php
 include "config.php";
 session_start();
 $query  = "select * from slider_image";
 
 $all = mysqli_query($con , $query);
 
 $adv = "select * from adventure_image";
 
 $addall=mysqli_query($con , $adv);
 
 
 
 ?>
 
 <html >
 <head id="Head1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- VERY IMPORTANT -->
<title>
	Live Music Concerts Tickets, Events, Amusement Park, Games,Event Activities, Special Offers Events
 </title><link rel="icon" href="images/Title_Icon.png" type="image/gif" sizes="16x16" /><meta name="viewport" content="width=device-width" />
     <script src="js/jquery_1.11.1.min.js" type="text/javascript"></script>
     <script src="js/Master.js" type="text/javascript"></script>
     <script src="js/Search.js" type="text/javascript"></script>
     <link href="CSS/Master.css" type="text/css" rel="stylesheet" /><link href="CSS/font-awesome.min.css" rel="stylesheet" /><link href="CSS/default.css" type="text/css" rel="stylesheet" /><link href="CSS/PageStyles.css" rel="stylesheet" /><link rel="manifest" href="manifest.json" />
 <script src="SIM-web-notifications.js" type="text/javascript"></script>

    

 <meta name="description" content="Discount on tickets for Adventure sports, Amusement park, Events, Live performances, music concerts and much more." />
 <body style="background: url(upload/bannerimage/bkground.jpg) 50% 0% no-repeat fixed;">
	
 <style type="text/css">
    .NewTag {
        position: relative;
    }

        .NewTag:after {
            content: 'New';
            color: red;
            font-weight: bold;
            font-family: verdana;
            font-size: 10px;
            position: absolute;
            top: 1px;
            right: 8px;
            -webkit-animation-name: newFlag;
            -webkit-animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-name: newFlag;
            -moz-animation-duration: 1s;
            -moz-animation-timing-function: linear;
            -moz-animation-iteration-count: infinite;
            animation-name: newFlag;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

    @-moz-keyframes newFlag {
        0% {
            color: red;
        }

        50% {
            color: yellow;
        }

        100% {
            color: red;
        }
    }

    @-webkit-keyframes newFlag {
        0% {
            color: red;
        }

        50% {
            color: yellow;
        }

        100% {
            color: red;
        }
    }

    @keyframes newFlag {
        0% {
            color: red;
        }

        50% {
            color: yellow;
        }

        100% {
            color: red;
        }
    }
</style>
 <div id="OptionMenu">
     <a href="#" id="MobileMenu" style="text-decoration:none; color:white;">
    <span class="mobileMenuLabel">&nbsp ≡ &nbsp Menu </span></a>

 </div>
 <nav>
     <ul>
         <li class="lnk selected">
             <a href="index.php">Home </a>

         </li>
       
         <li class="lnk">
             <a href="Events.php">Events </a>
         </li>
         <li class="lnk">
             <a href="adventures.php">Adventures </a>
         </li>

           <li class="lnk NewTag">
             <a href="celebs.php" style="padding: 0px 5px;">Celebrities </a>
         </li>
        <li class="lnk NewTag">
             <a href="venuelist.php" style="padding: 0px 5px;">Party Venues </a>
         </li>
        
         <li class="lnk">
             <a href="offer.php">Offers </a>
         </li><li class="lnk"><a href="register.php">Register/login </a> </li>
		  <li class="lnk"><a href="logout.php"><?php if(isset($_SESSION['username']))
																{ echo $_SESSION['username']; }
															else
															{echo "Guest";}?></a> </li>
       
     </ul>
 </nav>
 
         <div class="wraper">
		 <br>
	<div class="main_banner">
                 <div class="bannerImage">
                     <div class="sliderItems">
                        
								<?php
									while($row= mysqli_fetch_assoc($all))
									{
										?>
										
                                 <a href=""<?php echo $row['nameofevent'] ?>>
                                     <img class="lazy" src=<?php echo $row['image']?> >
                                 </a>
									<?php }?>

                            
                     </div>
                    
                 </div>
  	</div>
	 <link href="CSS/slick.css" rel="stylesheet" />
     <script src="js/slick.js"></script>
	<script type="text/javascript">
         $(document).ready(function () {
             $('.adventuresSlider').slick({
                 slidesToShow: 3,
                 slidesToScroll: 2,
                 autoplay: true,
                 autoplaySpeed: 2000,
             });


             //$(".slick-prev").val('');
             //$(".slick-next").val('');
         });
    </script>          
 
  <link href="CSS/slick.css" rel="stylesheet" />

 <script src="js/slick.js"></script>

 <script type="text/javascript">
         $(document).ready(function () {
         var displayWidth = innerWidth;
         if (displayWidth >= '730') {
             $('.eventSlider').slick({
                 slidesToShow: 4,
                 slidesToScroll: 3,
                 autoplay: true,
                 autoplaySpeed: 2000,
             });
        }
        else {
            $('.eventSlider').slick({
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 autoplay: true,
                 autoplaySpeed: 2000,
             });
        }
            
			$(".slick-prev").val('');
             $(".slick-next").val('');
         });
</script>

 <h1>Events</h1>
 <div class="SliderParentDiv">
     <div id='eventSliderNav' class="eventSlideControler" style="display:none;">
         
      
     </div>
     
	 <div id="eventCover" class="EventSection">
         <div class="eventItemContainer">
             <div id="eventList" class='eventSlider'>
                 <?php 
					$event = "select * from event_image";
					$allevent = mysqli_query($con , $event);
					?>
						<?php
									while($row= mysqli_fetch_assoc($allevent))
									{
										?>
                         <table class="itemCover">
                             <tr>
                                 <td>
                                     <div class="eventItem">
                                         <a href='showevent.php?id=<?php echo $row['id'] ?>'>
                                             <table>
                                                 <tr>
                                                     <td class="eventImage">
                                                         <img src="<?php echo $row['image']; ?>">
														                                                      </td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: center;">
                                                         <div class="thumbnailButton">
                                                            Book Now
                                                         </div>
                                                         <span class="eventName">
                                                             <?php echo $row['nameofevent']; ?> </span><br />
                                                     </td>
                                                 </tr>
                                             </table>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                         </table>
								<?php
									}
									?>
                   
                        
             </div>
          
             
            
         </div>
     </div>
 </div>
 
 <br style="clear:both">
 
  <h1>Celebrity</h1>
 <div class="SliderParentDiv">
     <div id='eventSliderNav' class="eventSlideControler" style="display:none;">
          <?php 
					$celebs = "select * from celebrity_image";
					$allceleb = mysqli_query($con , $celebs);
					?>
      
     </div>
     <div id="eventCover" class="EventSection">
         <div class="eventItemContainer">
             <div id="eventList" class='eventSlider'>
                
						<?php
									while($cel = mysqli_fetch_assoc($allceleb))
									{
										?>
                         <table class="itemCover">
                             <tr>
                                 <td>
                                     <div class="eventItem">
                                         <a href="showcelebrity.php?name=<?php echo $cel['nameofevent'];  ?>">
                                             <table>
                                                 <tr>
                                                     <td class="eventImage">
                                                         <img src="<?php echo $cel['image']; ?>"  class="" />
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: center;">
                                                         <div class="thumbnailButton">
                                                            Book Now
                                                         </div>
                                                         <span class="eventName">
                                                             <?php echo $cel['nameofevent']; ?> </span><br />
                                                     </td>
                                                 </tr>
                                             </table>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                         </table>
								<?php
									}
									?>
                   
                        
             </div>
          
             <table id="theatreList" class='itemCover'></table>
            
         </div>
     </div>
 </div>
	
<h1>Party Venue </h1>

<div class="SliderParentDiv">
     <div id='eventSliderNav' class="eventSlideControler" style="display:none;">
          <?php 
					$celebs = "select * from venue_image";
					$allceleb = mysqli_query($con , $celebs);
					?>
      
     </div>
     <div id="eventCover" class="EventSection">
         <div class="eventItemContainer">
             <div id="eventList" class='eventSlider'>
                
						<?php
									while($cel = mysqli_fetch_assoc($allceleb))
									{
										?>
                         <table class="itemCover">
                             <tr>
                                 <td>
                                     <div class="eventItem">
                                         <a href="showvenue.php?name=<?php echo $cel['nameofevent'];  ?>">
                                             <table>
                                                 <tr>
                                                     <td class="eventImage">
                                                         <img src="<?php echo $cel['image']; ?>"  class="" />
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: center;">
                                                         <div class="thumbnailButton">
                                                            Book Now
                                                         </div>
                                                         <span class="eventName">
                                                             <?php echo $cel['nameofevent']; ?> </span><br />
                                                     </td>
                                                 </tr>
                                             </table>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                         </table>
								<?php
									}
									?>
                   
                        
             </div>
          
             <table id="theatreList" class='itemCover'></table>
            
         </div>
     </div>
 </div>   
 
 
 <link href="../CSS/bootstrap.css" rel="stylesheet" />
 <style type="text/css">
    .childLnk {
        color: white;
        text-decoration: none;
        font-family: Verdana;
        font-size: 13px;
    }

        .childLnk:hover {
            color: black;
            text-decoration: none;
        }

    .HBlock {
        margin: 15px auto;
    }
</style>

<div class="footerOption">
    
         
            
             <div style="margin-left:400px;"class="col-md-3">
                
                 <br />
                 <span style="color: orange;">Follow Us: </span><br />
                 <div class="socialspan">
                     <a href="" target="_blank" title="Connect Us with Facebook" style="color: #3a5795;">
                         <span>
                             <img src="images/facebook.png" /></span>
                     </a>
                     <a href="" target="_blank" title="Follow Us with Twitter" style="color: #55acee;">
                         <span>
                             <img src="images/twitter.png" />
                         </span>
                     </a>
                     <a href="" target="_blank" title="join Us with Goole+" style="color: #d73d32!important;">
                         <span>
                             <img src="images/googleplus.png" />
                         </span>
                     </a>
                     <a href="" target="_blank" title="Subscribe our youtube channel" style="color: #E12A27;">
                         <span>
                             <img src="images/UTube.png" />
                         </span>
                     </a>
                 </div>
                
			<h3>copy right 2017 </h3>
        
         
         </div>
     </div>
 </div>


         </div>
     </form>
 </body>

 </html>
 
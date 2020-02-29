
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>U.A.F Registration Portal</title>

    <!-- Favicon -->
    <link rel="icon" href="images/fav.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

  <style>
         {
          box-sizing: border-box;
        }

        body {
          background-image: url(images/u1.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        }

        #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          font-family: Roboto thin;
          padding: 60px;
          width: 60%;
          min-width: 300px;
          box-shadow: 0px 2px rgba(0,0,0,0.2);
          border-top: solid 1px #00bbff;
          border-radius: 8px;
        }

        h1 {
          text-align: center;  
        }

        input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Roboto thin;
          border: 1px solid #aaaaaa;
          border-radius: 2px;
        }
        /* Hide all steps by default: */
        .tab {
          display: block;
        }
        #category{
             border-radius: 2px;
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: roboto thin;
          border: 1px solid #aaaaaa;

        }
        button {
          background-color: #00bbff;
          color: #ffffff;
          border: none;
          padding: 15px 40px;
          font-size: 17px;
          font-family: Raleway;
          cursor: pointer;
          opacity: 0.5;
        }

        button:hover {
          opacity: 1;
          box-shadow: 0px 2px rgba(0,0,0,0.5);

        }

        #prevBtn {
          background-color: #bbbbbb;
        }

</style>
<style type="text/css">
    
/* The container */
.cont {
  display: block;
  position: relative;
  padding-left: 50px;
  margin-bottom: 25px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-family: Roboto thin;
}

/* Hide the browser's default checkbox */
.cont input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.cont:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.cont input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.cont input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.cont .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

<script type="text/javascript">

/***********************************************
* Limit number of checked checkboxes script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

function checkboxlimit(checkgroup, limit){
    var checkgroup=checkgroup
    var limit=limit
    for (var i=0; i<checkgroup.length; i++){
        checkgroup[i].onclick=function(){
        var checkedcount=0
        for (var i=0; i<checkgroup.length; i++)
            checkedcount+=(checkgroup[i].checked)? 1 : 0
        if (checkedcount>limit){
            alert("You can only select a maximum of "+limit+" Activities, Please uncheck one activity to choose another option.")
            this.checked=false
            }
        }
    }
}

</script>


</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Top Header_Area -->
    <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:+256-414-340342"><i class="fa fa-phone"></i>+256-414-340342</a></li>
                <li><a href=""><i class="fa fa-envelope-o"></i>info@athleticsuganda.org</a></li>
            </ul>
            
        </div>
    </section>
    <!-- End Top Header_Area -->

  <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-3 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/favicon.png" alt="Logo"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-9 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="index.php">UAF</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.html">About UAF</a></li>
                                <li><a href="docs/UAF_Team.pdf" type="application.pdf">UAF Board(Technical/ICT/Secretary)</a></li>
                                <li><a href="Blog.html">Press Release</a></li>
                                <li><a href="docs/UAF_Team.pdf" type="application.pdf">Committee Commissions</a></li>
                                <li><a href="#">Our Sponsorers</a></li>
                            </ul>
                        </li>
                         <li class="dropdown submenu">
                            <a href="#">Performance</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="404.html">Elites</a></li>
                                <li><a href="blog.html">Juniors</a></li>
                                 <li><a href="records.html">Records</a></li>
                                   <li><a href="Gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#">Competitions</a>
                            <ul class="dropdown-menu other_dropdwn">
                                 <li><a href="docs/uafcalenda2020.pdf" type="application.pdf" target="blank">News & Events</a></li>
                                <li><a href="docs/tech.pdf" type="application.pdf" target="blank">Technical Rules</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown submenu">
                            <a href="#">Anti Doping</a>
                               <ul class="dropdown-menu other_dropdwn">
                                    <li><a href="antidopping.html">About Anti Doping</a></li>
                                    <li><a href="contact.html">Whistle Blower</a></li>
                                </ul>
                        </li>
                        <li><a href="onlineform.php">Register</a></li>
                        <li class="dropdown submenu">
                            <a href="#">Get Involved</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="clubs.html">Find a Club</a></li>
                                <li><a href="blog.html">Grass Roots</a></li>
                                <li><a href="clubs.html">Coaches</a></li>
                            </ul>
                        </li>
                        <li><a href="downloads.html">Downloads</a></li>
                        <li><a href="contact.html"> Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="1">
        <h2>Register Here</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">Register</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

  
          <div class="tab">
                <form id="regForm" action="onlineform.php" method="post">
                    <h3>National / International Event Activities:</h3><br/>

                    Name:
                   <p><input type="text" placeholder="Your Full Name ....." name="name" required=""></p><br/>
                    Bip Number:
                    <p><input type="text" placeholder="Bip Number ....." name="bipno" required=""></p><br/>
                    Club Name:
                            <p><input type="text" placeholder="Club Name ....." name="club" required=""></p><br/>
                <h4>All Trails</h4>
                <select name="category" id="category" required="">
                        <option value="">- Category -</option>
                        <option value="1">1st National Trials (Paralympic Trials)</option>
                        <option value="1">2nd National Trials (Athletics Conference)</option>
                        <option value="1">3rd National Trials</option>
                        <option value="1">4th National Trials</option>
                        <option value="1">5th National Trials</option><br/><br/>
                        <option value="1">21st Akii Bua Memorial Championship/ Central Region Championship</option>
                        <option value="1">National Track & Field Championship</option>
                </select><br/><br/>
                <hr/>
         
              <h4>Activities:</h4>
              <p>Choose three(3) options! If you want to change, first uncheck an activitie before choosing another choice once it reaches maximum</p>
              <hr/>
              <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                        <label class="cont">100M(Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">200m (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                         <label class="cont">400m (Men / Women)
                          <input type="checkbox" name="activities" >
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">800m (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">1500m (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">3000m SC (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">5000m (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">10000m (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">High Jump (Men / Women)
                          <input type="checkbox" name="activities" >
                          <span class="checkmark"></span>
                        </label>

                </div>
                <div class="col-sm-6 contact_info send_message">
                        <label class="cont">Long Jump (Men / Women)
                          <input type="checkbox" name="activities" >
                          <span class="checkmark"></span>
                        </label><label class="cont">Shot Put (Men / Women)
                          <input type="checkbox" name="activities" >
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">Javelin (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">Discuss (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">Tripple Jump (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                         <label class="cont">4*400m Relay (Men / Women)
                          <input type="checkbox" name="activities" >
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">4*100m Relay (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">100m Hurdles (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                        <label class="cont">400m Hurdles (Men / Women)
                          <input type="checkbox" name="activities">
                          <span class="checkmark"></span>
                        </label>
                </div>
            </div>           
          <div style="overflow:auto;">
                 <hr/>
                <div style="float:right;">
                      <button type="submit" id="prevBtn">Edit</button>
                      <button type="submit" name="register" id="nextBtn">Send</button>
                </div>
          </div>
        </form>
    </div>

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>SOCIAL HANDLES</h2>
                    <p>Let's get social @.</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/pages/Uganda-Athletics-Federation-UAF/202340296448808"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.twitter.com/@AthleticsUgand1"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://athleticsuganda.org/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>People Also Like</h2>
                    <ul class="quick_link">
                        <li><a href="https://www.worldathletics.org"><i class="fa fa-chevron-right"></i>World Athletics WA</a></li>
                        <li><a href="https://www.caaweb.org/en"><i class="fa fa-chevron-right"></i>Confederation of African Athletics</a></li>
                        <li><a href="https://www.ncs.go.ug"><i class="fa fa-chevron-right"></i>National Council of Sports (NCS)</a></li>
                        <li><a href="https://www.nocuganda.org"><i class="fa fa-chevron-right"></i>Uganda Olympic Committee(UOC)</a></li>
                        <li><a href="https://www.gou.go.ug"><i class="fa fa-chevron-right"></i>Government of Uganda</a></li>
                        <li><a href="https://www.education.go.ug"><i class="fa fa-chevron-right"></i>Ministy of Education and Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Twitter Feed</h2>
                    <a href="https://twitter.com/@AthleticsUgand1" class="twitter">@AtlhleticUgand1: Congratulations to 
                    drukare Secretary General Official_UOC and President  
                    Uganda Swimming upon your appointment as new chairperson NCS Board.</a>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@athleticsuganda.org</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+256-414-340342
</a></li>
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Metropole House, Ground Floor, Suite G10. Plot 8/10 Entebbe Road, Kampala.</span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright © 2020 Uganda Athletics Federation All rights reserved. Designed & Developed by: <a href="https://web.facebook.com/profile.php?id=100007384239171" target="blank">Eng. Nobert Dramani</a>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- jQuery JS -->




    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>

    <script type="text/javascript">

//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.regForm.activities, 3)

</script>



</body>
</html>

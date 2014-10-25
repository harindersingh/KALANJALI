<?php session_start();
$email=$_SESSION["email"];
$name = $_SESSION["name"];

if(!isset($_SESSION['email']))
{
 header('Location: new.php');
}


if($_SESSION['check']=="notdone")
{
	echo '<script language="javascript">';
	echo 'alert("PLEASE FILL EVENT DETAILS !!")';
	echo '</script>';
}


?>
<html>
<head>
	<title>Kalanjali 14</title>
	<script src="js/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-latest.min.js"></script>
  <script type="text/javascript">
    function setOptions(chosen, selbox) {

    selbox.options.length = 0;
    if (chosen == " ") {
      selbox.options[selbox.options.length] = new Option('Select the event type first',' ');
    setTimeout(setOptions(' ',document.myform.optthree),5);
    }
    if (chosen == "1") {
      selbox.options[selbox.options.length] = new Option('Sugama Sangeetha','1');
      selbox.options[selbox.options.length] = new Option('Swara Lahari','2');
      selbox.options[selbox.options.length] = new Option('Avarthanam','3');
      selbox.options[selbox.options.length] = new Option('Nada Bhed','4');
      selbox.options[selbox.options.length] = new Option('Battle of Bands','5');
      selbox.options[selbox.options.length] = new Option('Gaana Bajaana','6');
      selbox.options[selbox.options.length] = new Option('Desi Chorus','7');
      selbox.options[selbox.options.length] = new Option('English Rhythms','8');
      selbox.options[selbox.options.length] = new Option('Anthakshari (Hindi)','9');
      selbox.options[selbox.options.length] = new Option('Anthakshari (kannada)','10');
      
    }
    if (chosen == "2") {
      selbox.options[selbox.options.length] = new Option('Nupura Nada','1');
      selbox.options[selbox.options.length] = new Option('Step UP!','2');
      selbox.options[selbox.options.length] = new Option('Boogie Woogie','3');
      selbox.options[selbox.options.length] = new Option('Taka-Dhimi-Ta','4');
      

    }

    if (chosen == "3") {
      selbox.options[selbox.options.length] = new Option('Clash of the Titans','1');
      selbox.options[selbox.options.length] = new Option('Soothing Odes','2');
      selbox.options[selbox.options.length] = new Option('Minute to Win it!','3');
      selbox.options[selbox.options.length] = new Option('Video Synthesis ','4');
      selbox.options[selbox.options.length] = new Option('Air crash','5');

      

    }
    if (chosen == "4") {
      selbox.options[selbox.options.length] = new Option('"Indian floor art" : Rangoli','1');
      selbox.options[selbox.options.length] = new Option('"ctrl-X ctrl-V" : Collage','2');
      selbox.options[selbox.options.length] = new Option('"Innovate": Model making','3');
      selbox.options[selbox.options.length] = new Option('"Flash" : Spot photography','4');
      selbox.options[selbox.options.length] = new Option('"Not so funny" : Cartooning','5');
      selbox.options[selbox.options.length] = new Option('"Catch it on canvas" : On Spot Painting','6');


    }

    if (chosen == "5") {
      selbox.options[selbox.options.length] = new Option('"Keep guessing" : General Quiz','1');
      selbox.options[selbox.options.length] = new Option('"ctrl-f9" : coding and debugging','2');
    }

    if (chosen == "6") {
      selbox.options[selbox.options.length] = new Option('"See what we mean" : Dumb Charades','1');
      selbox.options[selbox.options.length] = new Option('"On the streets": Street Play','2');
      selbox.options[selbox.options.length] = new Option('SKIT','3');
       
    }

    if (chosen == "7") {
      selbox.options[selbox.options.length] = new Option('Counter Strike 1.6','1');
      selbox.options[selbox.options.length] = new Option('NFS Most Wanted','2');
      selbox.options[selbox.options.length] = new Option('FIFA 11','3');
     
    }

    if (chosen == "8") {
      selbox.options[selbox.options.length] = new Option(' Howzaaat? Gully Cricket','1');
      selbox.options[selbox.options.length] = new Option('Leg it! :Gully Football','2');
       selbox.options[selbox.options.length] = new Option('Ramp on Fire : Fashion Show','3');
      selbox.options[selbox.options.length] = new Option('Show the world: Art Exhibition','4');
    }


    }
  </script>

	<link rel="stylesheet" type="text/css" href="css/register.css">
  <style type="text/css">
  select{margin: 10px;
        padding: 10px;
        font-weight: bolder;
        font-family:Tempus Sans ITC;
        border-radius: 10px;
  }
  .navbar-custom {
    margin-bottom: 0;
    border-bottom: 1px solid rgba(255,255,255,.3);
    text-transform: uppercase;
    font-family: 'Open Sans';
    font-size: 20px;
    font-weight: 300;
    background-color: #000;
    }

    .navbar-custom .navbar-brand {
        font-weight: 700;
    }

    .navbar-custom .navbar-brand:focus {
        outline: 0;
    }

    .navbar-custom .navbar-brand .navbar-toggle {
        padding: 4px 6px;
        font-size: 16px;
        color: #fff;
    }

    .navbar-custom .navbar-brand .navbar-toggle:focus,
    .navbar-custom .navbar-brand .navbar-toggle:active {
        outline: 0;
    }

    .navbar-custom a {
      font-family: 'Open Sans';
      font-size: 20px;
      font-weight: 300;
    }

    .navbar-custom .nav li.active {
        outline: nonte;
        background-color: rgba(255,255,255,.3);
    }

    .navbar-custom .nav li a {
        -webkit-transition: background .3s ease-in-out;
        -moz-transition: background .3s ease-in-out;
        transition: background .3s ease-in-out;
    }

    .navbar-custom .nav li a:hover,
    .navbar-custom .nav li a:focus,
    .navbar-custom .nav li a.active {
        outline: 0;
        background-color: rgba(255,255,255,.3);
    }
    .navbar-toggle {
      position: relative;
      float: right;
      margin-right: 15px;
      padding: 9px 10px;
      margin-top: 8px;
      margin-bottom: 8px;
      background-color: transparent;
      color: #fff;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
      }

    @media(min-width:767px) {
        .navbar {
            padding: 20px 0;
            border-bottom: 0;
            letter-spacing: 1px;
            background: 0 0;
            -webkit-transition: background .5s ease-in-out,padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out,padding .5s ease-in-out;
            transition: background .5s ease-in-out,padding .5s ease-in-out;
        }

        .top-nav-collapse {
            padding: 0;
            background-color: #000;
        }

        .navbar-custom.top-nav-collapse {
            border-bottom: 1px solid rgba(255,255,255,.3);
        }
    }
    select{
      margin: 10 10 10 0px;
    }
  </style>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div class="container">
        
		<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">
                  <span class="light">KALANJALI</span> 2014
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li>
                        <a class="page-scroll" href="event.html">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="schedule.html">Schedule</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="bregister.php">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <!-- <h2 style="color:#EF442C;text-align: center">REGISTRATIONS OPENING SOON</h2> -->
    <h4>welcome <?echo "$name"?></h4>
    <form name="myform" action="hello.php" method="post">
    <h4>Select the Event</h4>
   
    <div align="center" class="event-list">
    <select name="optone" class="col-sm-3" size="1" onchange="setOptions(document.myform.optone.options[document.myform.optone.selectedIndex].value,document.myform.opttwo);" required>
      <option value="0" selected="selected" disabled>Select Event Type </option>
      <option value="1">Musical Events</option>
      <option value="2">Dance Events</option>
      <option value="3">Literary Events </option>
      <option value="4">Fine Art Events</option>
      <option value="5">Technical Events</option>
      <option value="6">Dramatics Events </option>
      <option value="7">LAN games</option>
      <option value="8"> Other Attractions</option>

    </select>
    <select name="opttwo" class="col-sm-3" size="1" onchange="setOptions(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value,document.myform.optthree);">
    <option value=" " selected="selected">Please select the Event</option>
    </select>
    <br> <br>
</div>
    
<br>
  <div>
   	<h4>Enter Your Full Name (to be printed on certificates)</h4>
    <div class=" input-group col-lg-7">
      <span class="input-group-addon glyphicon glyphicon-user"></span>
      <input type="text" class="form-control" placeholder="Name" name="name_o_p" required>
    </div>
  </div>
  <br>

  <h4>Enter Your College Name</h4>
  <select name="optcol" class="col-lg-7">
      <option value="0" selected="selected" disabled>Select College </option>
      <option value="AP">A.P.S COLLEGE OF ENGINEERING</option>
      <option value="AC">ALPHA COLLEGE OF ENGINEERING</option>
      <option value="AM">AMC ENGINEERING COLLEGE </option>
      <option value="AR">AMRUTHA INSTITUTE OF ENGINEERING AND MGMT. SCIENCES</option> 
      <option value="AT">ATRIA INSTITUTE OF TECHNOLOGY </option>
      <option value="BG">B.N.M.INSTITUTE OF TECHNOLOGY </option>
      <option value="BT">B.T.L.INSTITUTE OF TECHNOLOGY </option>
      <option value="BC">BANGALORE COLLEGE OF ENGINEERING AND TECHNOLOGY </option>
      <option value="BI">BANGALORE INSTITUTE OF TECHNOLOGY </option>
      <option value="BM">BMS COLLEGE OF ENGINEERING </option>
      <option value="BY">BMS INSTITUTE OF TECHNOLOGY</option>
      <option value="BO">BRINDAVAN COLLEGE OF ENGG </option>
      <option value="CR">C.M.R INSTITUTE OF TECHNOLOGY </option>
      <option value="CD">CAMBRIDGE INSTITUTE OF TECHNOLOGY </option>
      <option value="DS">DAYANANDA SAGAR COLLEGE OF ENGINEERING </option>
      <option value="DB">DON BOSCO INSTITUTE OF TECHNOLOGY </option>
      <option value="DA">DR. AMBEDKAR INSTITUTE OF TECHNOLOGY </option>
      <option value="EP">EAST POINT COLLEGE OF ENGINEERING AND TECHNOLOGY </option>
      <option value="EW">EAST WEST INSTITUTE OF TECHNOLOGY</option>
      <option value="HK">HKBK COLLEGE OF ENGINEERING </option>
      <option value="JS">JSS ACADEMY OF TECHNICIAL EDUCATION </option>
      <option value="KS">K.S.INSTITUTE OF TECHNOLOGY </option>
      <option value="KN">KNS INSTITUTE OF TECHNOLOGY </option>
      <option value="ME">M.S.ENGINEERING COLLEGE </option>
      <option value="MS">M.S.RAMAIAH INSTITUTE OF TECHNIOLOGY </option>
      <option value="MJ">MVJ COLLEGE OF ENGINEERING </option>
      <option value="NC">NAGARJUNA COLLEGE OF ENGINEERING AND TECHNOLOGY </option>
      <option value="NH">NEW HORIZON COLLEGE OF ENGINEERING </option>
      <option value="NT">NITTE MEENAKSHI INSTITUTE OF TECHNOLOGY </option>
      <option value="PI">PES INSTITUTE OF TECHNOLOGY </option>
      <option value="PE">PES SCHOOL OF ENGINEERING </option>
      <option value="RV">R.V.COLLEGE OF ENGINEERING </option>
      <option value="RG">RAJIV GANDHI INSTITUTE OF TECHNOLOGY</option> 
      <option value="RE">REVA INSTITUTE OF  TECHNOLOGY & MANAGEMENT</option>
      <option value="RN">RNS INSTITUTE OF TECHNOLOGY </option>
      <option value="SJ">S.J.C INSTITUTE OF TECHNOLOGY </option>
      <option value="VA">SAI VIDYA INSTITUTE OF TECHNOLOGY </option>
      <option value="ST">SAMBHRAM INSTITUTE OF TECHNOLOGY </option>
      <option value="SG">SAPTHAGIRI COLLEGE OF ENGINEERING </option>
      <option value="SI">SIDDAGANGA INSTITUTE OF TECHNOLOGY </option>
      <option value="MV">SIR M. VISVESVARAYA INSTITUTE OF TECHNOLOGY </option>
      <option value="JB">SJB INSTITUTE OF TECHNOLOGY </option>
      <option value="RC">SRI REVANASIDDESHWARA INSTITUTE OF TECHNOLOGY </option>
      <option value="VE">SRI VENKATESHWARA COLLEGE OF ENGINEERING </option>
      <option value="DT">DAYANANDA SAGAR ACADEMY OF TECHNOLOGY AND MGMT.</option>
      <option value="OTH">OTHERS</option>
    </select>
  <div class=" input-group col-lg-7">
  <!--  <span class="input-group-addon ">C</span>
    <input type="text" class="form-control" placeholder="Type College Name If Not In The List"> -->
  </div> 
<br> 

  <h4>Enter Your Email id</h4>
  <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-envelope "></span>
    <input type="email" disabled class="form-control" value="<? echo $email; ?>" placeholder="Email id" name="emailID" >
  </div>
<br>
  <h4>Enter Your Phone Number</h4>
  <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-earphone"></span>
    <input maxlength="10" class="form-control" placeholder="Phone Number" name="contactNo" required>
  </div>
<br>
  <button type="submit" class="btn btn-primary " id="role" >Register</button>
  </form>
</div>
<!-- Custom Theme JavaScript -->
    <script src="js/kalanjali.js"></script>
	
</body>
</html>
 <?php
 
 session_start();
 if($_SESSION['logging']=="1")
 {
    $_SESSION['name']=$_POST['uname'];
    $_SESSION['logging']="2";
 }
 else
 {
    if(!isset($_SESSION['name1']))
           header('Location: login.php');
 }

    
        
if($_SESSION['check']=="notdone")
{
	echo '<script language="javascript">';
	echo 'alert("PLEASE FILL EVENT DETAILS !!")';
	echo '</script>';
}


 if(!isset($_SESSION['name']))
 {
    header('Location: login.php');
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
      //selbox.options[selbox.options.length] = new Option('Sugama Sangeetha','1');
      //selbox.options[selbox.options.length] = new Option('Swara Lahari','2');
      selbox.options[selbox.options.length] = new Option('Avarthanam (Solo Percussion)','3');
      selbox.options[selbox.options.length] = new Option('Nada Bhed (Solo Non Percussion )','4');
      selbox.options[selbox.options.length] = new Option('Battle of Bands','5');
      selbox.options[selbox.options.length] = new Option('Gaana Bajaana (Light Solo Vocal Filmy)','6');
     // selbox.options[selbox.options.length] = new Option('Desi Chorus','7');
      //selbox.options[selbox.options.length] = new Option('English Rhythms','8');
     // selbox.options[selbox.options.length] = new Option('Anthakshari (Hindi)','9');
     // selbox.options[selbox.options.length] = new Option('Anthakshari (kannada)','10');
      
    }
    if (chosen == "2") {
      //selbox.options[selbox.options.length] = new Option('Nupura Nada','1');
      //selbox.options[selbox.options.length] = new Option('Step UP!','2');
      selbox.options[selbox.options.length] = new Option('Boogie Woogie(Solo Dance Filmy)','3');
      selbox.options[selbox.options.length] = new Option('Taka-Dhimi-Ta (Creative Group Dance)','4');
      

    }

    if (chosen == "3") {
     // selbox.options[selbox.options.length] = new Option('Clash of the Titans','1');
     // selbox.options[selbox.options.length] = new Option('Soothing Odes','2');
      //selbox.options[selbox.options.length] = new Option('Minute to Win it!','3');
      selbox.options[selbox.options.length] = new Option('Video Synthesis ','4');
      selbox.options[selbox.options.length] = new Option('Air crash','5');

      

    }
    if (chosen == "4") {
      //selbox.options[selbox.options.length] = new Option('"Indian floor art" : Rangoli','1');
      //selbox.options[selbox.options.length] = new Option('"ctrl-X ctrl-V" : Collage','2');
      //selbox.options[selbox.options.length] = new Option('"Innovate": Model making','3');
      //selbox.options[selbox.options.length] = new Option('"Flash" : Spot photography','4');
      selbox.options[selbox.options.length] = new Option('"Not so funny" : Cartooning','5');
      selbox.options[selbox.options.length] = new Option('"Catch it on canvas" : On Spot Painting','6');


    }

    if (chosen == "5") {
      selbox.options[selbox.options.length] = new Option('"Keep guessing" : General Quiz','1');
     // selbox.options[selbox.options.length] = new Option('"ctrl-f9" : coding and debugging','2');
    }

    if (chosen == "6") {
      selbox.options[selbox.options.length] = new Option('"See what we mean" : Dumb Charades','1');
      //selbox.options[selbox.options.length] = new Option('"On the streets": Street Play','2');
      selbox.options[selbox.options.length] = new Option('SKIT','3');
       
    }

    if (chosen == "7") {
     // selbox.options[selbox.options.length] = new Option('Counter Strike 1.6','1');
      //selbox.options[selbox.options.length] = new Option('NFS Most Wanted','2');
      //selbox.options[selbox.options.length] = new Option('FIFA 11','3');
     
    }

    if (chosen == "8") {
      //selbox.options[selbox.options.length] = new Option(' Howzaaat? Gully Cricket','1');
      //selbox.options[selbox.options.length] = new Option('Leg it! :Gully Football','2');
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
  .logout{
    margin-left: 1000px;
  }

  </style>

</head>
<body id="page-top">
	<form class="logout" method="post" action="ologout.php">
            <input type="submit" value="LOGOUT">
        </form>
        <div class="container">
        
		
    <h4>welcome <?php echo $_SESSION['name']?></h4>
    <form name="myform" action="offline.php" method="post">
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
      <option value="8"> Other Attractions</option>

    </select>
    <select name="opttwo" class="col-sm-3" size="1" onchange="setOptions(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value,document.myform.optthree);">
    <option value=" " selected="selected">Please select the Event</option>
    </select>
    <br> <br>
</div>
    
<br>
    <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-user"></span>
    <input maxlength="10" class="form-control" placeholder="Number Of Participants" name="n_o_p" required>
  </div>
    <br>
        <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-usd"></span>
    <input maxlength="10" class="form-control" placeholder="FEE" name="Fee" required>
  </div>
        <br>
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
   <span class="input-group-addon ">C</span>
    <input type="text" class="form-control" name="colname" placeholder="Type College Name If Not In The List"> 
    <input type="text" class="form-control" name="colcode" placeholder="College Code"> 
  </div>
  <h4>Enter Your Email id</h4>
  <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-envelope "></span>
    <input type="email"  placeholder="Email id" name="emailID" >
  </div>
<br>
  <h4>Enter Your Phone Number</h4>
  <div class="input-group  col-lg-7">
    <span class="input-group-addon glyphicon glyphicon-phone"></span>
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
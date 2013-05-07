<?php

 $url = $_GET["url"]; //Get POST'd LTI return URL from the previous page
 $h= '300';
 $w= '450';
 $hw = '&width=' . $w .'&height=' . $h ; // format H/W into LTI iFrame-ness
 $recording = $_POST['recording'];
 
 $server = parse_url($recording, PHP_URL_HOST); //Gets the Panopto Server Address
 $session = parse_url($recording, PHP_URL_QUERY); //Gets the Panopto Server Address
 $id= substr($session, 3);  // extracts the session id from the BlueCast Viewer URL


 $bcembed = urlencode("http://". $server ."/Panopto/Pages/Embed/Default.aspx?id=". $id ."&v=1"); //drops the session ID into the embed url
   


//Test button for bounce back to Canvas. 
//echo "<a href='" . $url . "?embed_type=iframe&url=" . $bcembed . $hw . "'class='btn btn-block btn-success'> Embed it!</a>"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $url . "?embed_type=iframe&url=" . $bcembed . $hw ; ?>">
	 
	<title>Insert a BlueCast Recording</title>
 <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 430px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="text"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  
</head>
<body><BR>
   
   <!-- Google Maps LTI Tool for Instructure's Canvas LMS
        Brent Saltzman, Emerging Technologies
        Copyright 2013 Creighton University
        Division of Information Technology -->
    
    <div class="container">
<div class="form-signin">
 
<center>
 
 <div class="alert alert-success">
 <p> Embedding! This window will close on it's own. </p>
</div>
<div class="progress progress-striped active">
  <div class="bar" style="width: 100%;"></div>
</div>







</center>


</div></div>
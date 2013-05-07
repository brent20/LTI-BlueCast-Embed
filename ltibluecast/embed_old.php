
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
        max-width: 490px;
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

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  
</head>
<body>
<?php
//Allows tracking of tool usage with GA 
include_once("analyticstracking.php") 
?>
<BR>
   
   <!-- LTI BlueCast Embed tool for Instructure's Canvas LMS
        Brent Saltzman, Emerging Technologies
        Copyright © 2013 Creighton University
        Division of Information Technology -->
    
    <div class="container">

      
  <?PHP 
  //Get the launch_presentation_return_url from Canvas and store it
  $url= $_POST['launch_presentation_return_url'];
 
 

 
  ?>   



<!-- Append the LTI return URL as a query param and pass it to generate.php -->
<form method="post" name="update" action="generate.php?url= <?php echo $return_url?>"  class="form-signin" />



<center><h4 class="form-signin-heading">Insert a BlueCast Recording</h4></center>
<tr>
<td>BlueCast Viewer Link
<input type="text" class="input-block-level" name="recording" /></td>
</tr>


</tr>
<BR>
<td> <!-- <center>Height <input type="text" class="input-mini" name="h" placeholder="425"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Width <input type="text" class="input-mini" name="w" placeholder="350"/></center></td> -->
</tr>


<tr>
<center> <!-- <button class="btn btn-large btn-block btn-primary" data-loading-text="Generating..." type="submit"><i class="icon-map-marker icon-white"></i> Insert Recording</button> -->
<?php 

echo $_GET["recording"];
$recording= $_GET["recording"];
$id= substr($recording, 2, -1);  // returns "cde" 
 
 $embedurl = urlencode("http://bluecast.creighton.edu/Panopto/Pages/Embed/Default.aspx?id=". $id ."&v=1");

echo "<a href='" . $url . "?embed_type=iframe&url=" . $embedurl . "'class='btn btn-block btn-primary' type='submit'> Insert Recording</a>"; ?> </center></td>


  
</td>
</tr>
</form>



</body>
</html>
<?
session_start();
if(!isset($_SESSION['member'])){
		header("location:login.php");
	}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta http-equiv="refresh" content="20">-->

    <title>Computer </title>

    <!-- Bootstrap Core CSS----->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS ----->
  <link href="css/plugins/morris.css" rel="stylesheet">
  <link rel="stylesheet" href="css/coreui-icons.min.css">
    <!-- Custom Fonts --->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script src="js/jssor.slider-22.2.7.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>

</head>

<body>

<?
include("PHPMailer/class.phpmailer.php");

$account="it@nr-group.com";
$password="!1nrggroupthAi";
$to="it@nr-group.com";
$from="it@nr-group.com";
$from_name="ya";
$msg="<strong>This is a bold text.</strong>"; // HTML message
$subject="HTML message";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.nr-group.com";
$mail->SMTPAuth= true;
$mail->Port = 25;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'none';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail has been sent";
}
?>
<div class="container-fluid" style="background-color:#FFF;">
  <div class="row">
    <div class="col-lg-4"></div>
      <div class="col-lg-4">
          <div class="panel-primary thumbnail" style="margin-top:10px;">
              <div class="panel-heading">
                  <i class="fa fa-fw fa-cog fa-2x pull-left" style="margin-top:5px;"></i>
                  <h4><label class="control-label" style="color:#FFF;">ระบบคอมพิวเตอร์</label></h4>

                  </div>
                  <br>
                <center><h3>  ขอบคุณสำหรับคะแนนประเมิน</h3></center>
                <br>
                <br>
                </div>
              </div>
            </div>
          </div>




          </body>

          <style>
            body {
              background-color: #FFF;
            }
          </style>

          </html>
          <script src="js/jquery.js"></script>

             <!-- Bootstrap Core JavaScript -->
             <script src="js/bootstrap.min.js"></script>

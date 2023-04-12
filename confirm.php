<?php

$conn = mysqli_connect('localhost:3307','root','','contact_db') or die('connection failed');
$message = "";

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $branch = $_POST['branch'];
   $doctors = $_POST['doctor'];
   $timeslot = $_POST['timeslot'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date,branch,doctors,timeslot) VALUES('$name','$email','$number','$date','$branch','$doctors','$timeslot')") or die('query failed');



   $html="<h1>Hello $name !</h1><br><p>Your Appointment with $doctors has been successfully booked for the date - <strong>$date</strong> at the selected branch - <strong>$branch</strong></p><br><p>Timings : $timeslot</p><br><strong>Thankyou!</strong><br><p>For further enquiries, contact - 8248724892</p>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->SMTPSecure="ssl";
	$mail->SMTPAuth=true;
	$mail->Username="digidoc04@gmail.com";
	$mail->Password="odqrebdadboapima";
	$mail->setFrom("digidoc04@gmail.com");
	$mail->addAddress("$email");
	$mail->isHTML(true);
	$mail->Subject="Appointment Confirmation message";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

    if ($mail->send()){
        echo " ";
    }else{
        echo "Error";
    }

	echo $message;

}


?>

<html>
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>complete responsive hospital website create by win coder</title>
        
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        
            <link rel="stylesheet" href="style.css">
            <style>
            .home
            {
                text-align: center;
                align-items : center;
                padding-left: 350px;
                background-color: lightblue;
            }
            .image{
                flex:1 1 40rem;
            }
            .image img
            {
                width:30%;
                padding:1rem;
                animation:float 3s linear infinite;
            }
            @keyframes float
            {
                0%, 100%
                {
                    transform: translateY(0rem);
                }
                50%
                {
                    transform: translateY(3rem);
                }
            }
            h1{
                text-align: center;
                font-family: Garamond,serif;
            }
            body
            {
                background-image: url('images/home-bg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
                background-color:  #fff;
            }
            input[type=submit]
            {
                border: none;
                color: #fff;
                padding: 25px 50px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
                align:center;
                margin-left:600px;
                margin-top: 100px;
                font-size:large;
                background-color: #1d4dd1;

            }
            input[type=button]
            {
                border: none;
                color:white;
                padding: 25px 40px;
                text-decoration:wavy;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
                align: center;
                justify:center;
                font-size: large;
                background-color: #16c91c;
            }
            .button1
            {
                border-radius: 12px;
            }

            .share {
                align-items: center;
                justify: center;
            }

        </style>
        </head>
    <body>
        <section class="home">
        <div class="share">
        <a href="#" ><input type="button" class="button1" value="Appointment confirmed!"></a><br><br><br>
        <p>For further enquiry, contact 8248724892</p>
        <a href="index.php" style="font-size: 20px ">digidoc04@gmail.com</a>
        </div>
    </section>
    <a href="index.php" target="_self"><input type="submit" value="CLICK HERE TO GO BACK"></a>
    </body>
</html>

<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	session_start();

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$con = mysqli_connect('localhost','root','','matjre');
		$qu = "select * from singupuser where email = '$email' LIMIT 1";
		$query = mysqli_query($con, $qu);
		$stmt = mysqli_num_rows(mysqli_query($con, $qu));
		$row = mysqli_fetch_assoc($query);
		//var_dump($row);die;
		if($stmt > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = mysqli_query($con,"UPDATE singupuser SET code = '$code' WHERE id= " . $row['id']);
			
				
				$message = "
					<h2>Password Reset</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Please click the link below to reset your password.</p>
					<a href='http://localhost/متجري/PRL/password_reset.php?code=". $code ."&user=" . $row['id'] . "'>Reset Password</a>
				";
				

				//Load phpmailer
	    		require_once('phpmailer/vendor/autoload.php');

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'matjreecommers@gmail.com';     
			        $mail->Password = 'Ahmahm123';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('testsourcecodester@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('testsourcecodester@gmail.com');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'laptop_exps Site Password Reset';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = '<div align="center"><p style="color:#ccdefd;
	font-size:23px;
	text-align:center;
	border:1px solid white;
	background-color:rgba(0,0,0,0.3);
	padding:15px;
	font-size:23px;
	width:25%;">Check Your Email..!!</p></div>';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = 'Email not found';
		}

		mysqli_close($con);

	}
	else{
		$_SESSION['error'] = 'Input email associated with account';
	}

	header('location: password_forgot.php');

?>
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$deliv = $_POST['zone'];
		$address = $_POST['address'];
		
		$contact_info = $_POST['contact_info'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		
		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;
		$_SESSION['zone'] = $zone;
		$_SESSION['cost'] = $cost;
		$_SESSION['address'] = $address;
		
		$_SESSION['contact_info'] = $contact_info;

	$conn = $pdo->open();
	$stmt = $conn->prepare("SELECT * FROM branches WHERE id=:id");
	$stmt->execute(['id'=>$deliv]);
	$deliver = $stmt->fetch();
		
	$zone = $deliver['country'];
	$cost = $deliver['zip_code'];
	
		if(!isset($_SESSION['captcha'])){
			require('recaptcha/src/autoload.php');		
			// $recaptcha = new \ReCaptcha\ReCaptcha('6LcxXmIaAAAAAFSY6wjaHDl65lmpTyXu-iBYBhp3', new \ReCaptcha\RequestMethod\SocketPost());
			$recaptcha = new \ReCaptcha\ReCaptcha('6LcxXmIaAAAAAFSY6wjaHDl65lmpTyXu-iBYBhp3');
			$resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
                      ->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			// $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

			if (!$resp->isSuccess()){
		  		$_SESSION['error'] = 'Please answer recaptcha correctly';
		  		header('location: NewAccount');	
		  		exit();	
		  	}	
		  	else{
		  		$_SESSION['captcha'] = time() + (10*60);
		  	}

		}
		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: NewAccount');
		}
		
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: NewAccount');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{
					$stmt = $conn->prepare("INSERT INTO users (coupon_id, email, contact_info, password, zone, cost, address, firstname, lastname, activate_code, created_on) VALUES (:coupon_id, :email, :contact_info, :password, :zone, :cost, :address, :firstname, :lastname, :code, :now)");
					$stmt->execute(['coupon_id'=>$deliv, 'email'=>$email, 'contact_info'=>$contact_info, 'password'=>$password, 'zone'=>$zone, 'cost'=>$cost, 'address'=>$address, 'firstname'=>$firstname, 'lastname'=>$lastname, 'code'=>$code, 'now'=>$now]);
					$userid = $conn->lastInsertId();

					$message = "
					   <div style='border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;'> 
                 <h1 style='text-align:center;'>Thank you for Registering.</h1>
				 <hr />
				 <img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
					<hr />
					<p style='text-align:center;'>Hello, ".$firstname.". Your account has been successfully registered. Below are your account details as you put them up on registration. Your password is your secret and dont share it with anyone. <br /> Click the [Activate Account] button below to activate your account.</p>
					<h2 style='text-align:center;'>Your Account Details:</h2>
						<table style='text-align:center;' width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
					<thead>
					<th style='border: 1px solid #56005E; padding: 0.5rem; border-top-left-radius:3px; border-top-right-radius:3px'><b>Email:</b></th>
					</thead>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1' >".$email."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem;'><b>Full name</b></td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1'>".$firstname." ".$lastname."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem;'><b>Address Details</b></td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1'>".$address."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem;'><b>Zone</b></td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1;  border-bottom-left-radius:3px; border-bottom-right-radius:3px'>".$zone."</td>
					</tr>
					</table>
					<hr />
						<h3 style='text-align:center;'>Please click the button below to activate your account.</h3>
						 <br />
					  <button style=' padding: 0.5rem; border-radius:3px; background-color:#E937D2; border:none; margin-left:45%;'>
					  <a style='text-decoration:none; color:white' href='https://tsavo.store/AccountActivation?code=".$code."&user=".$userid."'>Activate Account</a>
					 </button>
					 <h3 style='text-align:center;'>Or click the link below</h3>
					  <a style='text-decoration:none; color:#DF19C5; margin-left:45%;' href='https://tsavo.store/AccountActivation?code=".$code."&user=".$userid."'>Activate Account</a>
					 <hr />
					   <h2 style='text-align:center;'><b style='color:#B340FF'>WELCOME TO TSAVO!!</b></h2>
					
					</div>
					";

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    try {
				        //Server settings
						
				        $mail->isSMTP();                                     
				        $mail->Host = gethostbyname('mail.tsavo.store');                  
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'noreply@tsavo.store';     
				        $mail->Password = '@C3yaEp2@QXFtUt';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'tls';                           
				        $mail->Port = 587;                                   

				        $mail->setFrom('noreply@tsavo.store');
				        
				        //Recipients
				        $mail->addAddress($email);              
				        $mail->addReplyTo('waroruaalex@tsavo.store');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'TSAVO 254';
				        $mail->Body    = $message;

				        $mail->send();

				        unset($_SESSION['firstname']);
				        unset($_SESSION['lastname']);
				        unset($_SESSION['email']);

				        {$_SESSION['success'] = 'Account created. Check your email to activate.';
				        header('location: NewAccount');}

				    } 
									
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location: NewAccount');
				    }

				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: register.php');
				}

				$pdo->close();

			}

		}

	}
	else{
		$_SESSION['error'] = 'Complete filling the signup form first';
		header('location: NewAccount');
	}
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$shopname = $_POST['shopname'];
		$fullname = $_POST['full_name'];
		$email = $_POST['email'];
		
		$address = $_POST['address'];
		$terms = $_POST['acceptTerms'];
		$contact_info = $_POST['contact_info'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		
		$_SESSION['contact_info'] = $contact_info;
		$created_on = date("Y/m/d | h:i:sa");
		$seller_id = 'VEND-'.sha1($shopname);
		$type = 2;
		$crpt = time();
		$crpto = $crpt + $crpt;
		$shop_id = 'ID'.$crpto;
		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location:form-wizard_login.php');
		}
		
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM supplier WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location:form-wizard_login.php');
				
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);


				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{
					$stmt = $conn->prepare("INSERT INTO supplier (email, supp_contact, address, field1, supp_name, name, type, created_on, supp_slug, terms_conditions, shop_id) VALUES (:email, :supp_contact, :address, :field1, :supp_name, :name, :type, :created_on, :supp_slug, :terms_conditions, :shop_id)");
					$stmt->execute(['email'=>$email, 'supp_contact'=>$contact_info, 'address'=>$address, 'field1'=>$password, 'supp_name'=>$fullname, 'name'=>$shopname, 'type'=>$type, 'created_on'=>$created_on, 'supp_slug'=>$seller_id, 'terms_conditions'=>$terms, 'shop_id'=>$shop_id]);
					$userid = $conn->lastInsertId();

					$message = "
					   <div style='border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;'> 
                 <h1 style='text-align:center;'>Thank you for Registering.</h1>
				 <hr />
				 <img src='https://www.linkpicture.com/q/tsavo.jpg' width='100%' style='border:none;border-radius:3px' />
					<hr />
					<p style='text-align:center;'>Hello, ".$shopname.". Your account has been successfully registered. Below are your account details as you put them up on registration. Remember your password is your secret and dont share it with anyone. <br /> Click the [Activate Account] button below to activate your account.</p>
					<h2 style='text-align:center;'>Your Account Details:</h2>
						<table style='text-align:center;' width='100%' border='0' cellpadding='0' cellspacing='0' class='table table-bordered'>
					<thead>
					<th style='border: 1px solid #56005E; padding: 0.5rem; border-top-left-radius:3px; border-top-right-radius:3px'><b>Email:</b></th>
					</thead>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1' >".$email."</td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem;'><b>Password</b></td>
					</tr>
					<tr>
					<td style='border: 1px solid #56005E; padding: 0.5rem; background-color:#D6D0D1'>".$_POST['password']."</td>
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
					
					</table>
					<hr />
						<h3 style='text-align:center;'>Please click the button below to activate your account.</h3>
						 <br />
					  <button style=' padding: 0.5rem; border-radius:3px; background-color:#E937D2; border:none; margin-left:45%;'>
					  <a style='text-decoration:none; color:white' href='http://localhost/tsavo/AccountActivation?code=".$code."&user=".$userid."'>Activate Account</a>
					 </button>
					 <h3 style='text-align:center;'>Or click the link below</h3>
					  <a style='text-decoration:none; color:#DF19C5; margin-left:45%;' href='http://localhost/tsavo/AccountActivation?code=".$code."&user=".$userid."'>Activate Account</a>
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
				        header('location:form-wizard_login.php');}

				    } 
									
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location:form-wizard_login.php');
				    }

				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location:form-wizard_login.php');
				}

				$pdo->close();

			}

		}

	}
	else{
		$_SESSION['error'] = 'Complete filling the signup form first';
		header('location: form-wizard.php');
	}
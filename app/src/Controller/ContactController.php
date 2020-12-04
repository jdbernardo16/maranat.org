<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\View\ArrayData;

class ContactController extends Controller {

	private $fullname;
	private $email;
	private $subject;
	private $mobile;
	private $messagedetails;
	private $recipient;

	private $errors;
	private $captcha;

	public function init() {
		parent::init();
		if(isset($_POST['postFlag']) && is_numeric($_POST['postFlag'])) {

			$postFlag = $_POST['postFlag'];
			switch ($postFlag) {
			
				// Sending
				case 1:
						
					if($this->setPostVars() && $this->checkPostVars()) {
						$this->setRecipients();
						$this->sendEmail();
						// $this->sendConfirmationEmail();
						$this->writeRecord();
						$this->returnEcho(1, 'Sending successful!');
					}

				break;
			}
		}

		exit();
	}

	private function setPostVars() {

		if(isset($_POST['fullname'])) {
			$this->fullname = $_POST['fullname'];
		}

		if(isset($_POST['subject'])) {
			$this->subject = $_POST['subject'];
		}

		if(isset($_POST['mobile'])) {
			$this->mobile = $_POST['mobile'];
		}

		if(isset($_POST['email'])) {
			$this->email = $_POST['email'];
		}

		if(isset($_POST['messagedetails'])) {
			$this->messagedetails = $_POST['messagedetails'];
		}

		if(isset($_POST['g-recaptcha-response'])){
			$this->captcha=$_POST['g-recaptcha-response'];
		}

		return true;

	}

	private function checKPostVars() {

		if(empty($_POST['fullname'])) {
			$this->errors['fullname'] = array(
				'error' => 'Please input your full name'
			);
		}

		if(empty($_POST['subject'])) {
			$this->errors['subject'] = array(
				'error' => 'Please input your subject'
			);
		}

		if(empty($_POST['mobile'])) {
			$this->errors['mobile'] = array(
				'error' => 'Please input your number'
			);
		}

		if(empty($_POST['email'])) {
			$this->errors['email'] = array(
				'error' => 'Please input your email'
			);
		}

		if(empty($_POST['messagedetails'])) {
			$this->errors['messagedetails'] = array(
				'error' => 'Please leave a message'
			);
		}

		if(empty($_POST['g-recaptcha-response']) ) {
			$this->errors = 'Please check the the captcha form';
		}

		$secretKey = "6LcaSO8ZAAAAAKl5wzNHlhzoe77NCUK_XfWBIy-D";
		$response = $this->postRecaptcha($secretKey, $this->captcha);

		// should return JSON with success as true
		if($response->success) {
		} else {
			return $this->returnEcho(0, 'CAPTCHA verification failed.');
		}

		switch ($this->postFlag) {
			case 1: break;
		}

		// if(!empty(count($this->errors) > 0)) {
		// 	$this->returnEcho(0, explode(", ", $this->errors));

		// 	return false;
		// }

		return true;

	}

	private function setRecipients() {
		$email = ContactUsPage::get()->First()->EmailRecipient;
		$this->recipient = $email;
	}

	private function writeRecord() {
        $duplicate = new Inquiry();
        $duplicate->fullname = $this->fullname;
        $duplicate->email = $this->email;
        $duplicate->subject = $this->subject;
        $duplicate->mobile = $this->mobile;
        $duplicate->messagedetails = $this->messagedetails;
        $duplicate->status = 'Unread';
        $duplicate->write();
    }

	private function sendEmail() {
		// print_r('Email...');
		$to = explode(',', $this->recipient);
		// Enables HTML Text
		// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$subject = 'Boiler: New Website Inquiry! - '. $this->subject;

		$message = $this->getEmailTemplate();

		$this->sendPHPMailer($to, $subject, $message);

	}

	// private function sendConfirmationEmail() {
	// 	// print_r('Email confirmation...');
		
	// 	$recipients = explode(',', $this->email);
	// 	$subject = $this->subject .'Boiler: This is to notify you that we have succesfully received your message on Boiler';

	// 	// Enables HTML Text
	// 	// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
	// 	// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// 	$message = $this->getEmailTemplate();

	// 	$this->sendPHPMailer($recipients, $subject, $message);
	// }

	private function getEmailTemplate() {

		$arrayData = new ArrayData(array(
			'fullname' => $this->fullname,
			'subject' => $this->subject,
			'mobile' => $this->mobile,
			'email' => $this->email,
			'messagedetails' => $this->messagedetails,
		));

		return $arrayData->renderWith('ContactEmailTemplate');
	}

	private function sendPHPMailer($recipients, $subject, $body) {
		// print_r('Emailing...' . $recipients);
		try {

			$mail = new PHPMailer;
			// Set PHPMailer to use the sendmail transport
			$mail->isSendmail();
			//Set who the message is to be sent from
			$mail->setFrom('no-reply@Boiler.ph', 'Boiler.ph');
			//Set an alternative reply-to address
			$mail->addReplyTo('no-reply@Boiler.ph', 'Boiler.ph');
			//Set who the message is to be sent to

			// Add in each recipient to the "TO"
			foreach ($recipients as $recipient) {
				$mail->addAddress($recipient, $recipient);
			}

			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $body;

			$mail->send();

			// if (!$mail->send()) {
			// 	echo 'Mailer Error: '. $mail->ErrorInfo;
			// } else {
			// 	echo 'Message sent!';
			// }

			// print_r('Emailing done...');

		} catch (phpmailerException $e) {
			// print_r($e->errorMessage());
		} catch (Exception $e) {
			// print_r($e->getMessage());
		}
	}

	private function returnEcho($status, $message) {
		echo json_encode(array(
			'status' => $status,
			'message' => $message
		));
	}

	private function postRecaptcha($secret, $response) {

		$data = array(
			'secret' => $secret,
			'response' => $response
		);

		$verify = curl_init();
		curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($verify, CURLOPT_POST, true);
		curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
		return  json_decode(curl_exec($verify));

	}

}
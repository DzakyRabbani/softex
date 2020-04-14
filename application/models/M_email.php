<?php
Class M_email extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->config->load('config');
	}
	
	function host() {
		if (base_url() == "http://localhost:8080/fruittea-world/") {		//Local
			$host = "http://wirverify.com/fruittea-world/email_local";
		} else if(base_url() == "http://development.neovlops.com/fruittea-world/") {			//Development
			$host = "http://wirverify.com/fruittea-world/email_development";
		} else if(base_url() == "https://ftwnode.net/api/") {			//Development
			$host = "http://wirverify.com/fruittea-world/email_production";
		}
		return $host;
	}
	
	function link() {
		if (base_url() == "http://localhost:8080/fruittea-world/") {		//Local
			$link = "http://localhost:8080/fruittea-world";
		} else if(base_url() == "http://development.neovlops.com/fruittea-world/") {			//Development
			$link = "http://development.neovlops.com/fruittea-world";
		} else if(base_url() == "https://ftwnode.net/api/") {			//Development
			$link = "https://ftwnode.net/api/";
		}
		return $link;
	}
	
	function sendVerificationEmail($name, $emailReciever, $accVerif){
		$host = $this->host();
		
		//Konten
		$data["sendTo"] 	= $emailReciever;
		$data["subject"] 	= 'Email Verification';
		$data["content"]	=  "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
			<html xmlns='http://www.w3.org/1999/xhtml'>
			<head>
			    <meta name='viewport' content='width=device-width' />
			    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			    <title>FruitTea World</title>
			    <style>
			    /* -------------------------------------
			        GLOBAL
			        A very basic CSS reset
			    ------------------------------------- */
			    * {
			        margin: 0;
			        padding: 0;
			        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			        box-sizing: border-box;
			        font-size: 14px;
			    }

			    img {
			        max-width: 100%;
			    }

			    body {
			        -webkit-font-smoothing: antialiased;
			        -webkit-text-size-adjust: none;
			        width: 100% !important;
			        height: 100%;
			        line-height: 1.6;
			    }

			    /* Let's make sure all tables have defaults */
			    table td {
			        vertical-align: top;
			    }

			    /* -------------------------------------
			        BODY & CONTAINER
			    ------------------------------------- */
			    body {
			        background-color: #f6f6f6;
			    }

			    .body-wrap {
			        background-color: #f6f6f6;
			        width: 100%;
			    }

			    .container {
			        display: block !important;
			        max-width: 600px !important;
			        margin: 0 auto !important;
			        /* makes it centered */
			        clear: both !important;
			    }

			    .content {
			        max-width: 600px;
			        margin: 0 auto;
			        display: block;
			        padding: 20px;
			    }

			    /* -------------------------------------
			        HEADER, FOOTER, MAIN
			    ------------------------------------- */
			    .main {
			        background: #fff;
			        border: 1px solid #e9e9e9;
			        border-radius: 3px;
			    }

			    .content-wrap {
			        padding: 20px;
			    }

			    .content-block {
			        padding: 0 0 20px;
			    }

			    .header {
			        width: 100%;
			        margin-bottom: 20px;
			    }

			    .footer {
			        width: 100%;
			        clear: both;
			        color: #999;
			        padding: 20px;
			    }
			    .footer a {
			        color: #999;
			    }
			    .footer p, .footer a, .footer unsubscribe, .footer td {
			        font-size: 12px;
			    }

			    /* -------------------------------------
			        TYPOGRAPHY
			    ------------------------------------- */
			    h1, h2, h3 {
			        font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
			        color: #000;
			        margin: 40px 0 0;
			        line-height: 1.2;
			        font-weight: 400;
			    }

			    h1 {
			        font-size: 32px;
			        font-weight: 500;
			    }

			    h2 {
			        font-size: 24px;
			    }

			    h3 {
			        font-size: 18px;
			    }

			    h4 {
			        font-size: 14px;
			        font-weight: 600;
			    }

			    p, ul, ol {
			        margin-bottom: 10px;
			        font-weight: normal;
			    }
			    p li, ul li, ol li {
			        margin-left: 5px;
			        list-style-position: inside;
			    }

			    /* -------------------------------------
			        LINKS & BUTTONS
			    ------------------------------------- */
			    a {
			        color: #1ab394;
			        text-decoration: underline;
			    }

			    .btn-primary {
			        text-decoration: none;
			        color: #525050;
			        background-color: #fbd505;
			        border: solid #fbd505;
			        border-width: 5px 10px;
			        line-height: 2;
			        font-weight: bold;
			        text-align: center;
			        cursor: pointer;
			        display: inline-block;
			        border-radius: 5px;
			        text-transform: capitalize;
			    }

			    /* -------------------------------------
			        OTHER STYLES THAT MIGHT BE USEFUL
			    ------------------------------------- */
			    .last {
			        margin-bottom: 0;
			    }

			    .first {
			        margin-top: 0;
			    }

			    .aligncenter {
			        text-align: center;
			    }

			    .alignright {
			        text-align: right;
			    }

			    .alignleft {
			        text-align: left;
			    }

			    .clear {
			        clear: both;
			    }

			    /* -------------------------------------
			        ALERTS
			        Change the class depending on warning email, good email or bad email
			    ------------------------------------- */
			    .alert {
			        font-size: 16px;
			        color: #fff;
			        font-weight: 500;
			        padding: 20px;
			        text-align: center;
			        border-radius: 3px 3px 0 0;
			    }
			    .alert a {
			        color: #fff;
			        text-decoration: none;
			        font-weight: 500;
			        font-size: 16px;
			    }
			    .alert.alert-warning {
			        background: #f8ac59;
			    }
			    .alert.alert-bad {
			        background: #ed5565;
			    }
			    .alert.alert-good {
			        background: #1ab394;
			    }

			    /* -------------------------------------
			        INVOICE
			        Styles for the billing table
			    ------------------------------------- */
			    .invoice {
			        margin: 40px auto;
			        text-align: left;
			        width: 80%;
			    }
			    .invoice td {
			        padding: 5px 0;
			    }
			    .invoice .invoice-items {
			        width: 100%;
			    }
			    .invoice .invoice-items td {
			        border-top: #eee 1px solid;
			    }
			    .invoice .invoice-items .total td {
			        border-top: 2px solid #333;
			        border-bottom: 2px solid #333;
			        font-weight: 700;
			    }

			    /* -------------------------------------
			        RESPONSIVE AND MOBILE FRIENDLY STYLES
			    ------------------------------------- */
			    @media only screen and (max-width: 640px) {
			        h1, h2, h3, h4 {
			            font-weight: 600 !important;
			            margin: 20px 0 5px !important;
			        }

			        h1 {
			            font-size: 22px !important;
			        }

			        h2 {
			            font-size: 18px !important;
			        }

			        h3 {
			            font-size: 16px !important;
			        }

			        .container {
			            width: 100% !important;
			        }

			        .content, .content-wrap {
			            padding: 10px !important;
			        }

			        .invoice {
			            width: 100% !important;
			        }
			    }
			    </style>
			</head>

			<body>

			<table class='body-wrap'>
			    <tr>
			        <td></td>
			        <td class='container' width='600'>
			            <div class='content'>
			                <table class='main' width='100%' cellpadding='0' cellspacing='0'>
			                    <tr>
			                        <td class='content-wrap'>
			                            <table  cellpadding='0' cellspacing='0'>
			                                <tr>
			                                    <td>
			                                        <img class='img-responsive' src='http://wirverify.com/fruittea-world/assets/img/header_email/emailconfirmation-header.png'/>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block'>
													<h3>Hi Sobat Fruit Tea!! </h3>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block'>
			                                        Kamu sudah terdaftar pada aplikasi Fruit Tea World, 
													<br />
													Mohon verifikasi email kamu untuk menikmati semua fitur pada aplikasi Fruit Tea World nya ya...
													<br /><br />
													Thank You
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block aligncenter'>
													<a href='$host/verifyemail/$accVerif' class='btn-primary'>Klik disini untuk verifikasi</a>
												</td>
			                                </tr>
			                              </table>
			                        </td>
			                    </tr>
			                </table>
			                <div class='footer'>
			                    <table width='100%'>
			                        <tr>
										<!--
			                            <td class='aligncenter content-block'><a href='http://minarapp.com'>www.minarapp.com</a> &copy; 2018 | All Rights Reserved.</td>
			                            <td class='aligncenter content-block'>Jl. Panjang No.70, RT.6/RW.11, Kb. Jeruk, Jakarta Barat, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</td>
										-->
									</tr>
			                    </table>
			                </div></div>
			        </td>
			        <td></td>
			    </tr>
			</table>

			</body>
			</html>";
			return $this->sendEmail($data);
		}

	function verifyEmailAddress($verificationCode){
		$result = "update tu_status set status_c_id= '1', account_verif = '' WHERE account_verif =?";
		$this->db->query($result, array($verificationCode));
		return $this->db->affected_rows();
	}

	function verifyPassword($verificationCode, $password, $id){
		$this->db->where("status_u_id", $id);
		$update_password = $this->db->update("tu_user", ["passwd"	=> $password]);
		
		$result = "update tu_status set reset_passwd_verif = '' WHERE reset_passwd_verif =?";
		$this->db->query($result, array($verificationCode));
		return $this->db->affected_rows();
	}
			
	function sendEmail($data){
		$this->load->library('PHPMailerAutoload');
		$mail = new PHPMailer();
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->Host = $this->config->item('email_host');
		$mail->Port = $this->config->item('email_port');
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Username = $this->config->item('email_username');
		$mail->Password = $this->config->item('email_password');
		$mail->WordWrap = 50;
		// set email content
		$mail->setFrom($this->config->item('email_alias'), $this->config->item('email_from'));
		// Set email format to HTML
		$mail->isHTML(true);
		
		$mail->addAddress($data['sendTo']);
		//Konten
		$mail->Subject = $data['subject'];
		$mail->Body = $data['content'];
		
		return $mail->send();
	}

	
	function sendSponsorConfirmation($data_proposal){
		$name_receiver 	= $data_proposal["name"];
		$school_receiver	= $data_proposal["school_name"];
		$data["sendTo"] 	= $data_proposal["email"];
		$data["subject"] 	= 'Fruit Tea Sponsorship';
		$data["content"]	=  "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<meta name='viewport' content='width=device-width' />
			<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			<title>FruitTea World</title>
			<style>
			/* -------------------------------------
				GLOBAL
				A very basic CSS reset
			------------------------------------- */
			* {
				margin: 0;
				padding: 0;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				box-sizing: border-box;
				font-size: 14px;
			}

			img {
				max-width: 100%;
			}

			body {
				-webkit-font-smoothing: antialiased;
				-webkit-text-size-adjust: none;
				width: 100% !important;
				height: 100%;
				line-height: 1.6;
			}

			/* Let's make sure all tables have defaults */
			table td {
				vertical-align: top;
			}

			/* -------------------------------------
				BODY & CONTAINER
			------------------------------------- */
			body {
				background-color: #f6f6f6;
			}

			.body-wrap {
				background-color: #f6f6f6;
				width: 100%;
			}

			.container {
				display: block !important;
				max-width: 600px !important;
				margin: 0 auto !important;
				/* makes it centered */
				clear: both !important;
			}

			.content {
				max-width: 600px;
				margin: 0 auto;
				display: block;
				padding: 20px;
			}

			/* -------------------------------------
				HEADER, FOOTER, MAIN
			------------------------------------- */
			.main {
				background: #fff;
				border: 1px solid #e9e9e9;
				border-radius: 3px;
			}

			.content-wrap {
				padding: 20px;
			}

			.content-block {
				padding: 0 0 20px;
			}

			.header {
				width: 100%;
				margin-bottom: 20px;
			}

			.footer {
				width: 100%;
				clear: both;
				color: #999;
				padding: 20px;
			}
			.footer a {
				color: #999;
			}
			.footer p, .footer a, .footer unsubscribe, .footer td {
				font-size: 12px;
			}

			/* -------------------------------------
				TYPOGRAPHY
			------------------------------------- */
			h1, h2, h3 {
				font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
				color: #000;
				margin: 40px 0 0;
				line-height: 1.2;
				font-weight: 400;
			}

			h1 {
				font-size: 32px;
				font-weight: 500;
			}

			h2 {
				font-size: 24px;
			}

			h3 {
				font-size: 18px;
			}

			h4 {
				font-size: 14px;
				font-weight: 600;
			}

			p, ul, ol {
				margin-bottom: 10px;
				font-weight: normal;
			}
			p li, ul li, ol li {
				margin-left: 5px;
				list-style-position: inside;
			}

			/* -------------------------------------
				LINKS & BUTTONS
			------------------------------------- */
			a {
				color: #1ab394;
				text-decoration: underline;
			}

			.btn-primary {
				text-decoration: none;
				color: #525050;
				background-color: #fbd505;
				border: solid #fbd505;
				border-width: 5px 10px;
				line-height: 2;
				font-weight: bold;
				text-align: center;
				cursor: pointer;
				display: inline-block;
				border-radius: 5px;
				text-transform: capitalize;
			}

			/* -------------------------------------
				OTHER STYLES THAT MIGHT BE USEFUL
			------------------------------------- */
			.last {
				margin-bottom: 0;
			}

			.first {
				margin-top: 0;
			}

			.aligncenter {
				text-align: center;
			}

			.alignright {
				text-align: right;
			}

			.alignleft {
				text-align: left;
			}

			.clear {
				clear: both;
			}

			/* -------------------------------------
				ALERTS
				Change the class depending on warning email, good email or bad email
			------------------------------------- */
			.alert {
				font-size: 16px;
				color: #fff;
				font-weight: 500;
				padding: 20px;
				text-align: center;
				border-radius: 3px 3px 0 0;
			}
			.alert a {
				color: #fff;
				text-decoration: none;
				font-weight: 500;
				font-size: 16px;
			}
			.alert.alert-warning {
				background: #f8ac59;
			}
			.alert.alert-bad {
				background: #ed5565;
			}
			.alert.alert-good {
				background: #1ab394;
			}

			/* -------------------------------------
				INVOICE
				Styles for the billing table
			------------------------------------- */
			.invoice {
				margin: 40px auto;
				text-align: left;
				width: 80%;
			}
			.invoice td {
				padding: 5px 0;
			}
			.invoice .invoice-items {
				width: 100%;
			}
			.invoice .invoice-items td {
				border-top: #eee 1px solid;
			}
			.invoice .invoice-items .total td {
				border-top: 2px solid #333;
				border-bottom: 2px solid #333;
				font-weight: 700;
			}

			/* -------------------------------------
				RESPONSIVE AND MOBILE FRIENDLY STYLES
			------------------------------------- */
			@media only screen and (max-width: 640px) {
				h1, h2, h3, h4 {
					font-weight: 600 !important;
					margin: 20px 0 5px !important;
				}

				h1 {
					font-size: 22px !important;
				}

				h2 {
					font-size: 18px !important;
				}

				h3 {
					font-size: 16px !important;
				}

				.container {
					width: 100% !important;
				}

				.content, .content-wrap {
					padding: 10px !important;
				}

				.invoice {
					width: 100% !important;
				}
			}
			</style>
		</head>

		<body>

		<table class='body-wrap'>
			<tr>
				<td></td>
				<td class='container' width='600'>
					<div class='content'>
						<table class='main' width='100%' cellpadding='0' cellspacing='0'>
							<tr>
								<td class='content-wrap'>
									<table  cellpadding='0' cellspacing='0'>
										<tr>
											<td>
												<img class='img-responsive' src='http://wirverify.com/fruittea-world/assets/img/header_email/emailsponsorship-header.png'/>
											</td>
										</tr>
										<tr>
											<td class='content-block'>
												<h3>HI Sobat Fruit tea!!</h3>
											</td>
										</tr>
										<tr>
											<td class='content-block'>
												Terima Kasih banyak, atas proposal yang sudah kamu ajukan kepada kita melalui aplikasi Fruit tea World. <br /><br />
												Kami akan mereview proposalnya terlebih dahulu dan segera akan dikontak oleh tim event kami dalam beberapa hari. <br /><br />
												Semoga kita bisa bekerja sama ya!! <br /><br />
												Thank You
												<br /><br /><br /><br />
												Regards <br /><br />
												Fruit Tea World
											</td>
										</tr>
										<tr>
											<td class='content-block aligncenter'>
											</td>
										</tr>
									  </table>
								</td>
							</tr>
						</table>
						<div class='footer'>
							<table width='100%'>
								<tr>
									<!--
									<td class='aligncenter content-block'><a href='http://minarapp.com'>www.minarapp.com</a> &copy; 2018 | All Rights Reserved.</td>
									<td class='aligncenter content-block'>Jl. Panjang No.70, RT.6/RW.11, Kb. Jeruk, Jakarta Barat, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</td>
									-->
								</tr>
							</table>
						</div></div>
				</td>
				<td></td>
			</tr>
		</table>

		</body>
		</html>";
		
		return $this->sendEmail($data);
	}
	
	function sendPasswordReset($emailReciever, $resetPassCode){
		$host = $this->host();
		date_default_timezone_set('Asia/Jakarta');
		$tgl 	=  date('d M Y');
		$jam	= date('H:i:s');
		
		$data["sendTo"] 	= $emailReciever;
		$data["subject"] 	= 'Lupa Password';
		$data["content"]	=	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
			<html xmlns='http://www.w3.org/1999/xhtml'>
			<head>
			    <meta name='viewport' content='width=device-width' />
			    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			    <title>Indosat Messi Challenge</title>
			    <style>
			    /* -------------------------------------
			        GLOBAL
			        A very basic CSS reset
			    ------------------------------------- */
			    * {
			        margin: 0;
			        padding: 0;
			        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			        box-sizing: border-box;
			        font-size: 14px;
			    }

			    img {
			        max-width: 100%;
			    }

			    body {
			        -webkit-font-smoothing: antialiased;
			        -webkit-text-size-adjust: none;
			        width: 100% !important;
			        height: 100%;
			        line-height: 1.6;
			    }

			    /* Let's make sure all tables have defaults */
			    table td {
			        vertical-align: top;
			    }

			    /* -------------------------------------
			        BODY & CONTAINER
			    ------------------------------------- */
			    body {
			        background-color: #f6f6f6;
			    }

			    .body-wrap {
			        background-color: #f6f6f6;
			        width: 100%;
			    }

			    .container {
			        display: block !important;
			        max-width: 600px !important;
			        margin: 0 auto !important;
			        /* makes it centered */
			        clear: both !important;
			    }

			    .content {
			        max-width: 600px;
			        margin: 0 auto;
			        display: block;
			        padding: 20px;
			    }

			    /* -------------------------------------
			        HEADER, FOOTER, MAIN
			    ------------------------------------- */
			    .main {
			        background: #fff;
			        border: 1px solid #e9e9e9;
			        border-radius: 3px;
			    }

			    .content-wrap {
			        padding: 20px;
			    }

			    .content-block {
			        padding: 0 0 20px;
			    }

			    .header {
			        width: 100%;
			        margin-bottom: 20px;
			    }

			    .footer {
			        width: 100%;
			        clear: both;
			        color: #999;
			        padding: 20px;
			    }
			    .footer a {
			        color: #999;
			    }
			    .footer p, .footer a, .footer unsubscribe, .footer td {
			        font-size: 12px;
			    }

			    /* -------------------------------------
			        TYPOGRAPHY
			    ------------------------------------- */
			    h1, h2, h3 {
			        font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
			        color: #000;
			        margin: 40px 0 0;
			        line-height: 1.2;
			        font-weight: 400;
			    }

			    h1 {
			        font-size: 32px;
			        font-weight: 500;
			    }

			    h2 {
			        font-size: 24px;
			    }

			    h3 {
			        font-size: 18px;
			    }

			    h4 {
			        font-size: 14px;
			        font-weight: 600;
			    }

			    p, ul, ol {
			        margin-bottom: 10px;
			        font-weight: normal;
			    }
			    p li, ul li, ol li {
			        margin-left: 5px;
			        list-style-position: inside;
			    }

			    /* -------------------------------------
			        LINKS & BUTTONS
			    ------------------------------------- */
			    a {
			        color: #1ab394;
			        text-decoration: underline;
			    }

			    .btn-primary {
			        text-decoration: none;
			        color: #525050;
			        background-color: #fbd505;
			        border: solid #fbd505;
			        border-width: 5px 10px;
			        line-height: 2;
			        font-weight: bold;
			        text-align: center;
			        cursor: pointer;
			        display: inline-block;
			        border-radius: 5px;
			        text-transform: capitalize;
			    }

			    /* -------------------------------------
			        OTHER STYLES THAT MIGHT BE USEFUL
			    ------------------------------------- */
			    .last {
			        margin-bottom: 0;
			    }

			    .first {
			        margin-top: 0;
			    }

			    .aligncenter {
			        text-align: center;
			    }

			    .alignright {
			        text-align: right;
			    }

			    .alignleft {
			        text-align: left;
			    }

			    .clear {
			        clear: both;
			    }

			    /* -------------------------------------
			        ALERTS
			        Change the class depending on warning email, good email or bad email
			    ------------------------------------- */
			    .alert {
			        font-size: 16px;
			        color: #fff;
			        font-weight: 500;
			        padding: 20px;
			        text-align: center;
			        border-radius: 3px 3px 0 0;
			    }
			    .alert a {
			        color: #fff;
			        text-decoration: none;
			        font-weight: 500;
			        font-size: 16px;
			    }
			    .alert.alert-warning {
			        background: #f8ac59;
			    }
			    .alert.alert-bad {
			        background: #ed5565;
			    }
			    .alert.alert-good {
			        background: #1ab394;
			    }

			    /* -------------------------------------
			        INVOICE
			        Styles for the billing table
			    ------------------------------------- */
			    .invoice {
			        margin: 40px auto;
			        text-align: left;
			        width: 80%;
			    }
			    .invoice td {
			        padding: 5px 0;
			    }
			    .invoice .invoice-items {
			        width: 100%;
			    }
			    .invoice .invoice-items td {
			        border-top: #eee 1px solid;
			    }
			    .invoice .invoice-items .total td {
			        border-top: 2px solid #333;
			        border-bottom: 2px solid #333;
			        font-weight: 700;
			    }

			    /* -------------------------------------
			        RESPONSIVE AND MOBILE FRIENDLY STYLES
			    ------------------------------------- */
			    @media only screen and (max-width: 640px) {
			        h1, h2, h3, h4 {
			            font-weight: 600 !important;
			            margin: 20px 0 5px !important;
			        }

			        h1 {
			            font-size: 22px !important;
			        }

			        h2 {
			            font-size: 18px !important;
			        }

			        h3 {
			            font-size: 16px !important;
			        }

			        .container {
			            width: 100% !important;
			        }

			        .content, .content-wrap {
			            padding: 10px !important;
			        }

			        .invoice {
			            width: 100% !important;
			        }
			    }
			    </style>
			</head>

			<body>

			<table class='body-wrap'>
			    <tr>
			        <td></td>
			        <td class='container' width='600'>
			            <div class='content'>
			                <table class='main' width='100%' cellpadding='0' cellspacing='0'>
			                    <tr>
			                        <td class='content-wrap'>
			                            <table  cellpadding='0' cellspacing='0'>
			                                <tr>
			                                    <td>
			                                        <img class='img-responsive' src='http://wirverify.com/fruittea-world/assets/img/header_email/forgetpasswd-header.png'/>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block'>
			                                        
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block'>
			                                        Harap Reset kata sandi kamu. <br /><br />
													Kamu telah mereset kata sandi dan email telah dikirim untuk mereset kata sandi kamu.
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block aligncenter'>
			                                        <a href='$host/resetPassword/$resetPassCode' class='btn-primary'>Klik disini untuk Reset kata sandi</a>
			                                    </td>
			                                </tr>
			                              </table>
			                        </td>
			                    </tr>
			                </table>
			                <div class='footer'>
			                    <table width='100%'>
			                        <tr>
			                            <!--
			                            <td class='aligncenter content-block'><a href='http://minarapp.com'>www.minarapp.com</a> &copy; 2018 | All Rights Reserved.</td>
			                            <td class='aligncenter content-block'>Jl. Panjang No.70, RT.6/RW.11, Kb. Jeruk, Jakarta Barat, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</td>
										-->
			                        </tr>
			                    </table>
			                </div></div>
			        </td>
			        <td></td>
			    </tr>
			</table>

			</body>
			</html>";
			
		return $this->sendEmail($data);
	}
	
	function sendSponsorNotifToAdmin($data_pengirim){
		$link 	= $this->link();
		$date 	=  date("D, d M y H:i:s");
		$emailReciever = $this->config->item('email_admin');
		
		$nama_pengirim 	= $data_pengirim["name"];
		$hp 						= $data_pengirim["hp"];
		$email 					= $data_pengirim["email"];
		$school_name 	= $data_pengirim["school_name"];
		$address 			= $data_pengirim["address"];
		$description 		= $data_pengirim["description"];
		$attachment 		= $data_pengirim["attachment"];
		
		$data["sendTo"] 	= $emailReciever;
		$data["subject"] 	= 'Sponsorship Fruit Tea World Apps';
		$data["content"]	=	"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<meta name='viewport' content='width=device-width' />
			<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			<title>FruitTea World</title>
			<style>
			/* -------------------------------------
				GLOBAL
				A very basic CSS reset
			------------------------------------- */
			* {
				margin: 0;
				padding: 0;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				box-sizing: border-box;
				font-size: 14px;
			}

			img {
				max-width: 100%;
			}

			body {
				-webkit-font-smoothing: antialiased;
				-webkit-text-size-adjust: none;
				width: 100% !important;
				height: 100%;
				line-height: 1.6;
			}

			/* Let's make sure all tables have defaults */
			table td {
				vertical-align: top;
			}

			/* -------------------------------------
				BODY & CONTAINER
			------------------------------------- */
			body {
				background-color: #f6f6f6;
			}

			.body-wrap {
				background-color: #f6f6f6;
				width: 100%;
			}

			.container {
				display: block !important;
				max-width: 600px !important;
				margin: 0 auto !important;
				/* makes it centered */
				clear: both !important;
			}

			.content {
				max-width: 600px;
				margin: 0 auto;
				display: block;
				padding: 20px;
			}

			/* -------------------------------------
				HEADER, FOOTER, MAIN
			------------------------------------- */
			.main {
				background: #fff;
				border: 1px solid #e9e9e9;
				border-radius: 3px;
			}

			.content-wrap {
				padding: 20px;
			}

			.content-block {
				padding: 0 0 20px;
			}

			.header {
				width: 100%;
				margin-bottom: 20px;
			}

			.footer {
				width: 100%;
				clear: both;
				color: #999;
				padding: 20px;
			}
			.footer a {
				color: #999;
			}
			.footer p, .footer a, .footer unsubscribe, .footer td {
				font-size: 12px;
			}

			/* -------------------------------------
				TYPOGRAPHY
			------------------------------------- */
			h1, h2, h3 {
				font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
				color: #000;
				margin: 40px 0 0;
				line-height: 1.2;
				font-weight: 400;
			}

			h1 {
				font-size: 32px;
				font-weight: 500;
			}

			h2 {
				font-size: 24px;
			}

			h3 {
				font-size: 18px;
			}

			h4 {
				font-size: 14px;
				font-weight: 600;
			}

			p, ul, ol {
				margin-bottom: 10px;
				font-weight: normal;
			}
			p li, ul li, ol li {
				margin-left: 5px;
				list-style-position: inside;
			}

			/* -------------------------------------
				LINKS & BUTTONS
			------------------------------------- */
			a {
				color: #1ab394;
				text-decoration: underline;
			}

			.btn-primary {
				text-decoration: none;
				color: #525050;
				background-color: #fbd505;
				border: solid #fbd505;
				border-width: 5px 10px;
				line-height: 2;
				font-weight: bold;
				text-align: center;
				cursor: pointer;
				display: inline-block;
				border-radius: 5px;
				text-transform: capitalize;
			}

			/* -------------------------------------
				OTHER STYLES THAT MIGHT BE USEFUL
			------------------------------------- */
			.last {
				margin-bottom: 0;
			}

			.first {
				margin-top: 0;
			}

			.aligncenter {
				text-align: center;
			}

			.alignright {
				text-align: right;
			}

			.alignleft {
				text-align: left;
			}

			.clear {
				clear: both;
			}

			/* -------------------------------------
				RESPONSIVE AND MOBILE FRIENDLY STYLES
			------------------------------------- */
			@media only screen and (max-width: 640px) {
				h1, h2, h3, h4 {
					font-weight: 600 !important;
					margin: 20px 0 5px !important;
				}

				h1 {
					font-size: 22px !important;
				}

				h2 {
					font-size: 18px !important;
				}

				h3 {
					font-size: 16px !important;
				}

				.container {
					width: 100% !important;
				}

				.content, .content-wrap {
					padding: 10px !important;
				}

				.invoice {
					width: 100% !important;
				}
			}
			</style>
		</head>

		<body>

		<table class='body-wrap'>
			<tr>
				<td></td>
				<td class='container' width='600'>
					<div class='content'>
						<table class='main' width='100%' cellpadding='0' cellspacing='0'>
							<tr>
								<td class='content-wrap'>
									<table  cellpadding='0' cellspacing='0'>
										<tr>
											<td>
												<img class='img-responsive' src='http://wirverify.com/fruittea-world/assets/img/header_email/emailsponsorship-header.png'/>
											</td>
										</tr>
										<tr>
											<tr>
			                                    <td class='content-block'>
			                                        <h3>Selamat Pagi!! </h3>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td class='content-block'>
			                                        Halo terlampir proposal dari $nama_pengirim, sedang mengajukan proposal sponsorship kepada Brand Fruit Tea sosro, yang dikirim melalui aplikasi fruit tea world. <br /><br />
													Mohon untuk bisa di review dan di periksa, semoga acara nya bisa sesuai dengan brand. <br /><br />
													Dan  bisa menghubungi ke $hp maksimal 2 x 24 jam untuk bisa memberikan info bahwa proposal sudah di terima dan sedang proses review. <br /><br />
													Demikian yang bisa kami sampaikan. <br /><br />
													Thank you 
													<br /><br /><br /><br />
													Regards <br /><br />
													Fruit Tea World   
			                                    </td>
			                                </tr>
										</tr>
										<tr>
											<td class='content-block aligncenter'>
											</td>
										</tr>
									  </table>
								</td>
							</tr>
						</table>
						<div class='footer'>
							<table width='100%'>
								<tr>
									<!--
									<td class='aligncenter content-block'><a href='http://minarapp.com'>www.minarapp.com</a> &copy; 2018 | All Rights Reserved.</td>
									<td class='aligncenter content-block'>Jl. Panjang No.70, RT.6/RW.11, Kb. Jeruk, Jakarta Barat, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</td>
									-->
								</tr>
							</table>
						</div></div>
				</td>
				<td></td>
			</tr>
		</table>

		</body>
		</html>";
			
		return $this->sendEmail($data);
	}

}
?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
	use Firebase\JWT\JWT;

    class C_submit extends MY_Controller {
		
		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->helper(array('form', 'url'));
			$this->load->database();
			$this->cekToken();
			$this->load->model("transaction/M_player");
		}

		public function backupData_post(){
			// form validation
			$params   = $_REQUEST;
			//$this->form_validation->set_rules("device_number", "No Device", "required|numeric");
			//$params["device_number"] = "123";

			echo json_encode($params["device_number"]);
			die();
						
			//MAKE FOLDER
				if (!file_exists('./assets/file/backup/')) {
					mkdir('./assets/file/backup/', 0777, true);
				}
				$file_name = date("Ymd") . "-" . $params["device_number"] . ".json";
				
				
				$config['file_name']		= $file_name;
				$config['upload_path']		= "./assets/file/backup/";
				$config['allowed_types']	= '*';
				$config['max_size']			= 1000;
		
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload("file_upload")){
					$message		= [
						"message"				=> [],
					];
					$error = array('error' => $this->upload->display_errors());
					//Respond Gagal Upload
					$respond["status"] 			= FALSE;
					$respond["header"]			= REST_Controller::HTTP_BAD_REQUEST;
					$respond["message_system"]	= "failed upload";
					$respond["data"]			= $error;
					
					$this->displayToJSON($respond);

					echo json_encode( array('error' => $this->upload->display_errors()));
				} else {
					//echo json_encode(array('upload_data' => $this->upload->data()));

					//Simpan Data Json Ke Database
					$string = file_get_contents(base_url("assets/file/backup/" . $file_name));
					$jsonRS = json_decode ($string,true);
					
					for($i=0;$i<count($jsonRS["pemain"]);$i++){
						$insert[$i] = [
										"device_number"		=> $params["device_number"],
										"name_player"		=> $jsonRS["pemain"][$i]["nama"],
										"no_hp"				=> "-",
										"email"				=> $jsonRS["pemain"][$i]["email"],
										"skor"				=> $jsonRS["pemain"][$i]["skor"],
										"submit_time"		=> $jsonRS["pemain"][$i]["Tanggal"]
									];
						
						$submit_data = $this->M_player->insert($insert[$i]);
					}
					$message		= [
						"message"				=> [],
					];

					if($submit_data) {
						//Respond Sukses
						$respond["status"] 			= TRUE;
						$respond["header"]			= REST_Controller::HTTP_OK;
						$respond["message_system"]	= "successfully submit json data";
						$respond["data"]			= $message;
						
						$this->displayToJSON($respond);
					} else {
						//Respond Sukses
						$respond["status"] 			= FALSE;
						$respond["header"]			= REST_Controller::HTTP_BAD_REQUEST;
						$respond["message_system"]	= "failed submit json data";
						$respond["data"]			= $message;
						
						$this->displayToJSON($respond);
					}

				}
			}
    }
?>
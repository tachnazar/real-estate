<?php
class User {

  public static function getbyid($id) {
		$api_result = System::callAPI(System::API_CODE['USER'], 'user_getbyid', array(
			'user_id' => $id
		), false);
		if($api_result->response_status) {
			return $api_result->response_data[0];
		} else {
			return null;
		}
  }

  public static function getlist() {
		$api_result = System::callAPI(System::API_CODE['USER'], 'user_getall', null, false);
		if($api_result->response_status) {
			return $api_result->response_data;
		} else {
			return array();
		}
  }

  public static function getlist_allstate() {
		$api_result = System::callAPI(System::API_CODE['USER'], 'user_getallstate', null, false);
		if($api_result->response_status) {
			return $api_result->response_data;
		} else {
			return array();
		}
	}

	public static function getuserbyid($id) {
		$user_list = self::getlist();
    for($i = 0 ; $i < count($user_list) ; $i++) {
      if($id == $user_list[$i]->user_id) {
        return $user_list[$i];
      }
    }
    return null;
	}

  public static function getbyusername($username) {
		$user_list = self::getlist();
    for($i = 0 ; $i < count($user_list) ; $i++) {
      if($username == $user_list[$i]->username) {
        return $user_list[$i];
      }
    }
    return null;
	}
	
	public static function is_login() {
		$is_login = System::is_login();
		$user_data = self::get_current_user();
		$is_login = ($is_login && !is_null($user_data) && $user_data->status == 'Active');
		if(! $is_login) self::logout();
		return $is_login;
	}

	public static function get_current_user($update = false) {
		$user_data = System::get_current_user();
		if((System::is_login() && is_null($user_data)) || $update) {
			$user_id = System::get_current_user_id();
			$user_data = self::getbyid($user_id);
			if(! is_null($user_data)) {
				System::login($user_data);
			}
		}
		return $user_data;
	}

	public static function get_current_user_id() {
		return System::get_current_user_id();
	}
  
  public static function register($username, $password, $data, $role = 'User', $login = true) {
		 $register_result = System::callAPIOrigin(System::API_CODE['USER'], 'register', array(
				'username' => $username,
				'password' => $password,
				'role' => $role,
				$data,
				$login
			), false);
			if($register_result->response_status) {
				$user_id = $register_result->response_data[0]->user_id;
				$edit_result = self::edit($user_id, $data, $login);
				if($edit_result->response_status) {
					if($login) {
						System::login($edit_result->response_data);
					}
				}
		}
		return $register_result;
	}

  public static function login($username, $password) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'login', array(
      'username' => $username,
      'password' => $password
		), false);

		if($api_result->response_status) {
			System::login($api_result->response_data[0]);
		}

		return $api_result;
	}

  public static function login_facebook($facebook_id) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'login_facebook', array(
      'facebook_id' => $facebook_id
    ), false);

		if($api_result->response_status) {
			System::login($api_result->response_data[0]);
		}

		return $api_result;
	}

	public static function logout() {
		System::logout();
	}

	public static function edit($id, $data, $login = true) {
		$data['user_id'] = $id;
		$user = self::getbyid($id);

		$changed = false;
		foreach ($data as $key => $value) {
			if($user->$key != $data[$key]) {
				$changed = true;
				break;
			}
		}

		if($changed) {
			$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'edit', $data, false);
		
			if($api_result->response_status && self::is_login() & $login) {
				System::login($api_result->response_data[0]);
			}
		} else {
			$api_result = new StdClass();
			$api_result->response_status = true;
			$api_result->response_data = $user;
		}

		return $api_result;
	}

	public static function ban($id) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'userban', array(
      'user_id' => $id
		), false);
		
		return $api_result;
	}

	public static function unban($id) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'userunban', array(
      'user_id' => $id
		), false);
		
		return $api_result;
	}
	
	public static function delete($id) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'permanentdelete', array(
      'user_id' => $id
		), false);
		
		return $api_result;
	}

	public static function edit_password($id, $newpassword, $oldpassword) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'editpassword', array(
      'user_id' => $id,
      'oldpassword' => $oldpassword,
      'newpassword' => $newpassword
		), false);
		
		return $api_result;
	}

	public static function reset_password($id, $password, $token) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'resetpassword_editpassword', array(
      'user_id' => $id,
      'oldpassword' => $token,
      'newpassword' => $password
		), false);
		
		return $api_result;
	}
	
	public static function send_reset_email($email) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'resetpassword_sendmail', array(
			'email' => $email
		), false);

		return $api_result;
	}

	public static function link_facebook($id, $facebook_id, $login = true) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'link_facebook', array(
			'user_id' => $id,
			'facebook_id'=> $facebook_id
		));

		if($api_result->response_status && self::is_login() & $login) {
			System::login($api_result->response_data[0]);
		}
		return $api_result;
	}

	public static function unlink_facebook($id, $login = true) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'unlink_facebook', array(
			'user_id' => $id
		));

		if($api_result->response_status && self::is_login() & $login) {
			System::login($api_result->response_data[0]);
		}
		return $api_result;
	}

	public static function check_username($username) {
		$api_result = System::callAPIOrigin(System::API_CODE['USER'], 'check_username', array(
			'username' => $username
		), false);
		if($api_result->response_status) {
			return ! $api_result->response_data->exist;
		} else {
			return false;
		}
	}

	public static function check_permission ($allowed = array() , $redirect_url = '', $attribute = 'role') {
		$user = self::get_current_user();
		if($user) {
      if(is_array($allowed)) {
        if(! in_array($user->$attribute, $allowed)) {
          System::notification('Permission Denied.', 'error');
          System::redirect($redirect_url);
        }
      } else {
        if($user->$attribute != $allowed) {
          System::notification('Permission Denied.', 'error');
          System::redirect($redirect_url);
        }
      }
		} else {
			System::redirect($redirect_url);
		}
	}
}
?>
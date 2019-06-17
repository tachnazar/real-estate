<?php
class System {

	// api config
	const API_URL = 'http://wolvescorporation.com/playground/api/json/main.php';
	const API_KEY = '5e5e2d70ba499acab8b31b3d2b0371aa';
	const API_CODE = array(
		'USER' => 'ezdei'
	);
	const TEMTEM_CODE = '';

	const HOST_NAME = 'wolvescorporation.com';	// for email
  	const SITE_TITLE = 'Nayoo';
	const SESSION_CODE = 'Nayoo';

	const reCaptcha = '';
	const FACEBOOK_APP_ID = '';
	const FACEBOOK_APP_VERSION = 'v2.5';
	const ADD_THIS_KEY = '';
	const GOOGLE_MAP_KEY = 'AIzaSyAzQ6gejRgr-AE1G42Ph52H94Du--8dGJQ';
	
	const DEFAULT_LANGUAGE = 'th';
	const NULL = 'SYSTEM_NULL_VALUE';
	const DEFAULT_TIME = '0000-00-00 00:00:00';

	const DEFAULT_FONT = 'Prompt';
	const FONTS = array(
		'JaromThai' => 'assets/fonts/font-jarom.css',
		'CSChatThai' => 'assets/fonts/font-chatthai.css',
		'Prompt' => 'assets/fonts/font-prompt.css',
		'DBAdmanX' => 'assets/fonts/font-dbadmanx.css'
	);

	const USE_COOKIE_LOGIN = true;
	const ENABLE_DEBUG = false;

	private static $lang_dict = array();
	private static $debug_pool = array();
	private static $api_trace = array();

	public static function include_file ($file_path, $once = false) {
		$currentPath = dirname(__FILE__);
		if($once) {
			include_once $currentPath.'/../'.$file_path;
		} else {
			include $currentPath.'/../'.$file_path;
		}
	}

	public static function require_file ($file_path, $once = false) {
		$currentPath = dirname(__FILE__);
		if($once) {
			require_once $currentPath.'/../'.$file_path;
		} else {
			require $currentPath.'/../'.$file_path;
		}
	}

	public static function build_post_fields( $data, $existingKeys = '', &$returnArray = []) {
		if(($data instanceof CURLFile) or !(is_array($data) or is_object($data))){
			$returnArray[$existingKeys]=$data;
			return $returnArray;
		} else {
			foreach ($data as $key => $item) {
				self::build_post_fields($item,$existingKeys?$existingKeys."[$key]":$key,$returnArray);
			}
			return $returnArray;
		}
	}

	public static function temtem($code, $tablename, $action, $data = array(), $debug = false) {
		$data['table'] = $code.'_'.$tablename;
		return self::callAPIOrigin(self::TEMTEM_CODE, $action, $data, $debug);
	}

	public static function add_image ($code, $imagename, $imagebase64, $debug = false) {
		return self::temtem('', '', 'image_add', array(
			'imagecode' => $code.'_'.$imagename,
			'imagedata' => $imagebase64
		), $debug);
	}

	public static function get_image ($code, $imagename, $debug = false) {
		$result = self::temtem('', '', 'image_get', array(
			'imagecode' => $code.'_'.$imagename
		), $debug);
		if(count($result) > 0) {
			return $result[0]->url;
		}
		return '';
	}

	public static function add_file ($code, $filename, $filedata, $debug = false) {
		return self::temtem('', '', 'file_add', array(
			'filecode' => $code.'_'.$filename,
			'filedata' => $filedata
		), $debug);
	}

	public static function get_file ($code, $filename, $debug = false) {
		return self::temtem('', '', 'file_get', array(
			'filecode' => $code.'_'.$filename
		), $debug);
	}

	public static function temtem_multiple($code, $tablename, $action, $data = array(), $debug = false) {
		$key = $action.'list';
		$action = $action.'_multiple';
		for($i = 0 ; $i < count($data) ; $i++) {
			$data[$i]['table'] = $code.'_'.$tablename;
		}
		return self::callAPIOrigin(self::TEMTEM_CODE, $action, array(
			$key => $data
		), $debug);
	}

  public static function callAPI($code, $action, $data = array(), $debug = false) {
		$ret = self::callAPIOrigin($code, $action, $data, $debug);
		return $ret;
	}

	public static function callAPIOrigin($code, $action, $data = array(), $debug = false) {
		$ch = curl_init();
		$data['code'] = $code;
		$data['apikey'] = self::API_KEY;
		$data['action'] = $action;
		$data['sender_user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		$data['sender_ip_address'] = self::get_client_ip();
		$data['sender_current_url'] = CURRENT_URL;

		curl_setopt($ch, CURLOPT_URL, self::API_URL);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, self::build_post_fields($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); 
		curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
		$raw_output = curl_exec($ch);
		$server_output = json_decode($raw_output);
		$curl_info = curl_getinfo($ch);
		$exec_time = $curl_info['total_time'];
		// echo $code.' '.$action.' '.$exec_time.'<br>';
		curl_close($ch);
		$ch = null;

		// remove unserialize data
		foreach($data as $key => $d) {
			if(is_object($d) && get_class($d) == 'CURLFile') {
				$data[$key] = $d->postname;
			}
		}

		if($debug != false) {
			if($debug === 'js') {
				$raw_output = trim(preg_replace('/\s+/', ' ', $raw_output));
				$raw_output = str_replace('\r\n', ' ', $raw_output);
				array_push(self::$debug_pool, array(
					'data' => $raw_output,
					'url' => self::API_URL.'?'.http_build_query($data),
					'description' => mb_strlen($raw_output, '8bit').' bytes transfer in '.$exec_time.' s'
				));
				self::session('debug_pool', self::$debug_pool);
			} else {
				echo '<pre class="well well-small">';
				echo '<strong>Action: </strong>'.$action;
				echo '<br>';
				echo '<strong>Url: </strong><a href="'.self::API_URL.'?'.http_build_query($data).'" target="_blank">'.self::API_URL.'?'.http_build_query($data).'</a>';
				echo '<br>';
				echo '<strong>Input: </strong>';
				print_r($data);
				echo '<strong>Output: </strong>';
				print_r($server_output);
				echo mb_strlen($raw_output, '8bit').' bytes transfer ';
				echo 'in '.$exec_time.' s';
				echo '<br>';
				echo $raw_output;
				echo '</pre>';
			}
		}

		if(self::ENABLE_DEBUG || self::localhost() || self::session('tester_debug') === true) {
			$backtrace = debug_backtrace();
			foreach($backtrace as $key => $value) {
				if(isset($backtrace[$key]['type'])) {
					unset($backtrace[$key]['type']);
				}
				if(isset($backtrace[$key]['args'])) {
					unset($backtrace[$key]['args']);
				}
				if(isset($backtrace[$key]['object'])) {
					unset($backtrace[$key]['object']);
				}
				if(isset($backtrace[$key]['function'])) {
					unset($backtrace[$key]['function']);
				}
				if(isset($backtrace[$key]['class'])) {
					unset($backtrace[$key]['class']);
				}
			}
			$api_trace = array(
				'code' => $code,
				'action' => $action,
				'exec_time' => $exec_time,
				'backtrace' => $backtrace
			);
			$call_form_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
	
			if($call_form_ajax) {
				echo '<script>';
				echo 'console.log(\'#API CALL WHILE ASYNC PROCESSING\');';
				echo 'console.log('.json_encode($api_trace).');';
				echo '</script>';
			} else {
				array_push(self::$api_trace, $api_trace);
				self::session('api_trace', self::$api_trace);
			}
		}
		return $server_output;
	}

	public static function encode_id($id) {
		return dechex($id + 16);
	}

	public static function decode_id($code) {
		return hexdec($code) - 16;
  }

	public static function session($name, $data = 'SYSTEM_NULL_VALUE') {
		if($data !== 'SYSTEM_NULL_VALUE') {
			$_SESSION[self::SESSION_CODE.'_'.$name] = $data;
		}
		if(isset($_SESSION[self::SESSION_CODE.'_'.$name])) {
			return $_SESSION[self::SESSION_CODE.'_'.$name];
		} else {
			return null;
		}
	}

	public static function remove_session($name) {
		if(self::session($name)) {
			unset($_SESSION[self::SESSION_CODE.'_'.$name]);
		}
	}

	public static function cookie($name, $data = 'SYSTEM_NULL_VALUE', $minute = 525600) {
		$minute = $minute * 60;
		if($data !== self::NULL) {
			$data = json_encode($data);
			setcookie(self::SESSION_CODE.'_'.$name, $data, time() + $minute, "/");
			// accessing cookie immediately after setcookie
			$_COOKIE[self::SESSION_CODE.'_'.$name] = $data;
		}
		if(isset($_COOKIE[self::SESSION_CODE.'_'.$name])) {
			$data = json_decode($_COOKIE[self::SESSION_CODE.'_'.$name]);
			return $data;
		} else {
			return null;
		}
	}

	public static function remove_cookie($name) {
		if(self::cookie($name)) {
			setcookie(self::SESSION_CODE.'_'.$name, null, time() - 3600, "/");
			$_COOKIE[self::SESSION_CODE.'_'.$name] = null;
		}
	}

	public static function login($user_data) {
		if(self::USE_COOKIE_LOGIN) {
			$tmp_user_data = new StdClass();
			$tmp_user_data->user_id = self::encode_id($user_data->user_id);
			$tmp_user_data->status = $user_data->status;
			self::cookie('is_login', true);
			self::cookie('user_data', $tmp_user_data);
			self::session('user_data', $user_data);
		} else {
			self::session('is_login', true);
			self::session('user_data', $user_data);
		}
	}

	public static function is_login() {
		if(self::USE_COOKIE_LOGIN) {
			if(self::cookie('is_login')) {
				return self::cookie('is_login') == true;
			} else {
				return false;
			}
		} else {
			if(self::session('is_login')) {
				return self::session('is_login') == true;
			} else {
				return false;
			}
		}
	}

	public static function get_current_user() {
		if(self::session('user_data')) {
			return self::session('user_data');
		} else {
			return null;
		}
	}

	public static function get_current_user_id() {
		if(self::USE_COOKIE_LOGIN) {
			if(self::cookie('user_data')) {
				$user_data = self::cookie('user_data');
				return self::decode_id($user_data->user_id);
			} else {
				return null;
			}
		} else {
			if(self::session('user_data')) {
				$user_data = self::session('user_data');
				return $user_data->user_id;
			} else {
				return null;
			}
		}
	}

	public static function logout() {
		if(self::USE_COOKIE_LOGIN) {
			self::remove_cookie('is_login');
			self::remove_cookie('user_data');
			self::remove_session('user_data');
		} else {
			self::remove_session('is_login');
			self::remove_session('user_data');
		}
	}

	public static function login_require($redirect_url = '') {
		if(!self::is_login()) {
			if(is_null($redirect_url)) {
				self::repError('Error: Permission denied. (User not login)');
			} else if(trim($redirect_url) != '') {
				self::redirect($redirect_url);
  			exit();
			} else {
				echo 'Error: Permission denied. (User not login)';
				exit();
			}
		}
	}

	public static function asset_path($file_path) {
		if(file_exists($file_path)) {
			$filetime = filemtime($file_path);
			return $file_path.'?t='.$filetime;
		} else {
			return $file_path;
		}
	}

	public static function load_asset($file_path) {
		if(file_exists($file_path)) {
			$type = pathinfo($file_path, PATHINFO_EXTENSION);
		} else {
			$type = '';
		}
		$file_path = self::asset_path($file_path);
		if($type == 'js') {
			echo '<script src="'.$file_path.'"></script>';
		} else if($type == 'css') {
			echo '<link rel="stylesheet" href="'.$file_path.'">';
		} else {
			echo 'Invalid file type. ['.$file_path.']';
		}
	}

	public static function redirect($url = '', $delay = 0) {
		if(! is_null($url)) {
			if(trim($url) == '') {
				$url = CURRENT_URL;
			}
			header("Location: ".$url);
			// echo '<meta http-equiv="refresh" content="'.$delay.'; url='.$url.'" />';
		}
		exit();
	}

	public static function async_redirect($url = '') {
		if(trim($url) == '') {
			echo '<script>';
			echo 'document.body.classList.add("hidden");';
			echo 'window.location.reload();';
			echo '</script>';
		} else {
			echo '<script>';
			echo 'document.body.classList.add("hidden");';
			echo 'window.location.href = "'.$url.'";';
			echo '</script>';
		}
		exit();
	}

	public static function save_success ($message = 'บันทึกข้อมูลสำเร็จ') {
		self::notification($message, 'success');
	}

	public static function save_error ($message = 'เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้') {
		self::notification($message, 'error');
	}

	public static function notification($message = '', $type = 'info') {
		self::session('notification', array(
			'type' => $type,
			'message' => $message
		));
	}

	public static function handle_notification() {
		if(self::session('notification')) {
			$message = str_replace('"', '', self::session('notification')['message']);
			$message = stripslashes($message);
			echo '<script>';
			echo '$(document).ready(function () {';
			echo 'System.notification(\''.self::session('notification')['type'].'\', "'.$message.'");';
			echo '});';
			echo '</script>';
			self::remove_session('notification');
		}
		self::$debug_pool = self::session('debug_pool');
		self::remove_session('debug_pool');
		if(!is_null(self::$debug_pool) && count(self::$debug_pool) > 0) {
			echo '<script>';
			echo '$(document).ready(function () {';
			echo 'console.log(\'#START DEBUG\');';
			foreach(self::$debug_pool as $debug) {
				echo 'console.log(\'URL: '.$debug['url'].'\');';
				echo 'console.log(JSON.parse(\''.$debug['data'].'\'));';
				if(isset($debug['description'])) {
					echo 'console.log(\''.$debug['description'].'\');';
				}
			}
			echo 'console.log(\'#END DEBUG\');';
			echo '});';
			echo '</script>';
		}

		self::$api_trace = self::session('api_trace');
		self::remove_session('api_trace');
		if(!is_null(self::$api_trace) && count(self::$api_trace) > 0) {
			echo '<script>';
			echo '$(document).ready(function () {';
			echo 'console.log(\'#API CALL WHILE PAGE PROCESSING\');';
			echo 'console.log('.json_encode(self::$api_trace).');';
			echo '});';
			echo '</script>';
		}

		if(self::ENABLE_DEBUG || self::localhost() || self::session('tester_debug') === true) {
			$all_include_files = get_included_files();
			$view = array();
			$controller = array();

			foreach($all_include_files as $filepath) {
				if(mb_strpos($filepath, DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR) !== false) {
					array_push($view, $filepath);
				}
				if(mb_strpos($filepath, DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR) !== false) {
					array_push($controller, $filepath);
				}
			}
			$controller = json_encode($controller);
			$view = json_encode($view);

			echo '<script>';
			echo '$(document).ready(function () {';
			echo 'System.global.view = '.$view.';';
			echo 'System.global.controller = '.$controller.';';
			echo '});';
			echo '</script>';
		}
	}

	public static function assignURL($url, $params = array()) {
		$parts = parse_url($url);
		if(isset($parts['query'])) {
			parse_str($parts['query'], $query);
		} else {
			$query = array();
		}
		foreach($params as $key => $value) {
			$query[$key] = $value;
		}
		// build query string
		$query_string = '';
		$isFirst = true;
		foreach($query as $key => $value) {
			if($isFirst) {
				$query_string .= '?'.$key.'='.$value;
				$isFirst = false;
			} else {
				$query_string .= '&'.$key.'='.$value;
			}
		}
		$parts['query'] = $query_string;

		$url = $parts['scheme'].'://'.$parts['host'].$parts['path'].$parts['query'];
		return $url;
	}

	public static function queryStringToInput($url, $ignore = array(), $type = 'hidden') {
		$html = '';
		$parts = parse_url($url);
		if(isset($parts['query'])) {
			parse_str($parts['query'], $query);
		} else {
			$query = array();
		}
		// build form input
		foreach($query as $key => $value) {
			if(! in_array($key, $ignore)) {
				$html .= '<input type="'.$type.'" name="'.$key.'" value="'.$value.'">';
			}
		}
		return $html;
	}

	public static function arrayToInput($data = array(), $type = 'hidden') {
		$html = '';
		// build form input
		foreach($data as $key => $value) {
			$html .= '<input type="'.$type.'" name="'.$key.'" value="'.$value.'">';
		}
		return $html;
	}

	public static function createPagination ($current, $total, $ignore = array(), $param = 'p', $max_button = 3) {
		array_push($ignore, $param);
		$start = 1;
		$end = $total;
		if($total > $max_button + 2) {
			if($current > 3) {
				$start = $current - 1;
				if($current > $total - $max_button) {
					$start = $total - $max_button;
				}
			} else if($current > 2) {
				$start = $current - 2;
			}

			if($start + $max_button < $total) {
				if($current < $max_button + 1) {
					$end = $start + $max_button;
				} else {
					$end = $start + $max_button - 1;
				}
			}
		}
		$html = '';
		echo '<nav><ul class="pagination z-pagination justify-content-end">';
		if($start > 2 && $total > $max_button + 2) {
			echo '<li class="page-item">
				<a class="page-link" href="'.self::assignURL(CURRENT_URL, array($param => 1)).'">
					1
				</a>
			</li>';
			echo '<li class="page-item disabled"><a class="page-link">...</a></li>';
		}

		for($i = $start ; $i <= $end ; $i++) {
			if($current == $i) {
				if($total > $max_button + 2) {
					echo '<li class="page-item active">
					<span class="dropup">
					<button class="dropdown-toggle" type="button" data-toggle="dropdown">'.$i.'</button>
					<div class="dropdown-menu scrollable-menu dropdown-menu-right">';

					if($total > 50) {
						echo '<div class="dropdown-search">
						<form method="GET" action="" name="noconfirm">
							<div class="input-group">
								<input type="number" class="form-control" name="'.$param.'" placeholder="Page Number" value="'.$current.'" min="1" max="'.$total.'" required>
								<div class="input-group-btn">
									<button type="submit" class="btn">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>';
						echo self::queryStringToInput(CURRENT_URL, $ignore);
						echo '</form>
						</div>';
					}

					for($j = 1 ; $j <= $total ; $j++) {
						echo '<a class="dropdown-item" href="'.self::assignURL(CURRENT_URL, array($param => $j)).'">'.$j.'</a>';
					}
					echo '</div></span></li>';
				} else {
					echo '<li class="page-item active"><a class="page-link" href="'.self::assignURL(CURRENT_URL, array($param => $i)).'">'.$i.'</a></li>';
				}
			} else {
				echo '<li class="page-item"><a class="page-link" href="'.self::assignURL(CURRENT_URL, array($param => $i)).'">'.$i.'</a></li>';
			}
		}

		if($end < $total) {
			echo '<li class="page-item disabled"><a class="page-link">...</a></li>';
			echo '<li class="page-item">
				<a class="page-link" href="'.self::assignURL(CURRENT_URL, array($param => $total)).'">
					'.$total.'
				</a>
			</li>';
		}

		echo '</ul></nav>';
		return $html;
	}

	public static function createPaginationAsync ($current, $total, $async_target, $data = array(), $param = 'p') {
		$max_button = 3;
		$start = 1;
		$end = $total;
		if($total > $max_button + 2) {
			if($current > 3) {
				$start = $current - 1;
				if($current > $total - $max_button) {
					$start = $total - $max_button;
				}
			} else if($current > 2) {
				$start = $current - 2;
			}

			if($start + $max_button < $total) {
				if($current < $max_button + 1) {
					$end = $start + $max_button;
				} else {
					$end = $start + $max_button - 1;
				}
			}
		}
		$html = '';
		echo '<nav><ul class="pagination z-pagination pagination-async justify-content-end" data-async-content="'.$async_target.'">';
		if($start > 2 && $total > $max_button + 2) {
			echo '<li class="page-item">
				<a class="page-link aspg-link" data-param="'.$param.'" href="1">1</a>
			</li>';
			echo '<li class="page-item disabled"><a class="page-link">...</a></li>';
		}

		for($i = $start ; $i <= $end ; $i++) {
			if($current == $i) {
				if($total > $max_button + 2) {
					echo '<li class="page-item active">
					<span class="dropup">
					<button class="dropdown-toggle" type="button" data-toggle="dropdown">'.$i.'</button>
					<div class="dropdown-menu scrollable-menu dropdown-menu-right">';

					if($total > 50) {
						echo '<div class="dropdown-search">
						<form class="async-pagination-form" method="POST" action="" data-async-content="'.$async_target.'" data-param="'.$param.'">
							<div class="input-group">
								<input type="number" class="form-control" name="'.$param.'" placeholder="Page Number" value="'.$current.'" min="1" max="'.$total.'" required>
								<div class="input-group-btn">
									<button type="submit" class="btn">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>';
						echo self::arrayToInput($data);
						echo '</form>
						</div>';
					}

					for($j = 1 ; $j <= $total ; $j++) {
						echo '<a class="dropdown-item aspg-link" data-param="'.$param.'" href="'.$j.'">'.$j.'</a>';
					}
					echo '</div></span></li>';
				} else {
					echo '<li class="page-item active"><a class="page-link aspg-link" data-param="'.$param.'" href="'.$i.'">'.$i.'</a></li>';
				}
			} else {
				echo '<li class="page-item"><a class="page-link aspg-link" data-param="'.$param.'" href="'.$i.'">'.$i.'</a></li>';
			}
		}

		if($end < $total) {
			echo '<li class="page-item disabled"><a class="page-link">...</a></li>';
			echo '<li class="page-item">
				<a class="page-link aspg-link" data-param="'.$param.'" href="'.$total.'">'.$total.'</a></li>';
		}

		echo '</ul></nav>';
		return $html;
	}

	public static function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'ปี',
        'm' => 'เดือน',
        'w' => 'สัปดาห์',
        'd' => 'วัน',
        'h' => 'ชั่วโมง',
        'i' => 'นาที',
        's' => 'วินาที',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . 'ที่ผ่านมา' : 'ตอนนี้';
	}

	public static function convertDateTH ($date, $time = false) {
		$thaimonth=array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
		if($time === true) {
			$date = date('Y-m-d H:i:s', strtotime($date));
			list($date, $time) = explode(' ', $date);
			$date = explode('-', $date);
			$time = ' '.$time;
		} else if($time !== false) {
			$date = date('Y-m-d '.$time, strtotime($date));
			list($date, $time) = explode(' ', $date);
			$date = explode('-', $date);
			$time = ' '.$time;
		} else {
			$date = date('Y-m-d', strtotime($date));
			$date = explode('-', $date);
		}

		$day = 1 * $date[2];
		$month = $thaimonth[1 * $date[1]];
		$year = (1 * $date[0]) + 543;

		return $day.' '.$month .' '.$year.$time;
	}
	public static function convertDateTHShort ($date, $time = false) {
		$thaimonth=array('','ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.');
		if($time === true) {
			$date = date('Y-m-d H:i:s', strtotime($date));
			list($date, $time) = explode(' ', $date);
			$date = explode('-', $date);
			$time = ' '.$time;
		} else if($time !== false) {
			$date = date('Y-m-d '.$time, strtotime($date));
			list($date, $time) = explode(' ', $date);
			$date = explode('-', $date);
			$time = ' '.$time;
		} else {
			$date = date('Y-m-d', strtotime($date));
			$date = explode('-', $date);
		}

		$day = 1 * $date[2];
		$month = $thaimonth[1 * $date[1]];
		$year = (1 * $date[0]) + 543;

		return $day.' '.$month .' '.$year.$time;
	}

	public static function month_thai ($month) {
		$thaimonth = array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
		return $thaimonth[$month * 1];
	}

	public static function month_thai_short ($month) {
		$thaimonth = array('','ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.');
		return $thaimonth[$month * 1];
	}

	public static function transformArray($arr, $key = 'id') {
		$ret = array();
		if(! is_null($key)) {
			for($i = 0 ; $i < count($arr) ; $i++) {
				$ret[$arr[$i]->$key] = $arr[$i];
			}
		} else {
			// contert index array to assoc array
			for($i = 0 ; $i < count($arr) ; $i++) {
				$ret[$arr[$i]] = true;
			}
		}
		return $ret;
	}

	public static function display($var, $type = 'php') {
		// $bt = debug_backtrace();
  	// $caller = array_shift($bt);
		if($type == 'js') {
			$var = json_encode($var);
			$var = trim(preg_replace('/\s+/', ' ', $var));
			$var = str_replace('\r\n', ' ', $var);
			array_push(self::$debug_pool, array(
				'data' => $var,
				'url' => CURRENT_URL
			));
			self::session('debug_pool', self::$debug_pool);
		} else {
			echo '<pre>';
			print_r($var);
			echo '</pre>';
		}
	}

	public static function dayofweek_thai ($date) {
		$dayname = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัส', 'ศุกร์', 'เสาร์');
		$n = date('w', strtotime($date));
		return $dayname[$n];
	}

	// language
	public static function set_lang($lang_dict) {
		self::$lang_dict = $lang_dict;
	}

	public static function set_lang_config ($lang) {
		self::session('lang', $lang);
	}

	public static function get_lang_config () {
		$lang = self::session('lang');
		if(is_null($lang)) {
			$lang = self::DEFAULT_LANGUAGE;
		}
		return $lang;
	}

	public static function get_text($key) {
		$lang = self::get_lang_config();
		if(isset(self::$lang_dict[$key][$lang])) {
			return self::$lang_dict[$key][$lang];
		} else {
			return 'Undefined';
		}
	}

	public static function set_font_config ($font) {
		self::cookie('font', $font);
	}

	public static function get_font_config () {
		$font = self::cookie('font');
		if(is_null($font)) {
			$font = self::DEFAULT_FONT;
		} else {
			$font = $font;
		}
		return $font;
	}

	public static function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

	public static function localhost() {
		return ($_SERVER['REMOTE_ADDR']=='localhost' || $_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1');
	}

	public static function debug_control() {
		
		if(self::ENABLE_DEBUG || self::localhost() || self::session('tester_debug') === true) {
			if(isset($_POST['debug_font'])) {
				System::set_font_config($_POST['debug_font']);
				System::redirect();
			}
			$current_font = System::get_font_config();
			echo '<div class="debug-control">';
			echo '<button class="control-btn btn btn-primary">';
			echo '<i class="fa fa-cog"></i>';
			echo '</button>';
			echo '<div class="control-content">';
			echo '<form method="post" action="">';
			echo '<label class="bold">Font</label>';
			echo '<select class="form-control" name="debug_font">';
			foreach (self::FONTS as $font_name => $font_url) {
				if($current_font == $font_name) {
					echo '<option value="'.$font_name.'" selected>'.$font_name.'</option>';
				} else {
					echo '<option value="'.$font_name.'">'.$font_name.'</option>';
				}
			}
			echo '</select>';
			echo '<input name="submit_debug" value="1" type="hidden">';
			echo '<button type="submit" class="btn btn-primary btn-block mt-2">';
			echo '<i class="fa fa-check-circle-o mr-2"></i> Change Font';
			echo '</button>';
			echo '</form>';

			echo '<hr class="my-2">';
			echo '<label class="bold">Async</label>';
			echo '<form method="post" action="" class="async-reload-form bypass-submit">';
			echo '<select class="form-control mt-2 async-id-list" required>';
			echo '</select>';
			echo '<div class="async-reload-data mt-2"></div>';
			echo '<div class="w-100 btn-group">';
			echo '<button type="submit" class="btn btn-info btn-block mt-2">';
			echo '<i class="fa fa-refresh mr-2"></i>Reload';
			echo '</button>';
			echo '<button type="button" class="btn btn-outline-info btn-block mt-2 btn-async-config">';
			echo '<i class="fa fa-cogs mr-2"></i>Save';
			echo '</button>';
			echo '</div>';
			echo '</form>';

			echo '<hr class="my-2">';
			echo '<div>';
			echo '<div class="debug-gif text-center mb-1">';
			echo '</div>';
			echo '<button type="button" class="btn btn-success btn-block" onclick="System.info(\'modal\');">';
			echo '<i class="fa fa-info mr-2"></i> View & Controlller';
			echo '</button>';
			echo '</div>';

			echo '</div></div>';

			echo '<script>';
			echo '$(document).ready(function () {';
			echo 'System.handle_async_file();';
			echo '});';
			echo '</script>';
		}
	}

	public static function sendmail ($send_to, $send_title, $send_message) {
    $data = array(
      'send_form' => 'no_reply@'.self::HOST_NAME,
      'send_to' => $send_to,
      'send_title' => $send_title,
      'send_message' => $send_message,
    );
    $api_result = System::temtem('', '', 'sendmail', $data, false);
    
    return $api_result;
	}
	
	public static function limit_string($string, $length = 50, $tooltip = false) {
		$original_string = $string;
		if(mb_strlen($string) > $length) {
			$string = mb_substr($string, 0, $length).'...';
			if($tooltip) {
				$string = '<span title="'.$original_string.'" data-toggle="tooltip">'.$string.'</span>';
			} else {
				$string = '<span title="'.$original_string.'">'.$string.'</span>';
			}
		}
		return $string;
	}

	public static function compile_email($path, $data = array()) {
		$message = file_get_contents($path);
		foreach ($data as $key => $value) {
			$message = str_replace('{{'.$key.'}}', $value, $message);
		}
		return $message;
	}

	private static $start_exec_time = null;

	public static function repHeader() {
		header('Content-type: application/json; charset=utf-8');
		self::$start_exec_time = microtime(true);
	}

	public static function repSuccess($data) {
		$exec_time = 'repHeader not set.';
		if(! is_null(self::$start_exec_time)) {
			$stop_exec_time = microtime(true);
			$exec_time = ($stop_exec_time - self::$start_exec_time) . ' ms';
		}
		$repData = array(
			'message' => 'Success',
			'status' => true,
			'data' => $data,
			'type' => 'success',
			'execute_time' => $exec_time
		);
		echo json_encode($repData);
		exit();
	}

	public static function repError($message) {
		$exec_time = 'repHeader not set.';
		if(! is_null(self::$start_exec_time)) {
			$stop_exec_time = microtime(true);
			$exec_time = ($stop_exec_time - self::$start_exec_time) . ' ms';
		}
		$repData = array(
			'message' => $message,
			'status' => false,
			'data' => null,
			'type' => 'error',
			'execute_time' => $exec_time
		);
		echo json_encode($repData);
		exit();
	}

	public static function is_image ($file) {
		$info = getimagesize($file["tmp_name"]);
    if($info !== false) {
			return true;
		} else {
			return false;
		}
	}

	public static function build_curl_file($fileobj) {
		$tmp_name = $fileobj['tmp_name'];
		$type = $fileobj['type'];
		$name = basename($fileobj['name']);

		$curl_file = curl_file_create($tmp_name, $type, $name);
		return $curl_file;
	}

	public static function day_diff($start_date, $end_date) {
		$start_date = date_create($start_date);
    $end_date = date_create($end_date);
    $diff = date_diff($start_date, $end_date, false);
		$nDay = $diff->format('%r%a');
		return $nDay;
	}

	public static function strip($str) {
		$str = trim(stripslashes(strip_tags($str)));
		return $str;
	}

	public static function get_token($html = true) {
		$token = md5(uniqid());
		$tokens = self::session('tokens');
		if($tokens == null) {
			self::session('tokens', array($token => 1));
		} else {
			$tokens[$token] = 1;
			self::session('tokens', $tokens);
		}
		if($html) {
			$token = '<input type="hidden" name="form_token" value="'.$token.'">';
		}
		return $token;
	}

	public static function check_token($token) {
		$tokens = self::session('tokens');
		$valid = false;
		if($tokens != null) {
			if(isset($tokens[$token])) {
				unset($tokens[$token]);
				self::session('tokens', $tokens);
				$valid = true;
			}
		}
		return $valid;
	}

	public static function clear_token() {
		self::remove_session('tokens');
	}
}
?>
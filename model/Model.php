<?php
class Model {
  const SCHEMA_EXTENSION = 'json';
  protected $actions = array();
  protected $code = '';
  protected $schema_name = '';
  protected $schema = null;
  protected $debug = false;

  public static function getInstance() {
    static $inst = null;
    if ($inst === null) {
      $inst = new Model();
    }
    return $inst;
  }

  public static function fetch_array($response) {
    $ret = array();
    if(isset($response->response_status) && $response->response_status) {
      $ret = $response->response_data;
    }
    return $ret;
  }

  public static function fetch_object($response) {
    $ret = null;
    if(isset($response->response_status) && $response->response_status) {
      $ret = $response->response_data;
    }
    return $ret;
  }

  public function __construct($schema_name = null, $code = null) {
    if(! is_null($schema_name) && ! is_null($code)) {
      $this->code = $code;
      $this->schema_name = $schema_name;
    }
    
    $file_folder = dirname(__FILE__).DIRECTORY_SEPARATOR.'schema'.DIRECTORY_SEPARATOR;
    $file_path = $file_folder.$this->schema_name.'.'.self::SCHEMA_EXTENSION;

    if(file_exists($file_path)) {
      $file_data = file_get_contents($file_path);
      $this->_compile_schema($file_data);
    } else {
      echo 'Fatal error: '.$file_path.' not found.';
      die();
    }
  }

  public function __call($func, $params = array()) {
    if(in_array($func, $this->actions)) {
      if(isset($params[0])) {
        $params = $params[0];
      }
      return $this->_call_api($func, $params);
    } else {
      echo 'Fatal error: Call to undefinded method. '.$func;
      die();
    }
  }

  public function code() {
    return $this->code;
  }

  public function enable_debug($type = true) {
    return $this->debug = $type;
  }

  public function disable_debug() {
    return $this->debug = false;
  }

  public function action() {
    $ret = array();
    foreach ($this->schema as $action => $schema) {
      $ret[$action] = $schema->description;
    }
    return $ret;
  }

  public function info($action = null) {
    $ret = array();
    if(! is_null($action) && in_array($action, $this->actions)) {
      $ret = $this->schema->$action;
      $ret->action = $action;
      $ret->code = $this->code;
    } else {
      $ret = $this->schema;
    }
    $ret->search_action = $action;
    $ret->schema_name = $this->schema_name;
    return $ret;
  }

  public function info_data($action = null) {
    $ret = '';
    if(! is_null($action) && in_array($action, $this->actions)) {
      $schema = $this->schema->$action;
      $param_arr = array();
      foreach($schema->params as $param) {
        array_push($param_arr, "'".$param->name."' => ''");
      }
      $ret = implode(",<br>", $param_arr);
    }
    echo 'array(<br>'.$ret.'<br>);';
  }

  protected function _compile_schema($json) {
    $this->schema = json_decode($json);
    foreach ($this->schema as $action => $action_schema) {
      array_push($this->actions, $action);
    }
  }

  protected function _call_api($action, $params) {
    // validate params
    $schema_info = $this->info($action);
    $missing_params = array();
    foreach($schema_info->params as $param) {
      if($param->required == true && ! isset($params[$param->name])) {
        array_push($missing_params, $param->name);
      }
    }
    if(count($missing_params) > 0) {
      $ret = new StdClass();
      $ret->response_status = false;
      $ret->response_data = null;
      $ret->response_message = 'Schema Error: ['.$action.'] missing parameter ['.implode($missing_params, ", ").']';
    } else {
      $ret = System::callAPI($this->code, $action, $params, $this->debug);
    }
    return $ret;
  }
}
?>
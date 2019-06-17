<?php
// required SystemZaa.php

// main class
class Boh {
  private $api_action = 'bo';
  protected $api_code = '';
  protected $api_data = null;

  // $boh = new Boh($code);
  public function __construct ($api_code) {
    $this->api_code = $api_code;
    $this->api_data = new Boh_Params();
    return $this;
  }

  public function params() {
    return $this->api_data;
  }

  public function execute($debug = false) {
    $data = array(
      'tasks' => $this->api_data->get()
    );
    $result = System::callAPI($this->api_code, $this->api_action, $data, $debug);
    $boh_result = new Boh_Result($result);
    return $boh_result;
  }
}

// sub class
class Boh_Params {
  private $params = null;

  public function __construct () {
    $this->params = array();
    return $this;
  }

  public function get($index = null) {
    $ret = $this->params;
    if(! is_null($index) && is_integer($index) && $index < count($ret)) {
      $ret = $ret[$index];
    }
    return $ret;
  }

  public function add($code, $action, $params = array(), $return_key = '') {
    $param = array(
      'code' => $code,
      'action' => $action,
      'params' => $params,
      'return_key' => $return_key
    );
    array_push($this->params, $param);
  }

  public function add_schema($schema_info, $params = array(), $return_key = '') {
    if(! isset($schema_info->params)) {
      echo 'Cannot find Action["'.$schema_info->search_action.'"] in Schema["'.$schema_info->schema_name.'"]';
      die();
    }
    // validate params
    $missing_params = array();
    foreach($schema_info->params as $param) {
      if($param->required == true && ! isset($params[$param->name])) {
        array_push($missing_params, $param->name);
      }
    }
    if(count($missing_params) > 0) {
      echo 'Schema Error: ['.$schema_info->schema_name.'] missing parameter ['.implode($missing_params, ", ").']';
      die();
    }

    $param = array(
      'code' => $schema_info->code,
      'action' => $schema_info->action,
      'params' => $params,
      'return_key' => $return_key
    );
    array_push($this->params, $param);
  }

  public function remove_at($index) {
    $tmp_param = array();
    for($i = 0 ; $i < count($this->param) ; $i++) {
      if($i != $index) {
        array_push($tmp_param, $this->params[$i]);
      }
    }
    return $tmp_param;
  }

  public function clear() {
    $this->params = array();
  }
}

class Boh_Result {
  private $result = null;

  public function __construct ($result) {
    $this->result = array();
    if($result->response_status) {
      $this->result = $result->response_data;
    }
  }

  public function get($key, $return_as_array = false) {
    $ret = null;
    if(isset($this->result->$key)) {
      $data = $this->result->$key;
      if($data->response_status) {
        if($return_as_array == true && is_null($data->response_data)) {
          $ret = array();
        } else {
          $ret = $data->response_data;
        }
      } else {
        if($return_as_array == true) {
          $ret = array();
        }
      }
    }
    return $ret;
  }
}
?>
<?php
$data = $_POST['data'];

$ret = array();
foreach($data as $async) {
  array_push($ret, array(
    'id' => $async['id'],
    'time' => filemtime('../'.$async['url'])
  ));
}

echo json_encode($ret);
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getOptionToSelect($class, $columnId, $columnDisplay = "", $valor = "", $token){
  $CI =& get_instance();
  $url = $CI->config->item('base_api') . 'api/'.$class.'/get';

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: ' . $token
  ]);
  $response = curl_exec($curl);
  curl_close($curl);

  $rows = json_decode($response)->data;
  

  $opt = "<option value=''>Selecione</option>";
  foreach ($rows as $key => $obj) {
    $display = "";
    $selected = "";
    foreach ($obj as $chave => $value) {
      $selected .= $chave == $columnId ? $value == $valor ? "selected" : "" : "";
      if(empty($columnDisplay))
        $display .= $value . "|";
      else
        $display .= $chave == $columnDisplay ? $obj->$chave : "";
    }
    $opt .= "<option value='{$obj->$columnId}' {$selected}>$display</option>";
  }
  return $opt;
}
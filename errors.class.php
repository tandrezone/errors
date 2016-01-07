<?php
  class error{
    private $errors;
    /**
     * show gera array de erros a fim de serem mostrados nas views
     * @param  [string] $msg  [Texto a ser apresentado]
     * @param  [string] $type [tipo de erro pode ser: danger, success, warning ou info]
     * @return [Array]       [Array preparado para ser usado pela template engine e para as views  desta package]
     */
    static function show($msg, $type){
      return array("error" => $msg, "type" => $type);
    }
  }
?>

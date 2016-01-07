<?php

  class error{
    private $errors;
    function __construct(){

    }
    static function set($error){
      echo $error;
    }
    public function add($name,$errormsg, $type){
      $erro = new stdClass();
      $erro->name = $name;
      $erro->errormsg = $errormsg;
      $erro->type = $type;
      $this->errors[] = $erro;
    }
    /**
     * [show mostra erros guardados]
     * @return [type] [description]
     */
    static function show($msg, $type){
      return array("error" => $msg, "type" => $type);
    }
  }
?>

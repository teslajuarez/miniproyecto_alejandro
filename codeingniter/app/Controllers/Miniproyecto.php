<?php

namespace App\Controllers;
use  App\Models\DatosModel;
class Miniproyecto extends BaseController{

	public function index(){
	
		$gModel = new DatosModel();
		$mensaje = session('mensaje');
		$datos = $gModel->listarTodo();
		$data =[
			"datos" => $datos,
			"mensaje" => $mensaje
		];
			
		return view('listado', $data);
	}
	
	public function obtenerDatos($id){
	    $gModel =  new DatosModell();
	    $data = ["id" => $id];
	    $respuesta = $gModel->obtenerInformacion($data);
	    
	    $datos = ["datos" => $respuesta];
	    return view('actualizar' ,$datos);
}
public function insertar(){
  $gModel  = new DatosModel();
  $data =[
       "nombre" => $_POST['nombre'],
        "apellido_paterno" => $_POST['apaterno'],
	 "apellido_materno" => $_POST['materno'],
];
      $respuesta = $gModel->insertar($data);
      
      if ($respuesta > 0){
      return redirec()->to(base_url('/index.php'))->with('mensaje','0');
         }else{
      return redirec()->to(base_url('/index.php'))->with('mensaje','1');
      }
    }
    
    
    
    public function actualizar(){
     
      $gModel = new DatosModel();
      $data = [
             "nombre" => $_POST['nombre'],
        "apellido_paterno" => $_POST['apaterno'],
	 "apellido_materno" => $_POST['materno'],
];

    $id = ["id"=> $_POST['id']];
    $respuesta = $gModel->actualizar($data,$id);
    
    
    if ($respuesta){
    return redirec()->to(base_url('/index.php'))->with('mensaje','2');
         }else{
      return redirec()->to(base_url('/index.php'))->with('mensaje','3');
      }
      }
      
      public function eliminar($idPersonal){
      $gModel = new DatosModel();
      $id =["id" => $idpersona];
      $respuesta = $gModel->eliminar($id);
      
      if($respuesta){
       return redirec()->to(base_url('/index.php'))->with('mensaje','2');
         }else{
      return redirec()->to(base_url('/index.php'))->with('mensaje','3');
      }
      
     }
      
  }
      
    



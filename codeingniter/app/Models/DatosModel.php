<?php
namespace App\Models;
  use CodeIgniter\models;

class DatosModel extends Model{ 
   plublic fuction listar(){
  $m = $this ->db ->query("SELECT * from persona");
         return $m->getResult();
  }

}

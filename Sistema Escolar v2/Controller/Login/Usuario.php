<?php

require_once '../../Model/conexion/Conexion.php';

class Usuario

{

    private static $instancia;

    private $con;

    private $id;

    private $nombre;

    private $password;

    private $privilegios_idprivilegios;





    public function __construct()

    {

     $this->con = Conexion::singleton_conexion();

    }



    public function set_user($id,$nombre,$password,$privilegios_idprivilegios){

    $this->ID = $id;

    $this->nombre = $nombre;

  	$this->$password = $passwords;

    $this->privilegios_idprivilegios = $privilegios_idprivilegios;

    }
public function get_user($id = null)

    {

        try

        {

    $sql ="SELECT * FROM users ";



        if($id != null){

        $sql .= " WHERE ID =?";



        }
$consulta = $this->con->prepare($sql);



        if($id != null){

        $consulta->bindParam(1,$id);

        }

    $consulta->execute();

        $this->con = null;



        if($consulta->rowCount() > 0){

         return $consulta;

        }else{

            return false;

        }/*fin else*/

        }catch(PDOExeption $e){

            print "Error:" . $e->getmessage();

        }

  }

 public function login_user($username, $password)

     {

     try{

     $sql = "SELECT * FROM  users WHERE nombre = ? AND password = ? and privilegios_idprivilegios=1";

     $consulta = $this->con->prepare($sql);

     $consulta->bindParam(1, $username);

     $consulta->bindParam(2, $password);
     $consulta->execute();

/*SI EXISTE EL USUARIO*/

if($consulta->rowCount() == 1){

return administradorr;

}elseif($consulta != null){

				$sql = "SELECT * FROM  users WHERE nombre = ? AND password = ? and privilegios_idprivilegios=2";

				$consulta2 = $this->con->prepare($sql);

				$consulta2->bindParam(1, $username);

				$consulta2->bindParam(2, $password);

				$consulta2->execute();

 if($consulta2->rowCount() == 1){

					return profesorr;

				}
          }

     }

     catch(PDOException $e){

     print "Error:" . $e->getMessage();

     }

	 }

}/*cierra clase*/

<?php
//Clases a utilizar en el sitio web.

/**
Conexión a una Base de Datos usando PHP y la Herencia de las Clase MySQLi
 */
class Connection extends MySQLi
{
	public $estado;
	function __construct()
	{
		parent::__construct('localhost','root','','dbwebsite'); //Acceder al constructor de la clase padre MySQLi.
		$this->query("Set Names 'utf8';"); //Configurar que la transacción de datos se haga usando el cotejamiento UTF8.
		$this->connect_errno ? $this->estado = 'Error' : $this->estado = 'Conectado';
		//$this->connect_errno ? die('Error con la conexión') : $estado = 'Conectado';//Ejemplo de uso del Operador Ternario; el cual permite evaluar una condición. Si la condiciónse se cumple, entonces se ejecuta lo que se ponga después del signo de interrogación (?); de lo contrario, se ejecuta lo que se ponga después de los dos puntos (:).
		// = (condición) ? true : false;
		//echo $estado;
		return $this->estado;
		//unset ($estado); //Para eliminar la variable y liberar memoria.
	}


	function cerrar(){
		$this->close(); //Cerrar la conexión.
	}

	public function insertarRegistro($user, $password, $firstname, $secondname, $lastname1, $lastname2, $email) 
	{
        $db = new Connection();
        //Insertar el registro
        $stmt = $db->query("INSERT INTO `registro` (`user`, `password`, `firstname`, `secondname`, `lastname1`, `lastname2`, `email`) 
            VALUES ('$user', '$password', '$firstname', '$secondname', '$lastname1', '$lastname2', '$email')");
        //Validamos si la sentencia se ejecutó.
        if (!$stmt) {
            echo "<br><p class='alert-danger'>El usuario ya existe en nuestra base de datos.<p>".$stmt;
        } else {
           echo "<br><p class='btn-success'>Registro exitoso del usuario ".$user ." [ ".$email." ] Por favor inicie sesión <a href=/WebSite_plantilla/ingresar.php style='color: rgb(0,255,255)'>Ingresar</a><p>";
           
        }
    }
}



//-------------------------------------------------
?>
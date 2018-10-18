<?php
    $page_Title = 'Resultado de Insertar Registro en Tabla Clientes';
    
    
    include('includes/header.php');
    //require ('includes/clases.php'); 
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Registro de Usuarios</h1>
        <?php
            $user = $_POST['user'];
            //$password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $secondname = $_POST['secondname'];
            $lastname1 = $_POST['lastname1'];
            $lastname2 = $_POST['lastname2'];
            $email = $_POST['email'];

            $insertarRegistroBD = new Connection();
            //par escriptar clave
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);         
            $password = $hash;
            //$password = $hash;
            $insertarRegistroBD->insertarRegistro($user, $password, $firstname, $secondname, $lastname1, $lastname2, $email);
        ?>
    </div>
</div>
<?php
    include('includes/footer.php');

<?php
    
    function validar_admin($usuario, $senha){
        if ($usuario == "admin" && $senha == "1234"){
            return true;
        }
        return false;
    }

    function autenticar(){
        session_start();

        //Verifica se a variável de sessão para o admin está configurada.
        //se não estiver, redirecionamos o usuário para a página de Login
        if(!isset($_SESSION["admin"])) {
            header("Location: http://localhost/LaBella/admin/login.php");
        }
    }

?>

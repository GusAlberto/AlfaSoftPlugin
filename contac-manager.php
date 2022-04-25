<?php
/*
Plugin Name: Contact Manager AlfaSoft
Plugin URI: https://www.linkedin.com/in/gustavo-alberto/
Author: Gustavo Alberto
Author URI: https://github.com/GusAlberto
Version: 1.0.0
Description: Exercício para AlfaSoft - Gerenciador de contatos
Text Domain: contact_manager
*/

/*
//Security

defined (   constant_name: "ABSPTH"   ) || exit;

defined (   constant_name: "ABSPTH"   ) || exit; ("Não posso ser executado");

defined (   constant_name: "ABSPTH"   ) or die ("Não posso ser executado");

if(  ! defined(  constant_name: "ABSPATH"  )  ) exit;

//Plugin

class Plugin
{

	public function activate ()
	{
        flush_rewrite_rules();
	}

	public function deactivate()
	{
        flush_rewrite_rules();
	}

}

if (class_exists(class:"Plugin")){

	define("LPT_PLUGIN_FILE", __FILE__);
	
	$plugin = new Plugin();
}

//activation
register_activation_hook( file: LPT_PLUGIN_FILE, array ($plugin, "activate"));

//deactivation
register_deactivation_hook( file: LPT_PLUGIN_FILE, array($plugin, "deactivate"));
*/


function register(){ 
    
    $name = $_POST['name']; 
    $user = $_POST['user'];
    $email = $_POST['email'];
    $product = $_POST['prod'];
    $number = $_POST['number']

    ?>

<?php 

function validarTelefoneCelularEFixo(string $valor): bool {
    
    //processa a string mantendo apenas números no valor de entrada.
    $valor = preg_replace("/[^0-9]/", "", $valor); 
        
    $lenValor = strlen($valor);
    
    //validando a quantidade de caracteres de telefone fixo ou celular.
    if($lenValor != 10 && $lenValor != 11)
        return false;
    
    //DDD e número de telefone não podem começar com zero.
    if($valor[0] == "0" || $valor[2] == "0")
        return false;
    
    return true;
}

# Testes ------------------------------
    
validarTelefoneCelularEFixo("(11) 99110-0000"); //true
validarTelefoneCelularEFixo("11991100000"); //true
validarTelefoneCelularEFixo("(11)3311-0000"); //true
validarTelefoneCelularEFixo("1133110000"); //true
validarTelefoneCelularEFixo("(00) 99000-0000"); //false 

?>

<?php if(isset($_POST['submit'])){ ?>

    <script type="text/javascript">
    <?php echo "successfully registered" ?>;
    </script>   
    <?php } ?>

    <form action="" method="post">
    <label for="">Name</label>
    <input type="text" name="name">
    <preg_match('/^[\w\d]{5,30}$/',$name);></preg_match>

    <label for="">User</label>
    <input type="text" name="user">

    <label for="">Email</label>
    <input type="text" name="email">
    <filter_var($email, FILTER_VALIDATE_EMAIL></filter_var>

    <label for="">Choose an option</label>

    <select name="prod" id="">
        <option value="Register person"> REGISTER PERSON</option>
        <option value="Register contact"> REGISTER CONTACT</option>
    </select>

    <input type="submit" name="submit" value="REGISTER">

    </form>
   <?php
}
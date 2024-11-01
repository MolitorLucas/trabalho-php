<?php
   namespace DAL;

use PDO;

class Conexao{
    private static $dbNome='realoficial'; 
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'user'; 
    private static $dbSenha = '123';  

    private static $cont = null; 

    public function __construct()
    {
        die("A função init não é permitida"); 
    }

    public static function open(){
        if (self::$cont == null){
            try{
               self::$cont = new  \PDO("mysql:host=". self::$dbHost .";dbname=" . self::$dbNome , self::$dbUsuario, self::$dbSenha);
            }
            catch (\PDOException $exception) {
                die ($exception->getMessage());
            }
 
        }
        return self::$cont; 
    }

    public static function close (){
        self::$cont = null; 
    }

}

?>
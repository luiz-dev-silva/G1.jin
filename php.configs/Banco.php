<?php 

class Banco{
    private $linhas;
    private $array_dados;
    public  $banco;
    public  $pdo;

    public function __construct(){
        try{

            $host    = 'localhost';
            $usuario = 'root';
            $senha   = '';
            $db      = 'g1_jin';
            
            $this->banco = $db;
            $this->pdo = new PDO("mysql:dbname=".$db.";host=".$host,$usuario,$senha);
            $this->pdo->exec("set names utf8");
        
        }catch(PDOException $e){
            $e->getMessage();
            echo '<b>Messagem de erro: </b>'.$e;
            exit;
        }
    }

    public function query($sql){

        $query = $this->pdo->query($sql);
        $this->linhas = $query->rowCount();
        $this->array_dados = $query->fetchAll();

    }

    public function linha(){
        return $this->linhas;
    }

    public function result(){
        return $this->array_dados;
    }
    
}

?>
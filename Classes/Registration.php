<?php

session_start();
require_once "Conexao.php";

class Registration
{

    public $value;
    public $categoryExpenseId;
    public $categoryRecipeId;
    
    public function CreateRegistration() {
        try {
            if(isset($_POST["valueDesp"]) && !empty($_POST["valueDesp"])) {

                $this->categoryId = $_POST["D"];
                $this->value = $_POST["valueDesp"];

                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into Registration(id,value,data,User_id,Category_id) values(null,?,?,?,?)");

                $sql->execute(array(
                    $this->value,
                    $_SESSION["userToken"],
                    $this->categoryId
                ));
            }      
          }
        }
}
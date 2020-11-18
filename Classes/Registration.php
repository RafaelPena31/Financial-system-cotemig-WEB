<?php

require_once "Conexao.php";

class Registration
{

    public $value;
    public $categoryExpenseId;
    public $categoryRecipeId;
    public $data;
    
    public function CreateRegistration($type) {
            try {
              if(isset($_POST["valueRegistration"]) && !empty($_POST["valueRegistration"]) && isset($_POST["typeRegistration"]) && !empty($_POST["typeRegistration"]) && isset($_POST["dateRegistration"]) && !empty($_POST["dateRegistration"])) {

                switch ($type) {
                  case 'D':

                    $this->categoryId = intval($_POST["valueRegistration"]);
                    $this->value = doubleval(substr($_POST["valueRegistration"], 2));
                    $this->data = $_POST["dateRegistration"];
    
                    $bd = new Conexao();
                    $con = $bd->conectar();
                    $sql = $con->prepare("insert into Registration(id,value,data,User_id,Category_id) values(null,?,?,?,?)");
    
                    $sql->execute(array(
                        $this->value,
                        $this->data,
                        $_SESSION["userToken"],
                        $this->categoryId
                    ));
                    var_dump($this->categoryId);

                    if($sql->rowCount() > 0) {
                      echo "<script> alert('Despesa registrado com sucesso.'); </script>";
                      header('location: TransactionPage.php');
                    } else {
                      echo "<script> alert('Não foi possível registrar sua despesa.'); </script>";
                    }

                    break;
                  
                  case 'R':

                    $this->categoryId = $_POST["valueRegistration"];
                    $this->value = $_POST["valueRegistration"];
                    $this->data = $_POST["dateRegistration"];
    
                    $bd = new Conexao();
                    $con = $bd->conectar();
                    $sql = $con->prepare("insert into Registration(id,value,data,User_id,Category_id) values(null,?,?,?,?)");
    
                    $sql->execute(array(
                        $this->value,
                        $this->data,
                        $_SESSION["userToken"],
                        $this->categoryId
                    ));

                    if($sql->rowCount() > 0) {
                      echo "<script> alert('Receita registrada com sucesso.'); </script>";
                      header('location: TransactionPage.php');
                    } else {
                      echo "<script> alert('Não foi possível registrar sua receita.'); </script>";
                    }

                    break;
                }


            }      
          } catch(PDOException $msg) {
            echo "<script> alert('Não foi possível criar a sua despesa: {$msg->getMessage()}'); </script>";
          }
        }
}
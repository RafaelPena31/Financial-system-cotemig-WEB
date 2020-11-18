<?php

session_start();
require_once "Conexao.php";

class Category
{

    public $name;
    public $type;
    public $class;

    public function CreateCategory() {
        try {
            if(isset($_POST["nameCategory"]) && !empty($_POST["nameCategory"]) && isset($_POST["typeCategory"]) && !empty($_POST["typeCategory"]) &&
                isset($_POST["classCategory"]) && !empty($_POST["classCategory"])) {

                $this->name = $_POST["nameCategory"];
                $this->type = $_POST["typeCategory"];
                $this->class = $_POST["classCategory"];

                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into Category(id,name,type,class,User_id) values(null,?,?,?,?)");

                $sql->execute(array(
                    $this->name,
                    $this->type,
                    $this->class,
                    $_SESSION["userToken"]
                ));

                if($sql->rowCount() > 0) {
                    echo "<script> alert('Sua categoria foi criada com sucesso!'); </script>";

                } else {
                    echo "<script> alert('Não foi possível criar sua categoria'); </script>";
                }
            }
        } catch (PDOException $msg) {
            echo "<script> alert('Não foi possível criar a categoria {$msg->getMessage()}'); </script>";
        }
    }

    public function ListingCategory($type) {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from Catetgory where type = ? and User_id = ?");
            $sql->execute(array(
                $type,
                $_SESSION['userToken']
            ));
            if($sql->rowCount() > 0) {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }

        } catch (PDOException $msg) {
            echo "<script> alert('Não foi possível listar suas categorias: {$msg->getMessage()}'); </script>";
        }
    }

    public function UpdateCategory(){
        try {
            if (isset($_POST['editar'])){
                $this->id = $_GET["categoryId"];
                $this->name = $_POST["nameCategory"];
                $this->type  = $_POST["typeCategory"];
                $this->class = $_POST["classCategory"];

                $bd = new Conexao();

                $con = $bd->conectar();
                $sql = $con->prepare("update alunos set name = ?,type = ?,class = ? where id = ?");
                $sql->execute(array(
                    $this->name,
                    $this->type,
                    $this->class,
                    $_GET["confirmUpdate"]
                ));
                if ($sql->rowCount() > 0) {
                    header("location: TransactionPage.php");
                }
            } else {
                header("location: TransactionPage.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possível alterar as categorias: " . $msg->getMessage();
        }
    }

    public function DeleteCategory() {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare('delete from Category where id = ?');
            $sql->execute(array(
                $_GET["confirmDelete"]
            ));

            if ($sql->rowCount() > 0) {
                echo '<script type="text/javascript">alert("Categoria deletada com sucesso!");</script>';
                header('location: ../../Profile.php');
            }
        } catch (PDOException $msg) {
            echo "<script> alert('Não foi possível deletar a categoria: {$msg->getMessage()}'); </script>";
        }
    }
}

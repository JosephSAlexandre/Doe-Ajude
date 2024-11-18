<?php
require_once("conexao.php");
if ($_SERVER['REQUEST_METHOD']=='GET') {
    try {   
        // Conectar ao banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Verificar se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);   
        }
    
        // Verificar se o parâmetro 'email' foi passado via GET
        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            //print_r($_GET['email']);
            
            // Consultar o banco de dados para pegar os dados do usuário
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
            $result = $conn->query($sql);
    
            // Verificar se o usuário existe
            if ($result->num_rows > 0) {
                // Exibir os dados do usuário
                $row = $result->fetch_assoc();
                echo "<h1>Informações do Usuário</h1>";
                echo "<p>email: " . $row['email'] . "<p><br>";
                echo "<h2>" . $row['cpf'] ."</h2><br>";
                echo "<h3>" . $row['nomeCompleto'] ."</h3><br>";
                echo "<h4>" . $row['senha'] . "</h4><br>";
            } else {
                throw new Exception("Nenhum usuário encontrado com esse email.");
            }
        } else {
            //throw new Exception("Por favor, informe um email de usuário.");
        }
    
        // Fechar a conexão com o banco de dados
        $conn->close();
    } catch (Exception $e) {
        //throw $e;
        echo json_encode(["Erro!" . $e->getMessage()]);
        //print_r(["Erro!" . $e->getMessage()]);
    } finally {
        $conn = null;
    }
    
 }
?>
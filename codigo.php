<<<<<<< HEAD
<$php
$host = "localhost";
$user = "root";
$password = "";
$bd = "tcc";
$conn = new mysqli($host, $user, $password, $bd);
$resposta = ;
$html = file_get_contents("login.html");

$doc = new DOMDocument();
@$doc->loadHTML($html);

$xpath = new DOMXPath($doc);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['nome_login'])){
        if(empty(trim($_POST['login']))) {
            echo "O campo nome_login é obrigatório.";
            exit;
        }
        else{
        $nome =   htmlspecialchars(trim($_POST['nome_login']));
        if(isset($_POST['senha_login'])){
            if(empty(trim($_POST['senha_login']))) {
                echo "O campo senha_login é obrigatório.";
                exit;
            }
            else{
                $name = $_POST['nome_login'];
                $senha1 = $_POST['senha_login'];
                $sql = "SELECT * FROM login WHERE Login='$nome' AND Senha='$senha'";
                if($name == $nome && $senha1 == $senha){
                    
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                } else {
                    echo "Nome de usuário ou senha incorretos.";
                }
            }
        }
    }
    if(isset($_POST['login_registro'])){
        
    }
}
=======
<$php
$host = "localhost";
$user = "root";
$password = "";
$bd = "tcc";
$conn = new mysqli($host, $user, $password, $bd);
$resposta = ;
$html = file_get_contents("login.html");

$doc = new DOMDocument();
@$doc->loadHTML($html);

$xpath = new DOMXPath($doc);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['nome_login'])){
        if(empty(trim($_POST['login']))) {
            echo "O campo nome_login é obrigatório.";
            exit;
        }
        else{
        $nome =   htmlspecialchars(trim($_POST['nome_login']));
        if(isset($_POST['senha_login'])){
            if(empty(trim($_POST['senha_login']))) {
                echo "O campo senha_login é obrigatório.";
                exit;
            }
            else{
                $name = $_POST['nome_login'];
                $senha1 = $_POST['senha_login'];
                $sql = "SELECT * FROM login WHERE Login='$nome' AND Senha='$senha'";
                if($name == $nome && $senha1 == $senha){
                    
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                } else {
                    echo "Nome de usuário ou senha incorretos.";
                }
            }
        }
    }
    if(isset($_POST['login_registro'])){
        
    }
}
>>>>>>> 121a090765f9de969d74f7dd234d8d0781141d3b

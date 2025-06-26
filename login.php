
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
 




```php
<?php

// Configurações do banco de dados
$host = 'localhost';
$user = 'root'; // usuário padrão do XAMPP
$password = ''; // senha padrão do XAMPP (vazia)
$database = 'Meu banco'; // substitua pelo nome do seu banco de dados

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Criptografia de senha (apenas para exemplo/criação de usuários)
// echo password_hash(123456, PASSWORD_DEFAULT);

// Receber dados do forms
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Acessar o IF quando o usuario clicar no botão de acesso do formulario
if (!empty($dados["Sendlogin"])) {
    // Preparar a consulta SQL
    $query_usuario = "SELECT id, senha FROM usuarios WHERE usuario = ? LIMIT 1";
    $stmt = $conn->prepare($query_usuario);
    $stmt->bind_param("s", $dados["usuario"]);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows == 1) {
        // Usuário encontrado, verificar senha
        $row_usuario = $resultado->fetch_assoc();
        if (md5($dados["senha_usuario"], $row_usuario['senha'])) {
            // Senha correta - iniciar sessão e redirecionar
            session_start();
            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['usuario'] = $dados["usuario"];
            
            header("Location: dashboard.php"); // redireciona para página restrita
            exit();
        } else {
            echo "<p style='color: red'>Erro: Senha incorreta!</p>";
        }
    } else {
        echo "<p style='color: red'>Erro: Usuário não encontrado!</p>";
    }
}

?>
```

```html
<!-- Inicio do formulario -->
<form method="POST" action="">

<label>Usuário: </label>
<input type="text" name="usuario" placeholder="digite o usuário" required><br><br>

<label>Senha: </label>
<input type="password" name="senha_usuario" placeholder="digite a senha" required><br><br>

<input type="submit" name="Sendlogin" value="Acessar">
</form>
<!-- fim do formulario -->
```








<div class="main-container">
        <div class="titlehome">
            <h1>Faça o login na sua conta</h1>
        </div>
        
        <div class="form-container">
            <div class="input-group">
                <label for="email" class="email-label">Email</label>
                <input type="email" id="email" placeholder="Email">
            </div>
            
            <div class="input-group">
                <label for="senha" class="senha-label">Senha</label>
                <div class="password-input">
                    <input type="password" id="senha" placeholder="Senha">
                    <button type="button" class="toggle-password">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                      </svg>
                  </button>
                </div>
            </div>
            
            <button class="login-button">Entrar</button>
            <p class="register-text">Não tem uma conta? <span class="register-link" onclick="redirectToRegister()">Crie agora</span></p>
        </div>
    </div>
</body>
</html>
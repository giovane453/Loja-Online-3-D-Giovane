<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="titlehome">
            <h1>Cadastro</h1>
            
            <p class="subtitle">Crie uma conta</p>
        </div>
        
        <div class="form-container">
            <form id="registerForm">
                <div class="section">
                    <h3 class="section-title">Nome</h3>
                    <div class="input-group">
                        <input type="text" id="nome" placeholder="Nome" required>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">Email</h3>
                    <div class="input-group">
                        <input type="email" id="email" placeholder="Email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">Telefone</h3>
                    <div class="input-group">
                        <input type="tel" id="telefone" placeholder="Tel." required>
                        <span class="error-message" id="phoneError"></span>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">Senha</h3>
                    <div class="input-group">
                        <div class="password-input">
                            <input type="password" id="senha" placeholder="Senha" required>
                            <button type="button" class="toggle-password">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </button>
                        </div>
                        <span class="error-message" id="passwordError"></span>
                    </div>
                </div>
                
                <button type="submit" class="login-button">Cadastre-se</button>
            </form>
            
            <div class="divider"></div>
            
            <div class="login-text">
                Já tem uma conta? <a href="#" id="loginLink" class="login-link">Faça login</a>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>
</html>
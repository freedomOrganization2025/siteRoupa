<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knox Fit - Login</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body>
    <div class="background-layer"></div>
    
    <div class="login-box">
        <form class="auth-form">
            <div class="brand-header">
                <img src="{{asset('images/lg.png')}}" class="brand-logo">
                <h2>Knox Fit | Entrar</h2>
            </div>
            
            <div class="input-group">
                <div class="input-field">
                    <ion-icon name="person-outline" class="input-icon"></ion-icon>
                    <input type="email" id="email" required>
                    <label for="email">E-mail</label>
                </div>
                
                <div class="input-field">
                    <ion-icon name="lock-closed-outline" class="input-icon"></ion-icon>
                    <input type="password" id="password" required>
                    <label for="password">Senha</label>
                    <button type="button" class="toggle-password">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                </div>
            </div>
            
            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox">
                    <span>Manter conectado</span>
                </label>
                <a href="#" class="forgot-password">Esqueci minha senha</a>
            </div>
            
            <button type="submit" class="auth-button">
                <span>Acessar minha conta</span>
                <ion-icon name="arrow-forward"></ion-icon>
            </button>
            
            <div class="auth-divider">
                <span>ou continue com</span>
            </div>
            
            <div class="social-auth">
                <button type="button" class="social-button">
                    <ion-icon name="logo-google"></ion-icon>
                </button>
                <button type="button" class="social-button">
                    <ion-icon name="logo-apple"></ion-icon>
                </button>
                <button type="button" class="social-button">
                    <ion-icon name="logo-facebook"></ion-icon>
                </button>
            </div>
            
            <div class="auth-footer">
                Não tem conta? <a href="{{route('registro')}}">Crie uma agora</a>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</body>
</html>
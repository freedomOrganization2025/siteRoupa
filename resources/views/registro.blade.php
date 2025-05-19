<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knox Fit - Registrar</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/registro.css', 'resources/js/registro.js'])
</head>
<body>
    <div class="background-layer"></div>
    
    <div class="login-box">
        <form class="auth-form" method="POST" action="{{ route('registroDB') }}">
            @csrf
            <div class="brand-header">
                <img src="{{asset('images/lg.png')}}" class="brand-logo">
                <h2>Knox Fit | Registrar</h2>
            </div>
            
            <div class="input-group">
                <div class="input-field">
                    <ion-icon name="person-outline" class="input-icon"></ion-icon>
                    <input type="text" id="name" name='name' required>
                    <label for="name">Nome completo</label>
                </div>
                
                <div class="input-field">
                    <ion-icon name="mail-outline" class="input-icon"></ion-icon>
                    <input type="email" id="email" name='email'required>
                    <label for="email">E-mail</label>
                </div>
                
                <div class="input-field">
                    <ion-icon name="lock-closed-outline" class="input-icon"></ion-icon>
                    <input type="password" id="password" name='password' required>
                    <label for="password">Senha</label>
                    <button type="button" class="toggle-password">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                </div>
                
                <div class="input-field">
                    <ion-icon name="lock-closed-outline" class="input-icon"></ion-icon>
                    <input type="password" id="confirm-password" name='password_confirmation' required>
                    <label for="confirm-password">Confirmar senha</label>
                    <button type="button" class="toggle-password">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                </div>
            </div>
            
            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" required>
                    <span>Aceito os termos de serviço e política de privacidade</span>
                </label>
            </div>
            
            <button type="submit" class="auth-button">
                <span>Criar minha conta</span>
                <ion-icon name="arrow-forward"></ion-icon>
            </button>
            
            <div class="auth-divider">
                <span>ou cadastre-se com</span>
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
                Já tem uma conta? <a href="login.html">Faça login</a>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</body>
</html>
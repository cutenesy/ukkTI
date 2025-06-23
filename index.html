<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Akademik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --error: #e63946;
            --success: #28a745;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            color: var(--primary);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-header p {
            color: var(--gray);
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .password-field {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 42px;
            cursor: pointer;
            color: var(--gray);
            font-size: 18px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .message {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .error {
            background-color: #ffebee;
            color: var(--error);
            border: 1px solid #ffcdd2;
            display: block;
        }

        .success {
            background-color: #e8f5e9;
            color: var(--success);
            border: 1px solid #c8e6c9;
            display: block;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            color: var(--gray);
            font-size: 14px;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
                margin: 0 15px;
            }
            
            .login-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1><i class="fas fa-user-graduate"></i> Sistem Akademik</h1>
            <p>Silakan masuk untuk mengakses sistem</p>
        </div>
        
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-field">
                    <input type="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember">
                <label for="remember">Ingat saya</label>
            </div>
            
            <button type="submit" class="btn">
                <i class="fas fa-sign-in-alt"></i> Masuk
            </button>
            
            <div id="message" class="message"></div>
        </form>
        
        <div class="login-footer">
            <p>&copy; 2025 Sistem Akademik. Annisa Aulia Saputra.</p>
        </div>
    </div>

    <script>
        // Fungsi untuk toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.toggle-password');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
        
        // Fungsi untuk menangani login
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const rememberMe = document.getElementById('remember').checked;
            const messageEl = document.getElementById('message');
            
            // Validasi input
            if (!username || !password) {
                showMessage('Username dan password harus diisi', 'error');
                return;
            }
            
            // Kredensial default (bisa diganti dengan validasi dari database)
            const validCredentials = [
                { username: 'admin', password: 'admin123', role: 'admin' },
                { username: 'dosen', password: 'dosen123', role: 'dosen' },
                { username: 'mahasiswa', password: 'mahasiswa123', role: 'user' }
            ];
            
            const user = validCredentials.find(cred => 
                cred.username === username && cred.password === password
            );
            
            if (user) {
                // Login sukses
                showMessage('Login berhasil! Mengarahkan ke dashboard...', 'success');
                
                // Simpan data sesi
                const sessionData = {
                    username: user.username,
                    role: user.role,
                    loggedInAt: new Date().toISOString()
                };
                
                if (rememberMe) {
                    localStorage.setItem('auth', JSON.stringify(sessionData));
                } else {
                    sessionStorage.setItem('auth', JSON.stringify(sessionData));
                }
                
                // Set flag login
                localStorage.setItem('isLoggedIn', 'true');
                
                // Redirect ke halaman dashboard setelah 1 detik
                setTimeout(() => {
                    window.location.href = 'mahasiswa.html';
                }, 1000);
            } else {
                // Login gagal
                showMessage('Username atau password salah', 'error');
            }
        });
        
        // Fungsi untuk menampilkan pesan
        function showMessage(message, type) {
            const messageEl = document.getElementById('message');
            messageEl.textContent = message;
            messageEl.className = `message ${type}`;
        }
        
        // Cek jika ada parameter logout pada URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('logout') === 'success') {
            showMessage('Anda telah logout dari sistem', 'success');
        }
    </script>
</body>
</html>

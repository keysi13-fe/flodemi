<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Flodemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        .main-container {
            height: 100vh;
            display: flex;
        }

        /* ===== LEFT PANEL (Banner Ungu) ===== */
        .left-panel {
            flex: 1;
            position: relative;
            background-color: #9333ea; /* Warna ungu dasar */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Simulasi Gelombang/Mesh Gradient seperti di Gambar */
        .left-panel::after {
            content: "";
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(0, 0, 0, 0.1) 0%, transparent 50%);
            z-index: 1;
        }

        /* Grid Garis Tipis di Pojok */
        .grid-pattern {
            position: absolute;
            top: 0; right: 0;
            width: 200px; height: 200px;
            background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: 1;
        }

        .welcome-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .welcome-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .welcome-content p {
            font-size: 1.2rem;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        /* ===== RIGHT PANEL (Form) ===== */
        .right-panel {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            text-align: center;
        }

        /* Logo Flodemi Bulat */
        .logo-wrapper {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .logo-wrapper img {
            width: 60px;
        }

        /* Form Card Styling */
        .form-container {
            border: 1.5px solid #f3e8ff;
            border-radius: 24px;
            padding: 2.5rem 2rem;
            background: white;
        }

        .form-label {
            display: block;
            text-align: left;
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 0.4rem;
            color: #1f2937;
        }

        /* Input abu-abu tanpa border sesuai gambar */
        .custom-input {
            background-color: #e5e7eb !important;
            border: none !important;
            border-radius: 10px !important;
            padding: 0.75rem 1rem !important;
            font-size: 0.85rem !important;
            margin-bottom: 1.5rem;
        }

        .custom-input::placeholder {
            color: #9ca3af;
        }

        .password-note {
            text-align: left;
            font-size: 0.65rem;
            color: #9ca3af;
            margin-top: -1rem;
            margin-bottom: 1.5rem;
        }

        /* Tombol Ungu */
        .btn-masuk {
            background-color: #a855f7;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 0.8rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .btn-masuk:hover {
            background-color: #9333ea;
            box-shadow: 0 4px 12px rgba(168, 85, 247, 0.4);
        }

        .footer-text {
            font-size: 0.65rem;
            color: #9ca3af;
            margin-top: 1.5rem;
        }

        .footer-text span {
            color: #a855f7;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .left-panel { display: none; }
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="left-panel">
            <div class="grid-pattern"></div>
            <div class="welcome-content">
                <h1>Selamat Datang</h1>
                <p>Silakan masuk ke akun Anda!</p>
            </div>
        </div>

        <div class="right-panel">
            <div class="login-box">
                
                <div class="logo-wrapper">
                    <img src="https://via.placeholder.com/60?text=F" alt="Logo">
                </div>

                <div class="form-container">
                    <form method="POST" action="/login">
                        @csrf
                        
                        <div class="mb-3 text-start">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control custom-input" placeholder="Masukkan email..." required>
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label">Password</label>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control custom-input" placeholder="Masukkan password..." required>
                                <span style="position: absolute; right: 15px; top: 12px; color: #9ca3af; cursor: pointer;">👁️</span>
                            </div>
                            <p class="password-note">Harus memiliki minimal 8 karakter</p>
                        </div>

                        <button type="submit" class="btn btn-masuk">Masuk</button>
                    </form>
                </div>

                <p class="footer-text">
                    Dengan masuk, Anda menyetujui <span>Syarat</span> dan <span>Kebijakan Privasi</span> kami
                </p>
            </div>
        </div>
    </div>

</body>
</html>
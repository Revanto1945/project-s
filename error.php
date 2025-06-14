<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ödeme Hatası!</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .background-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(239, 68, 68, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(239, 68, 68, 0.08) 0%, transparent 50%);
            z-index: -1;
        }

        .error-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 60px 40px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2) inset;
            max-width: 500px;
            width: 90%;
            animation: slideUp 0.6s ease-out;
        }

        .error-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 15px 40px rgba(239, 68, 68, 0.3);
            animation: shake 0.8s ease-out 0.3s both;
        }

        .error-icon i {
            font-size: 48px;
            color: white;
        }

        .error-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            background: linear-gradient(135deg, #2d3748, #4a5568);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .error-message {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .error-details {
            background: rgba(239, 68, 68, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 30px;
        }

        .error-reasons {
            text-align: left;
            margin-bottom: 20px;
        }

        .error-reasons h4 {
            color: #4a5568;
            margin-bottom: 12px;
            font-size: 1rem;
        }

        .error-reasons ul {
            list-style: none;
            padding: 0;
        }

        .error-reasons li {
            padding: 8px 0;
            color: #718096;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .error-reasons li i {
            color: #ef4444;
            font-size: 0.9rem;
        }

        .action-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 24px;
            text-decoration: none;
            border-radius: 16px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6aff95, #4ade80);
            color: white;
            box-shadow: 0 10px 30px rgba(106, 255, 149, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(106, 255, 149, 0.4);
            text-decoration: none;
            color: white;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: #4a5568;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            text-decoration: none;
            color: #4a5568;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-10px);
            }
            20%, 40%, 60%, 80% {
                transform: translateX(10px);
            }
        }

        @media (max-width: 768px) {
            .error-container {
                padding: 40px 24px;
                margin: 20px;
            }
            
            .error-title {
                font-size: 2rem;
            }
            
            .error-icon {
                width: 100px;
                height: 100px;
            }
            
            .error-icon i {
                font-size: 40px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="background-pattern"></div>
    
    <div class="error-container">
        <div class="error-icon">
            <i class="fas fa-times"></i>
        </div>
        
        <h1 class="error-title">Ödeme Hatası!</h1>
        
        <p class="error-message">
            Ödeme işleminiz sırasında bir sorun oluştu. Lütfen bilgilerinizi kontrol ederek tekrar deneyiniz.
        </p>
        
        <div class="error-details">
            <div class="error-reasons">
                <h4>Olası Nedenler:</h4>
                <ul>
                    <li><i class="fas fa-exclamation-circle"></i> Kart bilgilerinde hata</li>
                    <li><i class="fas fa-exclamation-circle"></i> Yetersiz bakiye</li>
                    <li><i class="fas fa-exclamation-circle"></i> Banka tarafından red</li>
                    <li><i class="fas fa-exclamation-circle"></i> Geçici sistem hatası</li>
                </ul>
            </div>
        </div>
        
        <div class="action-buttons">
            <a href="index.php" class="btn btn-primary">
                <i class="fas fa-redo"></i>
                Tekrar Dene
            </a>
            <button onclick="history.back()" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i>
                Geri Dön
            </button>
        </div>
    </div>
</body>
</html>
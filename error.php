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
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
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
                radial-gradient(circle at 25% 25%, rgba(148, 163, 184, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(148, 163, 184, 0.03) 0%, transparent 50%);
            z-index: -1;
        }

        .error-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.05),
                0 0 0 1px rgba(255, 255, 255, 0.9) inset;
            max-width: 500px;
            width: 90%;
            animation: slideUp 0.6s ease-out;
        }

        .error-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 25px rgba(239, 68, 68, 0.2);
            animation: shake 0.8s ease-out 0.3s both;
        }

        .error-icon i {
            font-size: 40px;
            color: white;
        }

        .error-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .error-message {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .error-details {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .error-reasons {
            text-align: left;
            margin-bottom: 15px;
        }

        .error-reasons h4 {
            color: #475569;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .error-reasons ul {
            list-style: none;
            padding: 0;
        }

        .error-reasons li {
            padding: 6px 0;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
        }

        .error-reasons li i {
            color: #ef4444;
            font-size: 0.8rem;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(16, 185, 129, 0.3);
            text-decoration: none;
            color: white;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.5);
            color: #475569;
            border: 1px solid rgba(148, 163, 184, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.7);
            transform: translateY(-1px);
            text-decoration: none;
            color: #475569;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
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
                transform: translateX(-8px);
            }
            20%, 40%, 60%, 80% {
                transform: translateX(8px);
            }
        }

        @media (max-width: 768px) {
            .error-container {
                padding: 35px 25px;
                margin: 20px;
            }
            
            .error-title {
                font-size: 1.5rem;
            }
            
            .error-icon {
                width: 80px;
                height: 80px;
            }
            
            .error-icon i {
                font-size: 32px;
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
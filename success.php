<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ödeme Başarılı!</title>
    
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
                radial-gradient(circle at 25% 25%, rgba(106, 255, 149, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(106, 255, 149, 0.08) 0%, transparent 50%);
            z-index: -1;
        }

        .success-container {
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

        .success-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #6aff95, #4ade80);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 15px 40px rgba(106, 255, 149, 0.3);
            animation: bounce 0.8s ease-out 0.3s both;
        }

        .success-icon i {
            font-size: 48px;
            color: white;
        }

        .success-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            background: linear-gradient(135deg, #2d3748, #4a5568);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .success-message {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .success-details {
            background: rgba(106, 255, 149, 0.05);
            border: 1px solid rgba(106, 255, 149, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 30px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 500;
            color: #4a5568;
        }

        .detail-value {
            font-weight: 600;
            color: #2d3748;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 32px;
            background: linear-gradient(135deg, #6aff95, #4ade80);
            color: white;
            text-decoration: none;
            border-radius: 16px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(106, 255, 149, 0.3);
        }

        .back-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(106, 255, 149, 0.4);
            text-decoration: none;
            color: white;
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

        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0,0,0);
            }
            40%, 43% {
                transform: translate3d(0, -30px, 0);
            }
            70% {
                transform: translate3d(0, -15px, 0);
            }
            90% {
                transform: translate3d(0, -4px, 0);
            }
        }

        @media (max-width: 768px) {
            .success-container {
                padding: 40px 24px;
                margin: 20px;
            }
            
            .success-title {
                font-size: 2rem;
            }
            
            .success-icon {
                width: 100px;
                height: 100px;
            }
            
            .success-icon i {
                font-size: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="background-pattern"></div>
    
    <div class="success-container">
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h1 class="success-title">Ödeme Başarılı!</h1>
        
        <p class="success-message">
            Ödemeniz başarıyla tamamlandı. İşleminiz güvenli bir şekilde gerçekleştirildi ve kısa süre içinde hesabınıza yansıyacaktır.
        </p>
        
        <div class="success-details">
            <div class="detail-item">
                <span class="detail-label">İşlem Durumu</span>
                <span class="detail-value" style="color: #6aff95;">✓ Tamamlandı</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">İşlem Tarihi</span>
                <span class="detail-value"><?php echo date('d.m.Y H:i'); ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Güvenlik</span>
                <span class="detail-value">SSL Korumalı</span>
            </div>
        </div>
        
        <a href="index.php" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Ana Sayfaya Dön
        </a>
    </div>
</body>
</html>
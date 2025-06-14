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

        .success-container {
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
            max-width: 450px;
            width: 90%;
            animation: slideUp 0.6s ease-out;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #10b981, #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.2);
            animation: bounce 0.8s ease-out 0.3s both;
        }

        .success-icon i {
            font-size: 40px;
            color: white;
        }

        .success-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .success-message {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .success-details {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            border-bottom: 1px solid rgba(148, 163, 184, 0.1);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 500;
            color: #475569;
            font-size: 0.9rem;
        }

        .detail-value {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.9rem;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 28px;
            background: linear-gradient(135deg, #475569, #334155);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(71, 85, 105, 0.2);
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(71, 85, 105, 0.3);
            text-decoration: none;
            color: white;
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

        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0,0,0);
            }
            40%, 43% {
                transform: translate3d(0, -20px, 0);
            }
            70% {
                transform: translate3d(0, -10px, 0);
            }
            90% {
                transform: translate3d(0, -3px, 0);
            }
        }

        @media (max-width: 768px) {
            .success-container {
                padding: 35px 25px;
                margin: 20px;
            }
            
            .success-title {
                font-size: 1.5rem;
            }
            
            .success-icon {
                width: 80px;
                height: 80px;
            }
            
            .success-icon i {
                font-size: 32px;
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
            Ödemeniz başarıyla tamamlandı. İşleminiz güvenli bir şekilde gerçekleştirildi.
        </p>
        
        <div class="success-details">
            <div class="detail-item">
                <span class="detail-label">İşlem Durumu</span>
                <span class="detail-value" style="color: #10b981;">✓ Tamamlandı</span>
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
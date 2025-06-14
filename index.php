<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Fırat Kaya" />
    <title>Shopier Ödeme Sistemi</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="background-pattern"></div>
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
    </div>

    <div class="container">
        <div class="payment-wrapper">
            <div class="payment-header">
                <div class="header-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h1>Güvenli Ödeme</h1>
                <p>Bilgileriniz SSL ile korunmaktadır</p>
            </div>

            <div class="payment-card">
                <form action="payment.php" method="post" id="paymentForm">
                    <div class="form-section">
                        <h3><i class="fas fa-user"></i> Kişisel Bilgiler</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputFirstName">
                                    <i class="fas fa-user"></i>
                                    Ad
                                </label>
                                <input type="text" name="first_name" class="form-control" id="inputFirstName" placeholder="Adınızı giriniz" required>
                            </div>
                            <div class="form-group">
                                <label for="inputLastName">
                                    <i class="fas fa-user"></i>
                                    Soyad
                                </label>
                                <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Soyadınızı giriniz" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail">
                                <i class="fas fa-envelope"></i>
                                E-Posta Adresi
                            </label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="ornek@domain.com" required>
                        </div>

                        <div class="form-group">
                            <label for="inputPhoneNumber">
                                <i class="fas fa-phone"></i>
                                Telefon Numarası
                            </label>
                            <input type="tel" name="phone_number" class="form-control" id="inputPhoneNumber" placeholder="+90 5XX XXX XX XX" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3><i class="fas fa-map-marker-alt"></i> Adres Bilgileri</h3>
                        <div class="form-group">
                            <label for="inputAddress">
                                <i class="fas fa-home"></i>
                                Adres
                            </label>
                            <textarea name="address" class="form-control" id="inputAddress" rows="3" placeholder="Tam adresinizi giriniz" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputCountry">
                                    <i class="fas fa-flag"></i>
                                    Ülke
                                </label>
                                <select name="country" class="form-control" id="inputCountry" required>
                                    <option value="">Ülke seçiniz</option>
                                    <option value="Türkiye" selected>Türkiye</option>
                                    <option value="Almanya">Almanya</option>
                                    <option value="Fransa">Fransa</option>
                                    <option value="İngiltere">İngiltere</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputCity">
                                    <i class="fas fa-city"></i>
                                    Şehir
                                </label>
                                <input type="text" name="city" class="form-control" id="inputCity" placeholder="Şehir" required>
                            </div>
                            <div class="form-group">
                                <label for="inputZip">
                                    <i class="fas fa-mail-bulk"></i>
                                    Posta Kodu
                                </label>
                                <input type="text" name="zip_code" class="form-control" id="inputZip" placeholder="34000" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3><i class="fas fa-money-bill-wave"></i> Ödeme Bilgileri</h3>
                        <div class="amount-section">
                            <label for="inputAmount">
                                <i class="fas fa-lira-sign"></i>
                                Ödeme Miktarı
                            </label>
                            <div class="amount-input-wrapper">
                                <input type="number" name="amount" class="form-control amount-input" id="inputAmount" placeholder="0" min="1" step="0.01" required>
                                <span class="currency">TL</span>
                            </div>
                            <div class="quick-amounts">
                                <button type="button" class="quick-amount" data-amount="25">25 TL</button>
                                <button type="button" class="quick-amount" data-amount="50">50 TL</button>
                                <button type="button" class="quick-amount" data-amount="100">100 TL</button>
                                <button type="button" class="quick-amount" data-amount="250">250 TL</button>
                            </div>
                        </div>
                    </div>

                    <div class="security-info">
                        <div class="security-badges">
                            <div class="badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>SSL Güvenlik</span>
                            </div>
                            <div class="badge">
                                <i class="fas fa-lock"></i>
                                <span>256-bit Şifreleme</span>
                            </div>
                            <div class="badge">
                                <i class="fas fa-check-circle"></i>
                                <span>Güvenli Ödeme</span>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="1">
                    
                    <button type="submit" class="payment-button">
                        <span class="button-content">
                            <i class="fas fa-credit-card"></i>
                            Güvenli Ödeme Yap
                        </span>
                        <div class="button-loader">
                            <div class="spinner"></div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Quick amount selection
        document.querySelectorAll('.quick-amount').forEach(button => {
            button.addEventListener('click', function() {
                const amount = this.getAttribute('data-amount');
                document.getElementById('inputAmount').value = amount;
                
                // Remove active class from all buttons
                document.querySelectorAll('.quick-amount').forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
            });
        });

        // Form submission with loading state
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('.payment-button');
            submitButton.classList.add('loading');
            submitButton.disabled = true;
        });

        // Phone number formatting
        document.getElementById('inputPhoneNumber').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('90')) {
                value = value.substring(2);
            }
            if (value.length > 0) {
                if (value.length <= 3) {
                    value = `+90 ${value}`;
                } else if (value.length <= 6) {
                    value = `+90 ${value.substring(0, 3)} ${value.substring(3)}`;
                } else if (value.length <= 8) {
                    value = `+90 ${value.substring(0, 3)} ${value.substring(3, 6)} ${value.substring(6)}`;
                } else {
                    value = `+90 ${value.substring(0, 3)} ${value.substring(3, 6)} ${value.substring(6, 8)} ${value.substring(8, 10)}`;
                }
            }
            e.target.value = value;
        });

        // Form validation animations
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('has-value');
                } else {
                    this.classList.remove('has-value');
                }
            });

            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>

</html>
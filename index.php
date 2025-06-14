<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Discord: username" />
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

    <div class="container">
        <div class="payment-wrapper">
            <div class="payment-header">
                <h1>Güvenli Ödeme</h1>
                <p>Bilgileriniz SSL ile korunmaktadır</p>
            </div>

            <div class="payment-content">
                <!-- Credit Card Preview -->
                <div class="card-preview">
                    <div class="credit-card">
                        <div class="card-front">
                            <div class="card-chip"></div>
                            <div class="card-number" id="cardNumber">•••• •••• •••• ••••</div>
                            <div class="card-info">
                                <div class="card-holder">
                                    <span class="label">KART SAHİBİ</span>
                                    <span class="value" id="cardHolder">AD SOYAD</span>
                                </div>
                                <div class="card-expiry">
                                    <span class="label">GEÇERLİLİK</span>
                                    <span class="value" id="cardExpiry">MM/YY</span>
                                </div>
                            </div>
                            <div class="card-brand">
                                <i class="fab fa-cc-visa" id="cardBrand"></i>
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="magnetic-strip"></div>
                            <div class="cvv-section">
                                <span class="cvv-label">CVV</span>
                                <span class="cvv-value" id="cardCvv">•••</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Form -->
                <div class="payment-form">
                    <form action="payment.php" method="post" id="paymentForm">
                        <div class="form-grid">
                            <!-- Personal Info -->
                            <div class="form-section">
                                <h3>Kişisel Bilgiler</h3>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" id="inputFirstName" placeholder="Ad" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Soyad" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-posta" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_number" class="form-control" id="inputPhoneNumber" placeholder="Telefon" required>
                                </div>
                            </div>

                            <!-- Card Info -->
                            <div class="form-section">
                                <h3>Kart Bilgileri</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputCardNumber" placeholder="Kart Numarası" maxlength="19">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputExpiry" placeholder="MM/YY" maxlength="5">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputCvv" placeholder="CVV" maxlength="3">
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="form-section">
                                <h3>Adres</h3>
                                <div class="form-group">
                                    <textarea name="address" class="form-control" id="inputAddress" rows="2" placeholder="Adres" required></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <select name="country" class="form-control" id="inputCountry" required>
                                            <option value="">Ülke</option>
                                            <option value="Türkiye" selected>Türkiye</option>
                                            <option value="Almanya">Almanya</option>
                                            <option value="Fransa">Fransa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" id="inputCity" placeholder="Şehir" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="zip_code" class="form-control" id="inputZip" placeholder="Posta Kodu" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Amount -->
                            <div class="form-section">
                                <h3>Tutar</h3>
                                <div class="amount-wrapper">
                                    <input type="number" name="amount" class="form-control amount-input" id="inputAmount" placeholder="0" min="1" step="0.01" required>
                                    <span class="currency">TL</span>
                                </div>
                                <div class="quick-amounts">
                                    <button type="button" class="quick-amount" data-amount="25">25</button>
                                    <button type="button" class="quick-amount" data-amount="50">50</button>
                                    <button type="button" class="quick-amount" data-amount="100">100</button>
                                    <button type="button" class="quick-amount" data-amount="250">250</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="1">
                        
                        <button type="submit" class="payment-button">
                            <i class="fas fa-lock"></i>
                            Güvenli Ödeme Yap
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Card number formatting and preview
        document.getElementById('inputCardNumber').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
            let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
            if (formattedValue.length > 19) formattedValue = formattedValue.substr(0, 19);
            e.target.value = formattedValue;
            
            // Update card preview
            const cardNumber = document.getElementById('cardNumber');
            if (value.length > 0) {
                const maskedNumber = formattedValue.padEnd(19, '•').replace(/(.{4})/g, '$1 ').trim();
                cardNumber.textContent = maskedNumber;
            } else {
                cardNumber.textContent = '•••• •••• •••• ••••';
            }
            
            // Update card brand
            const cardBrand = document.getElementById('cardBrand');
            if (value.startsWith('4')) {
                cardBrand.className = 'fab fa-cc-visa';
            } else if (value.startsWith('5')) {
                cardBrand.className = 'fab fa-cc-mastercard';
            } else {
                cardBrand.className = 'fas fa-credit-card';
            }
        });

        // Expiry formatting
        document.getElementById('inputExpiry').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
            
            // Update card preview
            const cardExpiry = document.getElementById('cardExpiry');
            cardExpiry.textContent = value || 'MM/YY';
        });

        // CVV preview
        document.getElementById('inputCvv').addEventListener('input', function(e) {
            const cardCvv = document.getElementById('cardCvv');
            cardCvv.textContent = e.target.value.padEnd(3, '•');
        });

        // Name preview
        function updateCardHolder() {
            const firstName = document.getElementById('inputFirstName').value;
            const lastName = document.getElementById('inputLastName').value;
            const cardHolder = document.getElementById('cardHolder');
            const fullName = (firstName + ' ' + lastName).trim().toUpperCase();
            cardHolder.textContent = fullName || 'AD SOYAD';
        }

        document.getElementById('inputFirstName').addEventListener('input', updateCardHolder);
        document.getElementById('inputLastName').addEventListener('input', updateCardHolder);

        // CVV focus - flip card
        document.getElementById('inputCvv').addEventListener('focus', function() {
            document.querySelector('.credit-card').classList.add('flipped');
        });

        document.getElementById('inputCvv').addEventListener('blur', function() {
            document.querySelector('.credit-card').classList.remove('flipped');
        });

        // Quick amounts
        document.querySelectorAll('.quick-amount').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('inputAmount').value = this.getAttribute('data-amount');
                document.querySelectorAll('.quick-amount').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Phone formatting
        document.getElementById('inputPhoneNumber').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('90')) value = value.substring(2);
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
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Fırat Kaya" />
    <link href=style.css rel="stylesheet">
    <title>Shopier Bakiye Yükleme Sistemi @firatkaya</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

    </style>
</head>

<body>
    <div class="d-flex justify-content-center" style="padding-top: 100px;">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ödeme</div>
                <div class="card-body">
                    <form action="payment.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">Ad:</label>
                                <input type="text" name="first_name" class="form-control" id="inputFirstName" placeholder="Fırat" required="reqiured">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName">Soyad:</label>
                                <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Kaya" required="reqiured">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Posta Adresi:</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="example@domain.com" required="reqiured">
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneNumber">Telefon Numarası:</label>
                            <input type="text" name="phone_number" class="form-control" id="inputPhoneNumber" placeholder="+90 535 068 5472" required="reqiured">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Adres:</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Esentepe Mah. Eski Büyükdere Cad., Tekfen Tower No:209" required="reqiured">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCountry">Ülke:</label>
                                <input type="text" name="country" class="form-control" id="inputCountry" placeholder="Türkiye" required="reqiured">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Şehir:</label>
                                <input type="text" name="city" class="form-control" id="inputCity" placeholder="İstanbul" required="reqiured">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Posta Kodu:</label>
                                <input type="number" name="zip_code" class="form-control" id="inputZip" placeholder="34000" required="reqiured">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAmount">Ödeme Miktarı:</label>
                            <input type="number" name="amount" class="form-control" id="inputAmount" placeholder="25" required="reqiured">
                        </div>
                        <hr class="mb-4">
                        <input type="hidden" name="user_id" value="1">
                        <button type="submit" class="btn btn-primary w-100">Ödeme Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/transfer.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="header row">
        <div class="col-12 d-flex mb-4 gap-3 align-items-center">
            <div><a href="/ABA/transfer"><i class='bx bx-chevron-left'></i></a></div>
            <div><h3>BELTEI Bank' Withdraw Money</h3></div>
        </div>
        <div class="col-12" style="padding-left: 50px;padding-bottom:40px">
            <h4>Withdraws</h4>
            <p>Withdraws money from your accounts in couple of simple steps.</p>
        </div>
    </div>
    <div class="row p-3 options">
        <div class="col-12 p-3"><h3>Choose an Account:</h3></div>
        <div class="col-12 p-2">
            <a href="/ABA/withdraw/usd">
                <div class="box p-3 d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon"><b>$</b></div>
                        <div style="line-height: 0">
                            <h5><b>USD Account</b></h5>
                            <p>Withdraw money from your USD Account</p>
                        </div>
                    </div>
                    <div><h3>></h3></div>
                </div>
            </a>
        </div>
        <div class="col-12 p-2">
            <a href="/ABA/withdraw/khr">
                <div class="box p-3 d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon"><b>៛</b></div>
                        <div style="line-height: 0">
                            <h5><b>KHR Account</b></h5>
                            <p>Withdraw money from your KHR Account</p>
                        </div>
                    </div>
                    <div><h3>></h3></div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
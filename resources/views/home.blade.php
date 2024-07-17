<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class=" container">
    <marquee behavior="" direction=""><div class="d-flex align-items-center"><img src="{{asset('images/logo.png')}}" style="height: 50px" alt="logo"><h5>BELTEI Bank</h5></div></marquee>
    <div class="float-end">
        <a href="/ABA/qr">
            <img src="{{asset('images/qr.webp')}}" style="width: 40px" alt="qr">
        </a>
    </div>
   <div class="row w-100 mt-4">
    <div class="col-12">
        <div style="width: max-content">
            <a href="/ABA/Profile" class="d-flex text-dark gap-2" style="text-decoration: none">
                <div>
                    <img src="{{asset('images/'.Auth::user()->profile)}}" style="height:60px" alt="profile">
                </div>
                <div style="line-height: 0">
                    <h3>Hello, {{Auth::user()->name}}</h3>
                    <p>View Profile ></p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 Mainbox row mt-3">
        <div class="col-md-4 p-3">
            <a href="/ABA/account">
                <div class="bg-light box">
                    <img src="{{asset('images/wallet.png')}}" alt="icon" class="w-25">
                    <h3>Accounts</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 p-3">
            <div class="bg-light box">
                <img src="{{asset('images/visa.png')}}" alt="icon" class="w-25">
                <h3>Cards</h3>
            </div>
        </div>
        <div class="col-md-4 p-3">
           <a href="/ABA/payment">
            <div class="bg-light box">
                <img src="{{asset('images/payment.png')}}" alt="icon" class="w-25">
                <h3>Payments</h3>
            </div>
           </a>
        </div>
        <div class="col-md-4 p-3">
            <a href="/ABA/scan">
                <div class="bg-light box">
                    <img src="{{asset('images/scan.png')}}" alt="icon" class="w-25">
                    <h3>ABA Scan</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 p-3">
            <div class="bg-light box" style="position: relative">
                <img src="{{asset('images/favorite.png')}}" alt="icon" class="w-25">
                <h3>Favorites</h3>
                <div class="bg-danger text-light p-2" style="position: absolute;top:0;left:0">
                    Not Available
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <a href="/ABA/transfer">
                <div class="bg-light box">
                    <img src="{{asset('images/transfer.png')}}" alt="icon" class="w-25">
                    <h3>Transfers</h3>
                </div>
            </a>
        </div>
    </div>
   </div>
</body>
</html>
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
            <div><a href="/ABA"><i class='bx bx-chevron-left'></i></a></div>
            <div><h3>BELTEI Bank' Transfers</h3></div>
        </div>
        <div class="col-12" style="padding-left: 50px;padding-bottom:40px">
            <h4>Transfers</h4>
            <p>Transfers money o your friends, relatives or <br>partners in couple of simple steps.</p>
        </div>
        <div class="searchBar">
            <div class="d-flex justify-content-center">
                <button><i class='bx bx-search-alt-2' ></i></button>
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
    <div class="row p-5 options">
        <div class="col-12 p-2">
            <a href="/ABA/deposit">
                <div class="box p-3 d-flex gap-3 align-items-center">
                    <div class="icon"><i class='bx bx-plus'></i></div>
                    <div style="line-height: 0">
                        <h5><b>Deposit Money</b></h5>
                        <p>Transfer money to other BELTEI Bank customers</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 p-2">
            <a href="/ABA/withdraw">
                <div class="box p-3 d-flex gap-3 align-items-center">
                    <div class="icon"><i class='bx bx-minus' ></i></div>
                    <div style="line-height: 0">
                        <h5><b>Withdraw Money</b></h5>
                        <p>Transfer money to other BELTEI Bank customers</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 p-2">
            <div class="box p-3 d-flex gap-3 align-items-center">
                <div class="icon"><i class='bx bxs-user'></i></div>
                <div style="line-height: 0">
                    <h5><b>Transfer to own BELTEI Bank account</b></h5>
                    <p>Make a transfer to your own account</p>
                </div>
            </div>
        </div>
        <div class="col-12 p-2">
            <div class="box p-3 d-flex gap-3 align-items-center">
                <div class="icon"><i class='bx bx-transfer' ></i></div>
                <div style="line-height: 0">
                    <h5><b>Transfer to other BELTEI Bank account</b></h5>
                    <p>Transfer money to other BELTEI Bank customers</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
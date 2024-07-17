<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="header row">
        <div class="col-12 d-flex gap-3 align-items-center">
            <div><a href="/ABA"><i class='bx bx-chevron-left'></i></a></div>
            <div><h3>BELTEI Bank' Accounts</h3></div>
        </div>
        <div class="col-12 mb-4">
            <div class="d-flex justify-content-center align-itmes-center">
                <div class="circle text-center align-content-center">All Accounts <br>Summary</div>
                <div style="line-height: 0;padding-left: 15px" class="align-content-center w-50">
                    <p>Total in USD</p>
                    <h4>$ {{number_format($account->dollar)}}</h4>
                    <hr>
                    <p>Total in KHR</p>
                    <h4>៛ {{number_format($account->riel)}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-12 p-3 box mb-3" style="line-height: 5px">
            <h5>Savings</h5>
            <p>USD Account | savings</p>
            <div class="text-end">
                <h4><b>{{number_format($account->dollar)}}</b> USD</h4>
            </div>
        </div>
        <div class="col-12 p-3 box" style="line-height: 5px">
            <h5>Savings</h5>
            <p>KHR Account | savings</p>
            <div class="text-end">
                <h4><b>{{number_format($account->riel)}}</b> KHR</h4>
            </div>
        </div>
    </div>
</body>
</html>
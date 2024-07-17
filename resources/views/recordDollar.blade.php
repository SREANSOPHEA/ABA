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
    <div class="header stick row">
        <div class="col-12 d-flex gap-3 align-items-center">
            <div><a href="/ABA/account"><i class='bx bx-chevron-left'></i></a></div>
            <div><h3>BELTEI Bank' History</h3></div>
        </div>
        <div class="col-12 p-3" style="line-height: 0;">
            <h3 style="padding-left: 30px">Savings</h3>
            <p style="padding-left: 30px">USD Account | Savings</p>
        </div>
       <div class="col-12 text-center p-2" style="line-height: 0">
            <h4>AVAILABLE BALANCE</h4>
            <h2>{{number_format($account->dollar)}} USD</h2>
            <p>Account Balance: {{number_format($account->dollar)}} USD</p>
       </div>
    </div>
    <div class="row p-3 history">
        @foreach ($record as $item)    
            <div class="col-12 p-3 d-flex justify-content-between wrap">
                <div class="d-flex gap-3 align-items-center">
                    <div class="img">
                        <img src="{{asset('images/'.$item->profile)}}" class="w-100 h-100" alt="profile">
                    </div>
                    <div><span>{{$item->name}}</span></div>
                </div>
                @if ($item->type == "withdraw")
                    <div class="align-content-center">
                        <h5 class="text-danger">- {{$item->amount}} USD</h5>
                    </div>
                @else
                    <div class="align-content-center">
                        <h5 class="text-success">{{$item->amount}} USD</h5>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    
</body>
</html>
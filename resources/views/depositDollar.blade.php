<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/deposit.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="back d-flex gap-4 align-items-center">
        <a href="/ABA/deposit"><i class='bx bxs-chevron-left' ></i></a>
        <h3>Deposit USD Account</h3>
    </div>
    <div class="row w-100">
        <div class="col-md-5" style="margin: auto">
            <div class="box w-100 p-3">
                <h3 class="text-center">Form</h3>
                <form action="/ABA/deposit/usd/submit" method="post">
                @csrf
                <table class="w-100">
                    <tr>
                        <th>User ID:</th>
                        <td><input type="text" class="form-control border-2 border-dark" name="id" value="{{Auth::user()->appID}}" readonly></td>
                    </tr>
                    <tr>
                        <th>Account:</th>
                        <td><input type="text" class="form-control border-2 border-dark" value="USD Account" readonly></td>
                    </tr>
                    <tr>
                        <th>Amount:</th>
                        <td><input type="number" class="form-control border-2 border-dark" name="amount" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Note:</th>
                        <td><textarea name="note" class="form-control border-2 border-dark" cols="30" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><button class="btn btn-primary">Deposit</button></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
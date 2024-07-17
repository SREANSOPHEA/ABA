<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/scan.css')}}">
    <script src="{{asset('js/scan.js')}}"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <a href="/ABA"><i class='bx bx-chevron-left'></i></a>
    <input type="hidden" id="sender" value="{{Auth::user()->id}}">
    <div class="container">
        <h1>BELTEI Bank' Scan</h1>
        <div class="section">
            <div id="my-qr-reader">              
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/html5-qrcode"></script>
</body>
</html>
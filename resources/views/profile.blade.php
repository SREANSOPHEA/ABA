<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="header row">
        <div class="col-12 d-flex gap-3 align-items-center">
            <div><a href="/ABA"><i class='bx bx-x'></i></a></div>
            <div><h3>BELTEI Bank' Settings</h3></div>
        </div>
        <div class="col-12 d-flex justify-content-center mt-2 mb-2 text-center">
            <div>
                <div class="profile">
                    <img src="{{asset('images/'.Auth::user()->profile)}}" alt="profile" class="w-100 h-100">
                </div>
                <h3>{{Auth::user()->name}}</h3>
                <h5>App ID: {{Auth::user()->appID}}</h5>
            </div>
        </div>
    </div>
    <div class="row p-4">
        <div class="col-12 p-3 d-flex align-items-center option justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
                <i class='bx bx-user-circle'></i>
                <h4>My Profile</h4>
            </div>
            <div><h3>></h3></div>
        </div>
        <div class="col-12 p-3 d-flex align-items-center option justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
                <i class='bx bx-lock' ></i>
                <h4>Security</h4>
            </div>
            <div><h3>></h3></div>
        </div>
        <div class="col-12 p-3 d-flex align-items-center option justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
                <i class='bx bx-globe'></i>
                <h4>Language</h4>
            </div>
            <div class="d-flex gap-4"><h3>English</h3><h3>></h3></div>
        </div>
        <a href="/logout" class="col-12 p-3 option d-flex align-items-center justify-content-center mb-3">
            <h4>Logout</h4><i class='bx bx-log-in' ></i>
        </a>
    </div>
</body>
</html>
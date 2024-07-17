<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr</title>
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/qr.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body id="out">
    <div class="back">
        <a href="/ABA"><i class='bx bx-x'></i></a>
    </div>
    <div>
        <h1 class="text-center text-light">BELTEI Bank' QR</h1>
        <p class="text-center text-light" style="line-height: 15px">Use this QR to receive money from friends or <br>transfer funds from your other banking app</p>
        <div class="col-md-4 box text-center pb-4" style="margin: auto">
            <div class="text-light w-100 p-2" style="background-color:rgb(244, 0, 0)"><h3>KHQR</h3></div>
            <h5 class="text-start mt-2" style="padding-left: 30px">{{Auth::user()->name}}</h5>
            <div class="text-start" style="padding-left: 30px" id="dollarAmount">
                <h3 id="txtdollar">$ 0</h3>
            </div>
            <div class="text-start" style="padding-left: 30px;display:none;" id="rielAmount">
                <h3 id="txtriel">៛ 0</h3>
            </div>
            <hr>
            <img style="margin: auto" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=dollar-{{Auth::user()->id}}-0" alt="qr" class="w-50" id="qrcode">
        </div>
        <div class="col-md-4 btnAddAmount mt-3" style="margin: auto">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal">Add Amount</button>
        </div>
        <div class="col-md-4 mt-3 text-light text-center" style="margin: auto">
            <label>Receive to:</label>
            <label id="reveive" style="cursor: pointer">USD Account | USD <i class='bx bx-chevron-down'></i></label>
        </div>
    </div>
    <div id="accounts" data-value="{{Auth::user()->id}}">
        <h5 class="m-3">Select source account:</h5>
        <div class="row p-3">
            <div class="col-12 p-2">
                <div id="khrBTN" class="opAcc d-flex justify-content-between align-items-center">
                    <div style="line-height: 0">
                        <h5><b>Savings</b></h5>
                        <p>KHR Account</p>
                    </div>
                    <div>
                        <input type="radio" name="acc" id="khAcc">
                    </div>
                </div>
            </div>
            <div class="col-12 p-2">
                <div id="usdBTN" class="opAcc d-flex justify-content-between align-items-center">
                    <div style="line-height: 0">
                        <h5><b>Savings</b></h5>
                        <p>USD Account</p>
                    </div>
                    <div>
                        <input type="radio" name="acc" id="USDAcc" checked>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Amount</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <label>Amount</label>
            <input type="text" id="amountMoney" class="form-control border-2 border-dark">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btnSubmitAddAmount" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
        </div>
    </div>
    <script src="{{asset('js/qr.js')}}"></script>
</body>
</html>
function domReady(fn) {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
    }
    
    domReady(function () {
    
    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var data = decodeText.split('-');
        var currency = data[0];
        var id = data[1];
        var amount = data[2];
        var sender = document.getElementById('sender').value;
        $.post('/ABA/scan/submit',{currency:currency,id:id,amount:amount,sender:sender},function(e){
            alert(e);
        })
     
           
    }
    
    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
    });
   
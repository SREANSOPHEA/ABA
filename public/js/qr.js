document.getElementById('btnSubmitAddAmount').addEventListener('click',function(){
    var amount = document.getElementById('amountMoney').value;
    var id = document.getElementById('accounts').getAttribute('data-value');
    if(amount!= ""){
        if(document.getElementById('khAcc').checked == true){
            document.getElementById('txtdollar').innerHTML = "$ 0";
            document.getElementById('txtriel').innerHTML = "៛​ "+amount;
            document.getElementById('qrcode').src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=riel-"+id+"-"+amount;
        }else{
            document.getElementById('txtriel').innerHTML = "៛​ 0";
            document.getElementById('txtdollar').innerHTML = "$ "+amount;
            document.getElementById('qrcode').src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=dollar-"+id+"-"+amount;
        }
        document.getElementById('amountMoney').value = "";
    }
})
document.addEventListener('click',function(e){
    if(!e.target.id != "reveive"){
        document.getElementById('accounts').style.height = "0";
        if(e.target.id == "khrBTN")  document.getElementById('khAcc').checked = true;
        if(e.target.id == "usdBTN")  document.getElementById('USDAcc').checked = true;
        if(document.getElementById('khAcc').checked == true){
            document.getElementById('dollarAmount').style.display = "none";
            document.getElementById('rielAmount').style.display = "block";
            document.getElementById('reveive').innerHTML="KHR Account | KHR";

        }
        if(document.getElementById('USDAcc').checked == true){
            document.getElementById('dollarAmount').style.display = "block";
            document.getElementById('rielAmount').style.display = "none";
            document.getElementById('reveive').innerHTML="USD Account | USD";
        }
        
    }
    if(e.target.id == "reveive"){
        document.getElementById('accounts').style.height = "max-content";
    }
});
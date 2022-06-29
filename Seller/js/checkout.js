function checkoutv(id){
    var checkid=id;
    var ref=document.getElementById('checkout').value;
    if(ref !=null){
        window.location.replace("../views/checkout.php?checkout="+checkid);
    }

}
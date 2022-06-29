function quantity(){
    var quantity=document.getElementById('quantity').value;
    var pay=document.getElementById('paymentmethod').value;
    

    if(quantity==''||quantity==null){
        document.getElementById('e1').innerHTML="enter quantity";
        return false;
    }
    else{
        document.getElementById('e1').innerHTML=null;
    }
    if(pay==''||pay==null){
        document.getElementById('e2').innerHTML="Select payment method...";
        return false;
    }
    else{
        document.getElementById('e2').innerHTML=null;
    }

   
}
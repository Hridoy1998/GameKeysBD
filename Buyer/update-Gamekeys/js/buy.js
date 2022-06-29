function q(){
    var quantity=document.getElementById('quantity').value;
    var pay=document.getElementById('paymentmethod').value;
    var b=document.getElementById('buy').value;
    
    if(quantity==''||quantity==null){
        document.getElementById('e1').innerHTML="<h3>enter quantity</h3>";
        return false;
    }
    else{
        document.getElementById('e1').innerHTML=null;
    }
    if(pay==''||pay==null){
        document.getElementById('e2').innerHTML="<h3>Select payment method...</h3>";
        return false;
    }
    else{
        document.getElementById('e2').innerHTML=null;
    }

    let xhttp2 = new XMLHttpRequest();
  
    xhttp2.open('POST', '../controllers/buycheck.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('buy=' + b +  '& quantity=' + quantity+'& payment='+pay);
  
    xhttp2.onreadystatechange = function () {
  
      if (this.readyState == 4 && this.status == 200) {
        
        alert(this.responseText) ;
        if(this.responseText=="Transaction Successfull"){
            window.location.replace("../views/Buy_game.php");

        }

      }
    }

   
}
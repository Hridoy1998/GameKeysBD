
function cartgame(a) {
     
    var id = a;
    var quantity = document.getElementById('quantity').value;
    
    var add_to_cart = document.getElementById('add_to_cart').value;
  
  
  
    if (quantity == '') {
      document.getElementById('e').innerHTML = "<h3>nothing carted</h3>";
      return false;
    }
    else {
      document.getElementById('e').innerHTML = "";
    }
  
  
    let xhttp2 = new XMLHttpRequest();
  
    xhttp2.open('POST', '../controllers/pp.php, true');
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('id='+id +'&add_to_cart=' + add_to_cart +  '& quantity=' + quantity);
    
    xhttp2.onreadystatechange = function () {
  
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
        document.getElementById('e1').innerHTML = this.responseText;
      }
    }
  }
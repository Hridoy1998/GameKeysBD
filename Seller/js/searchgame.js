function searchgame() {
    var search = document.getElementById('search').value;
    
    var submit = document.getElementById('submit').value;
  
  
  
    if (search == '') {
      document.getElementById('e').innerHTML = "<h3>nothing for search, please check search box</h3>";
      return false;
    }
    else {
      document.getElementById('e').innerHTML = "";
    }
  
  
    let xhttp2 = new XMLHttpRequest();
  
    xhttp2.open('POST', '../controllers/search_check.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('btn=' + submit +  '& search=' + search);
  
    xhttp2.onreadystatechange = function () {
  
      if (this.readyState == 4 && this.status == 200) {
        
        document.getElementById('e1').innerHTML = this.responseText;
      }
    }
  }
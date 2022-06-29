function deletep(did){
    var id=did;
    var d=document.getElementById('deletep').value;

    
    let xhttp2 = new XMLHttpRequest();
  
    xhttp2.open('POST', '../controllers/delete_postcheck.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('delete='+ d+ ' & id='+id);
  
    xhttp2.onreadystatechange = function () {
  
      if (this.readyState == 4 && this.status == 200) {
        
        alert(this.responseText) ;
        if(this.responseText=="Post deleted"){
            window.location.reload("../views/viewposts.php");

        }

      }
    }
}
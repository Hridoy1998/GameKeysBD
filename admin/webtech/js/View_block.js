function Vblockbuyer(i){
  var id=i;
  var BLOCKt= document.getElementById('BLOCK').value;
  
  let confirmAction = confirm("Are you sure to execute this action?");
  if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controllers/block_check.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('block='+BLOCKt+'&id='+id);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="block successfull..."){
                          window.location.replace("../views/listbuyeradmin.php");
                      }
      }
  }
}
else{
  alert("Action canceled");
}

}



function Vblockseller(i){
  var id=i;
  var BLOCKt= document.getElementById('BLOCK').value;
  
  let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controllers/block_check.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('block='+BLOCKt+'&id='+id);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="block successfull..."){
                          window.location.replace("../views/listselleradmin.php");
            }
         }
      }

    }
    else{
      alert("Action canceled");
  }
}

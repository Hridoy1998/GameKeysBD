function gamereqdadmin(id){
    var editid=id;
    var DELETE=document.getElementById('DELETE').value;
    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/gameReqdeletebyAdmin.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('DELETEb='+DELETE+' & id='+editid);
            
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){

                    {
                      alert(this.responseText);
                      if(this.responseText=="Post Delete Successfully."){
                        window.location.reload("../views/Game request post view by admin.php");
                      }
                    } 
                 }
            }
        }
            else {
                alert("Action canceled");
              }
}

function buyerpostPhotodeletebyadmin(id){
    var editid=id;
    var DELETE=document.getElementById('DELETE').value;
    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/buyerpostPhotodeletebyadmin.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('DELETEb='+DELETE+' & id='+editid);
            
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){

                    {
                      alert(this.responseText);
                      if(this.responseText=="Post Delete Successfully."){
                        window.location.reload("../views/buyergamepostviewbyadmin.php");
                      }
                    } 
                 }
            }
        }
            else {
                alert("Action canceled");
              }
}
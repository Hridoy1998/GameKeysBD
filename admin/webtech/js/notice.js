function noticebv(){
    var date=document.getElementById('date').value;
    var notice_bar=document.getElementById('notice_bar').value;
    var submit=document.getElementById('submit').value;
  
    if(date==''&& notice_bar==''){
        document.getElementById('e').innerHTML="<h3>null submition</h3>";
        return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
  
    if(date==''){
        document.getElementById('e').innerHTML="<h3>enter date</h3>";
        return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
    if(notice_bar==''){
        document.getElementById('e').innerHTML="<h3>enter notice...</h3>";
        return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
  
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/notice_board_store.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('noticebtn='+submit+' & notice_date='+date+'& notice_bar='+notice_bar);
  
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);
                    if(this.responseText=="Notice Add successfully. Notice posted"){
                        window.location.reload("../views/notice board.php");
                    }
                }
            }
  }

function noticebdv(did){
    var id=did;
    var submit=document.getElementById('deleten').value;

    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction) {
  
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/notice_board_delete_store.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('noticebtn='+submit+' & id='+id);
  
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){

                  
                      alert(this.responseText);
                      if(this.responseText=="Notice Delete successfully."){
                        window.location.reload("../views/notice board.php");
                      }
                    }
                }
            }
            else {
              alert("Action canceled");
              window.location.reload("../views/notice board.php");
            }
  
  }
  
  function noticbuv(){
    var id=document.getElementById('id').value;
    var date=document.getElementById('date').value;
    var notice_bar=document.getElementById('notice_bar').value;
    var submit=document.getElementById('submit').value;
  
    if(date==''&& notice_bar==''&&id==''){
      document.getElementById('e').innerHTML="<h3>null submition</h3>";
      return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
    if(id==''){
      document.getElementById('e').innerHTML="<h3>enter id...</h3>";
      return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
    if(date==''){
      document.getElementById('e').innerHTML="<h3>enter date...</h3>";
      return false;
    }
    else{
        document.getElementById('e').innerHTML=null;
    }
  
    if(notice_bar==''){
      document.getElementById('e').innerHTML="<h3>enter notice...</h3>";
      return false;
    }
    else{
      document.getElementById('e').innerHTML=null;
    }
  
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/notice_board_edit_store.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('noticebtn='+submit+' & notice_date='+date+'& notice_bar='+notice_bar+'& id='+id);
  
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);	
                    if(this.responseText=="notice update successfully"){
                      window.location.replace("../views/notice board.php");
  
                    }
                  }
            }
  
  }
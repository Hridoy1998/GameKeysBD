function back()
{
    var ref=document.getElementById('back').value;
    if(ref !=null){
        window.location.replace("admin.php");
    }

}
function Noticeedittag(id){
    var editid=id;
    var ref=document.getElementById('edit').value;
    if(ref !=null){
        window.location.replace("notice edit.php?noticeEdit="+editid);
    }

}

function viewBprofiletag(id){
    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("view buyer profile by admin.php?view="+editid);
    }
}

function  editBprofiletag(id){

    var editid=id;
    var EDIT=document.getElementById('EDIT').value;
    if(EDIT !=null){
        window.location.replace("edit buyer.php?editbuyer="+editid);
    }

}

/*function blockBprofiletag(id){

    var editid=id;
    var BLOCK=document.getElementById('BLOCK').value;
    if(BLOCK !=null){
        window.location.assign("block_list_by_admin.php?block="+editid);
    }
}*/



function viewSprofiletag(id){

    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("view seller profile by admin.php?view="+editid);
    }
}

function  editSprofiletag(id){

    var editid=id;
    var EDIT=document.getElementById('EDIT').value;
    if(EDIT !=null){
        window.location.replace("edit seller.php?editseller="+editid);
    }

}
/*function blockSprofiletag(id){

    var editid=id;
    var BLOCK=document.getElementById('BLOCK').value;
    if(BLOCK !=null){
        window.location.assign("block_list_by_admin.php?block="+editid);
    }
}*/

function viewtran(id){
    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.assign("../views/transview.php?transV="+editid);
    }

}
function viewmessagetag(id){
    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.assign("../views/view message.php?view="+editid);
    }
}

function gamedelete(id){
    var editid=id;
    var DELETE=document.getElementById('DELETE').value;
    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){
    let xhttp2 = new XMLHttpRequest();
  
            xhttp2.open('POST', '../controllers/gamedeleteadmin.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('DELETEb='+DELETE+' & id='+editid);
            
            xhttp2.onreadystatechange = function (){
  
                if(this.readyState == 4 && this.status == 200){

                    {
                      alert(this.responseText);
                      if(this.responseText=="Game Delete successfully."){
                        window.location.reload("../views/notice board.php");
                      }
                    } 
                 }
            }
        }
            else {
                alert("Action canceled");
              }
}

function TransactionApp(i){
    var i=i;
    var Appprove=document.getElementById('Appprove').value;

    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
    
    xhttp2.open('POST', '../controllers/transaction Approve.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('Appprove='+Appprove+'&id='+i);

    xhttp2.onreadystatechange = function (){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText=="Transation Request Approve Successfully."){
                window.location.reload("../views/transactionadmin Request.php");
            }
    }
    }
}
else{
    alert("Action canceled");
}


}

function TransactionRec(i){
    var i=i;
    var Rejact=document.getElementById('Rejact').value;

    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
    
    xhttp2.open('POST', '../controllers/transaction Rejact.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('Rejact='+Rejact+'&id='+i);

    xhttp2.onreadystatechange = function (){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText=="Transation Request Rejact Successfully."){
                window.location.reload("../views/transactionadmin Request.php");
            }
    }
    }
}
else{
    alert("Action canceled");
}


}

function deletetran(i){
    var i=i;
    var Rejact=document.getElementById('DELETE').value;

    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
    
    xhttp2.open('POST', '../controllers/transaction delete.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('Rejact='+Rejact+'&id='+i);

    xhttp2.onreadystatechange = function (){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText=="Transation Delete Successfully."){
                window.location.reload("../views/transactionadmin.php");
            }
    }
    }
}
else{
    alert("Action canceled");
}

}

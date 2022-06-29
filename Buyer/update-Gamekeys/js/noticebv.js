function noticebv(){
    var date=document.getElementById('date').value;
    var notice_bar=document.getElementById('notice_bar').value;

    if(date==''||date==null){
        document.getElementById('e1').innerHTML="<h3>enter date</h3>";
        return false;
    }
    else{
        document.getElementById('e1').innerHTML="";
    }

    if(notice_bar==''){
        document.getElementById('e2').innerHTML="<h3>enter notice...</h3>";
        return false;
    }
    else{
        document.getElementById('e2').innerHTML="";
    }
}
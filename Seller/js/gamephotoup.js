function photoup(){
    var date=document.getElementById('date').value;
    var name=document.getElementById('name').value;
    var file=document.getElementById('file').value;

    if(date==''||date==null){
        document.getElementById('e1').innerHTML="<h3>enter date</h3>";
        return false;
    }
    else{
        document.getElementById('e1').innerHTML="";
    }

    if(name==''){
        document.getElementById('e3').innerHTML="<h3>enter game name...</h3>";
        return false;
    }
    else{
        document.getElementById('e3').innerHTML="";
    }

    if(file==''){
        document.getElementById('e2').innerHTML="<h3>Upload image...</h3>";
        return false;
    }
    else{
        document.getElementById('e2').innerHTML="";
    }
}
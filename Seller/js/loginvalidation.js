function loginv(){
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;

    if(username==""&&password=="")
    {
        document.getElementById('e3').innerHTML="Null submition";
            return false;
    }
    else{
        document.getElementById('e3').innerHTML="";
    }

    if(username==""||username==null){
        document.getElementById('e1').innerHTML="Username required";
        return false;
      }
    else{
        document.getElementById('e1').innerHTML="";
      }

    if(password==""||password==null){
        document.getElementById('e2').innerHTML="Password required";
        return false;
      }
    else{
        document.getElementById('e2').innerHTML="";
      }
}
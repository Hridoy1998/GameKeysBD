function loginv(){
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;

    if(username==""&&password=="")
    {
        document.getElementById('e3').innerHTML="Null submit";
            return false;
    }
    else{
        document.getElementById('e3').innerHTML="";
    }

    if(username==""||username==null){
        document.getElementById('e1').innerHTML="Username require";
        return false;
      }
    else{
        document.getElementById('e1').innerHTML="";
      }

    if(password==""||password==null){
        document.getElementById('e2').innerHTML="Password require";
        return false;
      }
    else{
        document.getElementById('e2').innerHTML="";
      }
}
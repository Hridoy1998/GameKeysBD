function loginv(){
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;
    var submit=document.getElementById('submit').value;

    if(username==""&&password=="")
    {
        document.getElementById('e3').innerHTML="Null submit";
            //return false;
    }
    else{
        document.getElementById('e3').innerHTML=null;
    }

    if(username==""){
        document.getElementById('e1').innerHTML="Username require";
        //return false;
      }
    else{
        document.getElementById('e1').innerHTML=null;
      }

    if(password==""){
        document.getElementById('e2').innerHTML="Password require";
        //return false;
      }
    else{
        document.getElementById('e2').innerHTML=null;
      }

      if(username!=null&&password!=null){

			let xhttp = new XMLHttpRequest();

			xhttp.open('POST', '../controllers/login_check.php', true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send('submit='+submit+' & username='+username+'& password='+password);

			xhttp.onreadystatechange = function (){

				if(this.readyState == 4 && this.status == 200){
					alert(this.responseText);
          document.getElementById('e3').innerHTML = this.responseText;
          if(this.responseText== "login Successful.."){
            window.location.replace("../views/admin.php");
          }

          
        }
			}
    }
    else{
      return false;
    }
}
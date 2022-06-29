function regvas(){
    var first_name=document.getElementById('first_name').value;
    var last_name=document.getElementById('last_name').value;
    var username=document.getElementById('username').value;
    var dob=document.getElementById('dob').value;
    var gender=document.getElementById('gender').value;
    var email=document.getElementById('email').value;
    var phonenumber=document.getElementById('phonenumber').value;
    var password=document.getElementById('password').value;
    var file=document.getElementById('file').value;
    var submit=document.getElementById('submit').value;
    if(first_name==""){
      document.getElementById('e1').innerHTML="first_name require";
      return false;
    }
    else{
      document.getElementById('e1').innerHTML=null;
    }
  
    if(last_name==""){
      document.getElementById('e2').innerHTML="Last_name require";
      return false;
    }
    else{
      document.getElementById('e2').innerHTML=null;
    }
  
    if(username==""){
      document.getElementById('e3').innerHTML="Username require";
      return false;
    }
    else{
      document.getElementById('e3').innerHTML=null;
    }
  
    if(dob==""){
      document.getElementById('e4').innerHTML="Date of Bath require";
      return false;
    }
    else{
      document.getElementById('e4').innerHTML=null;
    }
  
    if(gender==""){
      document.getElementById('e5').innerHTML="Gender require";
      return false;
    }
    else{
      document.getElementById('e5').innerHTML=null;
    }
  
    if(email==""){
      document.getElementById('e6').innerHTML="Email require";
      return false;
    }
    else{
      document.getElementById('e6').innerHTML=null;
    }
  
    if(phonenumber==""){
      document.getElementById('e7').innerHTML="Phone number require";
      return false;
    }
    else{
      document.getElementById('e7').innerHTML=null;
    }
  
    if(password==""){
      document.getElementById('e8').innerHTML="Password require";
      return false;
    }
    else{
      document.getElementById('e8').innerHTML=null;
    }
  
    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controllers/regchek_for_seller.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('submitNewseller='+submit+' & first_name='+first_name+'& last_name='+last_name+' & username='+username+' & dob='+dob+' & gender='+gender+' & email='+email+' & phonenumber='+phonenumber+' & password='+password+' & profilepic='+file);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      document.getElementById('e').innerHTML = this.responseText;			}
              }
  }
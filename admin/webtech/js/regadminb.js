function Regvalidationbuyer(){
    var first_name=document.getElementById('first_name').value;
    var last_name=document.getElementById('last_name').value;
    var username=document.getElementById('username').value;
    var dob=document.getElementById('dob').value;
    var gender=document.getElementById('gender').value;
    var email=document.getElementById('email').value;
    var phonenumber=document.getElementById('phonenumber').value;
    var password=document.getElementById('password').value;
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
    if(username.length<4){
      document.getElementById('e3').innerHTML="Username must have at least 4 character.";
      return false;
    }
  
    if(username.length>10){
      document.getElementById('e3').innerHTML="Username not monre then 7 character.";
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
    if(phonenumber.length>11){
        document.getElementById('e7').innerHTML="Invalide Phone Number. phone number must have 11 digits";
        return false;
      }
    else{
      document.getElementById('e7').innerHTML=null;
    }
  
    if(password==""){
      document.getElementById('e8').innerHTML="Password require";
      return false;
    }
    if(password.length<4){
        document.getElementById('e8').innerHTML="Password must have at least 4 characters";
        return false;
      }
      if(password.length>10){
        document.getElementById('e8').innerHTML="Password not monre then 7 characters";
        return false;
      }
    else{
      document.getElementById('e8').innerHTML=null;
    }

    let json = {
		'first_name': first_name,
        'last_name': last_name,
        'username': username,
        'dob': dob,
        'gender': gender,
        'email': email,
        'phonenumber': phonenumber,
		'password': password,
	};

   let data = JSON.stringify(json); 

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controllers/regchek_for_buyer_by_admin.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('submitNewAccountBuyer='+submit+'& data='+data);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="Buyer Add successfull......"){
                        window.location.replace("../views/admin.php")
                    }
                      document.getElementById('e').innerHTML = this.responseText;			}
              }
  }
  
  function Regvalidationseller(){

    var first_name=document.getElementById('first_name').value;
    var last_name=document.getElementById('last_name').value;
    var username=document.getElementById('username').value;
    var dob=document.getElementById('dob').value;
    var gender=document.getElementById('gender').value;
    var email=document.getElementById('email').value;
    var phonenumber=document.getElementById('phonenumber').value;
    var password=document.getElementById('password').value;
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
      if(username.length<4){
        document.getElementById('e3').innerHTML="Username must have at least 4 character.";
        return false;
      }
    
      if(username.length>10){
        document.getElementById('e3').innerHTML="Username not monre then 7 character.";
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
      if(phonenumber.length>11){
          document.getElementById('e7').innerHTML="Invalide Phone Number. phone number must have 11 digits";
          return false;
        }
      else{
        document.getElementById('e7').innerHTML=null;
      }
    
      if(password==""){
        document.getElementById('e8').innerHTML="Password require";
        return false;
      }
      if(password.length<4){
          document.getElementById('e8').innerHTML="Password must have at least 4 characters";
          return false;
        }
        if(password.length>10){
          document.getElementById('e8').innerHTML="Password not monre then 7 characters";
          return false;
        }
      else{
        document.getElementById('e8').innerHTML=null;
      }

      let json = {
		'first_name': first_name,
        'last_name': last_name,
        'username': username,
        'dob': dob,
        'gender': gender,
        'email': email,
        'phonenumber': phonenumber,
		'password': password,
	};

   let data = JSON.stringify(json); 
  
    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controllers/regchek_for_seller_by_admin.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('submitNewAccountSeller='+submit+'&data='+data);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="Seller Add successfull......"){
                        window.location.replace("../views/admin.php")
                      }
                      document.getElementById('e').innerHTML = this.responseText;			}
              }

  }
  
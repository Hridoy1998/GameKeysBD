function editbuyeradmin(){

    var id=document.getElementById('id').value;
      var first_name=document.getElementById('first_name').value;
      var last_name=document.getElementById('last_name').value;
      var username=document.getElementById('username').value;
      var dob=document.getElementById('dob').value;
      var gender=document.getElementById('gender').value;
      var email=document.getElementById('email').value;
      var phonenumber=document.getElementById('phonenumber').value;
      var password=document.getElementById('password').value;
      var type=document.getElementById('type').value;
      var submit=document.getElementById('editBuyer').value;
      if(first_name==null){
        document.getElementById('e').innerHTML="first_name require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(last_name==null){
        document.getElementById('e').innerHTML="Last_name require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(username==null){
        document.getElementById('e').innerHTML="Username require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(dob==null){
        document.getElementById('e').innerHTML="Date of Bath require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(gender==null){
        document.getElementById('e').innerHTML="Gender require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(email==null){
        document.getElementById('e').innerHTML="Email require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(phonenumber==null){
        document.getElementById('e').innerHTML="Phone number require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(password==null){
        document.getElementById('e').innerHTML="Password require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(type==null){
        document.getElementById('e').innerHTML="Type require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
  
      let json = {
            'id':id,
            'first_name': first_name,
            'last_name': last_name,
            'username': username,
            'dob': dob,
            'gender': gender,
            'email': email,
            'phonenumber': phonenumber,
            'password': password,
            'type':type,
      };
    
       let data = JSON.stringify(json); 
  
    if(id!=null&&first_name!=null&&last_name!=null&&username!=null&&dob!=null&&gender!=null&&email!=null&&phonenumber!=null&&password!=null&&type!=null){
      let xhttp1 = new XMLHttpRequest();
    
                xhttp1.open('POST', '../controllers/Update buyer by admin.php', true);
                xhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp1.send('editBuyer='+submit+'&data='+data);
    
                xhttp1.onreadystatechange = function (){
    
                    if(this.readyState == 4 && this.status == 200){
                        alert(this.responseText);
                        if(this.responseText=="Buyer Edit successfull."){
                            window.location.replace("../views/listbuyeradmin.php");
                        }
                    }
                }
            
            }
            else{
                return false;
            }
    }
  
  
    function editselleradmin(){
      var id=document.getElementById('id').value;
      var first_name=document.getElementById('first_name').value;
      var last_name=document.getElementById('last_name').value;
      var username=document.getElementById('username').value;
      var dob=document.getElementById('dob').value;
      var gender=document.getElementById('gender').value;
      var email=document.getElementById('email').value;
      var phonenumber=document.getElementById('phonenumber').value;
      var password=document.getElementById('password').value;
      var type=document.getElementById('type').value;
      var submit=document.getElementById('editseller').value;
      if(first_name==null){
        document.getElementById('e').innerHTML="first_name require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(last_name==null){
        document.getElementById('e').innerHTML="Last_name require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(username==null){
        document.getElementById('e').innerHTML="Username require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(dob==null){
        document.getElementById('e').innerHTML="Date of Bath require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(gender==null){
        document.getElementById('e').innerHTML="Gender require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(email==null){
        document.getElementById('e').innerHTML="Email require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(phonenumber==null){
        document.getElementById('e').innerHTML="Phone number require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(password==null){
        document.getElementById('e').innerHTML="Password require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
    
      if(type==null){
        document.getElementById('e').innerHTML="Type require";
        return false;
      }
      else{
        document.getElementById('e').innerHTML=null;
      }
  
      let json = {
        'id':id,
        'first_name': first_name,
        'last_name': last_name,
        'username': username,
        'dob': dob,
        'gender': gender,
        'email': email,
        'phonenumber': phonenumber,
        'password': password,
        'type':type,
  };
        let data = JSON.stringify(json); 
  
    if(id!=null&&first_name!=null&&last_name!=null&&username!=null&&dob!=null&&gender!=null&&email!=null&&phonenumber!=null&&password!=null&&type!=null){
      let xhttp1 = new XMLHttpRequest();
    
                xhttp1.open('POST', '../controllers/Update seller by admin.php', true);
                xhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp1.send('editseller='+submit+'&data='+data);
    
                xhttp1.onreadystatechange = function (){
    
                    if(this.readyState == 4 && this.status == 200){
                        alert(this.responseText);
                        if(this.responseText=="Seller Edit successfull."){
                            window.location.replace("../views/listselleradmin.php");
                        }
                    }
                }
            
            }
            else{
                return false;
            }
    }
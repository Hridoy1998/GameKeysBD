/*function regvaba(){
  var first_name=document.getElementById('first_name').value;
  var last_name=document.getElementById('last_name').value;
  var username=document.getElementById('username').value;
  var dob=document.getElementById('dob').value;
  var gender=document.getElementById('gender').value;
  var email=document.getElementById('email').value;
  var phonenumber=document.getElementById('phonenumber').value;
  var password=document.getElementById('password').value;
  var profilepic=document.getElementById('file');
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
    document.getElementById('e3').innerHTML="Username mast have at least 4 character.";
    return false;
  }

  if(username.length>7){
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

            xhttp2.open('POST', '../controllers/regchek_for_buyer_by_admin.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('submitNewAccountBuyer='+submit+'&first_name='+first_name+'&last_name='+last_name+'&username='+username+'&dob='+dob+'&gender='+gender+'&email='+email+'&phonenumber='+phonenumber+'&password='+password+'&src='+profilepic);

            xhttp2.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);
                    document.getElementById('e').innerHTML = this.responseText;			}
            }
}*/



/*function regvasa(){
  var first_name=document.getElementById('first_name').value;
  var last_name=document.getElementById('last_name').value;
  var username=document.getElementById('username').value;
  var dob=document.getElementById('dob').value;
  var gender=document.getElementById('gender').value;
  var email=document.getElementById('email').value;
  var phonenumber=document.getElementById('phonenumber').value;
  var password=document.getElementById('password').value;
  var profilepic=document.getElementById('file');
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

            xhttp2.open('POST', '../controllers/regchek_for_seller_by_admin.php', true);
            xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp2.send('submitNewAccountSeller='+submit+'&first_name='+first_name+'&last_name='+last_name+'&username='+username+'&dob='+dob+'&gender='+gender+'&email='+email+'&phonenumber='+phonenumber+'&password='+password+'&src='+profilepic);

            xhttp2.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    alert(this.responseText);
                    document.getElementById('e').innerHTML = this.responseText;			}
            }
}*/

function serchv(){
  var search=document.getElementById('search').value;
  var role=document.getElementById('role').value;
  var submit=document.getElementById('submit').value;


  if(role==""){
    document.getElementById('e').innerHTML="<h3>select role..</h3>";
    return false;
  }
  else{
    document.getElementById('e').innerHTML=null;
  }
  
  if(search==""){
    document.getElementById('e').innerHTML="<h3>nothing for search, please check search box</h3>";
    return false;
  }
  else{
    document.getElementById('e').innerHTML=null;
  }
  
  if(role!=null&&search!=null){
  let xhttp2 = new XMLHttpRequest();

          xhttp2.open('POST', '../controllers/search_check.php', true);
          xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp2.send('btn='+submit+' & role='+role+'& search='+search);

          xhttp2.onreadystatechange = function (){

              if(this.readyState == 4 && this.status == 200){
                  document.getElementById('e1').innerHTML = this.responseText;			}
          }
        }
}
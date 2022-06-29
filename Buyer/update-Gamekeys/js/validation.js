function regvab() {
  var first_name = document.getElementById('first_name').value;
  var last_name = document.getElementById('last_name').value;
  var username = document.getElementById('username').value;
  var dob = document.getElementById('dob').value;
  var gender = document.getElementById('gender').value;
  var email = document.getElementById('email').value;
  var phonenumber = document.getElementById('phonenumber').value;
  var password = document.getElementById('password').value;
  var profilepic = document.getElementById('file');
  var submit = document.getElementById('submit').value;
  if (first_name == "") {
    document.getElementById('e1').innerHTML = "first_name require";
    return false;
  }
  else {
    document.getElementById('e1').innerHTML = "";
  }

  if (last_name == "") {
    document.getElementById('e2').innerHTML = "Last_name require";
    return false;
  }
  else {
    document.getElementById('e2').innerHTML = "";
  }

  if (username == "") {
    document.getElementById('e3').innerHTML = "Username require";
    return false;
  }
  else {
    document.getElementById('e3').innerHTML = "";
  }

  if (dob == "") {
    document.getElementById('e4').innerHTML = "Date of Bath require";
    return false;
  }
  else {
    document.getElementById('e4').innerHTML = "";
  }

  if (gender == "") {
    document.getElementById('e5').innerHTML = "Gender require";
    return false;
  }
  else {
    document.getElementById('e5').innerHTML = "";
  }

  if (email == "") {
    document.getElementById('e6').innerHTML = "Email require";
    return false;
  }
  else {
    document.getElementById('e6').innerHTML = "";
  }

  if (phonenumber == "") {
    document.getElementById('e7').innerHTML = "Phone number require";
    return false;
  }
  else {
    document.getElementById('e7').innerHTML = "";
  }

  if (password == "") {
    document.getElementById('e8').innerHTML = "Password require";
    return false;
  }
  else {
    document.getElementById('e8').innerHTML = "";
  }

  let xhttp1 = new XMLHttpRequest();

  xhttp1.open('POST', '../controllers/regchek_for_buyer.php', true);
  xhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp1.send('submitNewbuyer=' + submit + ' & first_name=' + first_name + '& last_name=' + last_name + ' & username=' + username + ' & dob=' + dob + ' & gender=' + gender + ' & email=' + email + ' & phonenumber=' + phonenumber + ' & password=' + password + ' & profilepic=' + profilepic);

  xhttp1.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById('e').innerHTML = this.responseText;
    }
  }
}


function regvas() {
  var first_name = document.getElementById('first_name').value;
  var last_name = document.getElementById('last_name').value;
  var username = document.getElementById('username').value;
  var dob = document.getElementById('dob').value;
  var gender = document.getElementById('gender').value;
  var email = document.getElementById('email').value;
  var phonenumber = document.getElementById('phonenumber').value;
  var password = document.getElementById('password').value;
  var profilepic = document.getElementById('file');
  var submit = document.getElementById('submit').value;



  if (first_name == "") {
    document.getElementById('e1').innerHTML = "first_name require";
    return false;
  }
  else {
    document.getElementById('e1').innerHTML = "";
  }

  if (last_name == "") {
    document.getElementById('e2').innerHTML = "Last_name require";
    return false;
  }
  else {
    document.getElementById('e2').innerHTML = "";
  }

  if (username == "") {
    document.getElementById('e3').innerHTML = "Username require";
    return false;
  }
  else {
    document.getElementById('e3').innerHTML = "";
  }

  if (dob == "") {
    document.getElementById('e4').innerHTML = "Date of Bath require";
    return false;
  }
  else {
    document.getElementById('e4').innerHTML = "";
  }

  if (gender == "") {
    document.getElementById('e5').innerHTML = "Gender require";
    return false;
  }
  else {
    document.getElementById('e5').innerHTML = "";
  }

  if (email == "") {
    document.getElementById('e6').innerHTML = "Email require";
    return false;
  }
  else {
    document.getElementById('e6').innerHTML = "";
  }

  if (phonenumber == "") {
    document.getElementById('e7').innerHTML = "Phone number require";
    return false;
  }
  else {
    document.getElementById('e7').innerHTML = "";
  }

  if (password == "") {
    document.getElementById('e8').innerHTML = "Password require";
    return false;
  }
  else {
    document.getElementById('e8').innerHTML = "";
  }

  let xhttp2 = new XMLHttpRequest();

  xhttp2.open('POST', '../controllers/regchek_for_seller.php', true);
  xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp2.send('submitNewseller=' + submit + ' & first_name=' + first_name + '& last_name=' + last_name + ' & username=' + username + ' & dob=' + dob + ' & gender=' + gender + ' & email=' + email + ' & phonenumber=' + phonenumber + ' & password=' + password + ' & profilepic=' + profilepic);

  xhttp2.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById('e').innerHTML = this.responseText;
    }
  }
}


function regvaba() {
  var first_name = document.getElementById('first_name').value;
  var last_name = document.getElementById('last_name').value;
  var username = document.getElementById('username').value;
  var dob = document.getElementById('dob').value;
  var gender = document.getElementById('gender').value;
  var email = document.getElementById('email').value;
  var phonenumber = document.getElementById('phonenumber').value;
  var password = document.getElementById('password').value;
  var profilepic = document.getElementById('file');
  var submit = document.getElementById('submit').value;



  if (first_name == "") {
    document.getElementById('e1').innerHTML = "first_name require";
    return false;
  }
  else {
    document.getElementById('e1').innerHTML = "";
  }

  if (last_name == "") {
    document.getElementById('e2').innerHTML = "Last_name require";
    return false;
  }
  else {
    document.getElementById('e2').innerHTML = "";
  }

  if (username == "") {
    document.getElementById('e3').innerHTML = "Username require";
    return false;
  }
  else {
    document.getElementById('e3').innerHTML = "";
  }

  if (dob == "") {
    document.getElementById('e4').innerHTML = "Date of Bath require";
    return false;
  }
  else {
    document.getElementById('e4').innerHTML = "";
  }

  if (gender == "") {
    document.getElementById('e5').innerHTML = "Gender require";
    return false;
  }
  else {
    document.getElementById('e5').innerHTML = "";
  }

  if (email == "") {
    document.getElementById('e6').innerHTML = "Email require";
    return false;
  }
  else {
    document.getElementById('e6').innerHTML = "";
  }

  if (phonenumber == "") {
    document.getElementById('e7').innerHTML = "Phone number require";
    return false;
  }
  else {
    document.getElementById('e7').innerHTML = "";
  }

  if (password == "") {
    document.getElementById('e8').innerHTML = "Password require";
    return false;
  }
  else {
    document.getElementById('e8').innerHTML = "";
  }

  let xhttp2 = new XMLHttpRequest();

  xhttp2.open('POST', '../controllers/regchek_for_buyer_by_admin.php', true);
  xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp2.send('submitNewAccountBuyer=' + submit + ' & first_name=' + first_name + '& last_name=' + last_name + ' & username=' + username + ' & dob=' + dob + ' & gender=' + gender + ' & email=' + email + ' & phonenumber=' + phonenumber + ' & password=' + password + ' & profilepic=' + profilepic);

  xhttp2.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById('e').innerHTML = this.responseText;
    }
  }
}



function regvasa() {
  var first_name = document.getElementById('first_name').value;
  var last_name = document.getElementById('last_name').value;
  var username = document.getElementById('username').value;
  var dob = document.getElementById('dob').value;
  var gender = document.getElementById('gender').value;
  var email = document.getElementById('email').value;
  var phonenumber = document.getElementById('phonenumber').value;
  var password = document.getElementById('password').value;
  var profilepic = document.getElementById('file');
  var submit = document.getElementById('submit').value;



  if (first_name == "") {
    document.getElementById('e1').innerHTML = "first_name require";
    return false;
  }
  else {
    document.getElementById('e1').innerHTML = "";
  }

  if (last_name == "") {
    document.getElementById('e2').innerHTML = "Last_name require";
    return false;
  }
  else {
    document.getElementById('e2').innerHTML = "";
  }

  if (username == "") {
    document.getElementById('e3').innerHTML = "Username require";
    return false;
  }
  else {
    document.getElementById('e3').innerHTML = "";
  }

  if (dob == "") {
    document.getElementById('e4').innerHTML = "Date of Bath require";
    return false;
  }
  else {
    document.getElementById('e4').innerHTML = "";
  }

  if (gender == "") {
    document.getElementById('e5').innerHTML = "Gender require";
    return false;
  }
  else {
    document.getElementById('e5').innerHTML = "";
  }

  if (email == "") {
    document.getElementById('e6').innerHTML = "Email require";
    return false;
  }
  else {
    document.getElementById('e6').innerHTML = "";
  }

  if (phonenumber == "") {
    document.getElementById('e7').innerHTML = "Phone number require";
    return false;
  }
  else {
    document.getElementById('e7').innerHTML = "";
  }

  if (password == "") {
    document.getElementById('e8').innerHTML = "Password require";
    return false;
  }
  else {
    document.getElementById('e8').innerHTML = "";
  }

  let xhttp2 = new XMLHttpRequest();

  xhttp2.open('POST', '../controllers/regchek_for_seller_by_admin.php', true);
  xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp2.send('submitNewAccountSeller=' + submit + ' & first_name=' + first_name + '& last_name=' + last_name + ' & username=' + username + ' & dob=' + dob + ' & gender=' + gender + ' & email=' + email + ' & phonenumber=' + phonenumber + ' & password=' + password + ' & profilepic=' + profilepic);

  xhttp2.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById('e').innerHTML = this.responseText;
    }
  }
}




function noticebv() {
  var date = document.getElementById('date').value;
  var notice_bar = document.getElementById('notice_bar').value;
  var submit = document.getElementById('submit').value;

  if (date == '' && notice_bar == '') {
    document.getElementById('e').innerHTML = "<h3>null submition</h3>";
    return false;
  }
  else {
    document.getElementById('e').innerHTML = "";
  }


  if (date == '') {
    document.getElementById('e').innerHTML = "<h3>enter date</h3>";
    return false;
  }
  else {
    document.getElementById('e').innerHTML = "";
  }

  if (notice_bar == '') {
    document.getElementById('e').innerHTML = "<h3>enter notice...</h3>";
    return false;
  }
  else {
    document.getElementById('e').innerHTML = "";
  }


  let xhttp2 = new XMLHttpRequest();

  xhttp2.open('POST', '../controllers/notice_board_store.php', true);
  xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp2.send('noticebtn=' + submit + ' & notice_date=' + date + '& notice_bar=' + notice_bar);

  xhttp2.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById('e').innerHTML = this.responseText;
    }
  }
}

/*function noticbuv(){
  var id=document.getElementById('id').value;
  var date=document.getElementById('date').value;
  var notice_bar=document.getElementById('notice_bar').value;
  var submit=document.getElementById('submit').value;

  if(date==''&& notice_bar==''&&id==''){
    document.getElementById('e').innerHTML="<h3>null submition</h3>";
    return false;
  }
  else{
      document.getElementById('e').innerHTML="";
  }

  if(id==''){
    document.getElementById('e').innerHTML="<h3>enter id...</h3>";
    return false;
  }
  else{
      document.getElementById('e').innerHTML="";
  }

  if(date==''){
    document.getElementById('e').innerHTML="<h3>enter date...</h3>";
    return false;
  }
  else{
      document.getElementById('e').innerHTML="";
  }

  if(notice_bar==''){
    document.getElementById('e').innerHTML="<h3>enter notice...</h3>";
    return false;
  }
  else{
    document.getElementById('e').innerHTML="";
  }

  let xhttp2 = new XMLHttpRequest();

          xhttp2.open('POST', '../controllers/notice_board_edit_store.php', true);
          xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp2.send('noticebtn='+submit+' & notice_date='+date+'& notice_bar='+notice_bar+'& id='+id);

          xhttp2.onreadystatechange = function (){

              if(this.readyState == 4 && this.status == 200){
                  alert(this.responseText);
                  document.getElementById('e').innerHTML = this.responseText;			}
          }

}*/

function serchv() {
  var search = document.getElementById('search').value;
  
  var submit = document.getElementById('submit').value;



  if (search == '') {
    document.getElementById('e').innerHTML = "<h3>nothing for search, please check search box</h3>";
    return false;
  }
  else {
    document.getElementById('e').innerHTML = "";
  }


  let xhttp2 = new XMLHttpRequest();

  xhttp2.open('POST', '../controllers/search_check.php', true);
  xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp2.send('btn=' + submit +  '& search=' + search);

  xhttp2.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById('e1').innerHTML = this.responseText;
    }
  }
}
function k(){
    var date=document.getElementById('date').value;
    var name=document.getElementById('name').value;
    var details=document.getElementById('details').value;
    var p=document.getElementById('postbtn').value;

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

    if(details==''){
        document.getElementById('e2').innerHTML="<h3>enter game details...</h3>";
        return false;
    }
    else{
        document.getElementById('e2').innerHTML="";
    }

    var json = {
		'postdate'   : date,
        'gamename'   : name,
        'gamedetails': details,
        
	};

   let data = JSON.stringify(json); 
    
    let xhttp2 = new XMLHttpRequest();
  
    xhttp2.open('POST', '../controllers/game_post.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('postbtn=' + p +  '& data= ' + data);
  
    xhttp2.onreadystatechange = function () {
  
      if (this.readyState == 4 && this.status == 200) {
        
        alert(this.responseText) ;
        if(this.responseText=="Post Successfull"){
            window.location.replace("../views/buyer_dashboard.php");

        }

      }
    }
}
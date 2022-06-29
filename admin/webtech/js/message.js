function sendm(receiver,sender){
    var sendm=document.getElementById('sendm').value;
    var receiver=receiver;
    var sender=sender;
    var message=document.getElementById('message').value;

    console.log(receiver);
    console.log(sender);
    console.log(message);

    let xhttp2 = new XMLHttpRequest();

          xhttp2.open('POST', '../controllers/messagecheck.php', true);
          xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp2.send('sendm='+sendm+' & receiver='+receiver+'& sender='+sender+'&message='+message);

          xhttp2.onreadystatechange = function (){

              if(this.readyState == 4 && this.status == 200){
                 alert(this.responseText);
                if(this.responseText=="Message send"){
                    window.location.reload("../views/view message.php?view="+receiver);
                }			}
          }
}


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modify Game</title>
  <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
  
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>Game Modification</h1>
        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm">
          Name : <input type="text" id="name" value="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Price : <input type="text" id="price">
          <div id="d1"></div>
      
          <input type="submit" id="save-button" value="Save" onclick="myname()">

        </form>
 
  
    </td>
    </tr>
 
    <tr>

   <td id="table-data">
      </td>
    </tr>
  </table>
  <div id="error-message"></div>
  <div id="success-message"></div>
  <div id="modal">
    <div id="modal-form">
      <h2>Edit Form</h2>
      <table cellpadding="10px" width="100%">
      </table>
      <div id="close-btn">X</div>
    </div>
  </div>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
function myname(){
            let name = document.getElementById('name').value;

            if(name == ""){
                document.getElementById('d1').innerHTML = "null value..try again";
            }else{
                document.getElementById('d1').innerHTML = "";           }
        }
  
$(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "../views/ajax-load.php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    loadTable(); 
 
 
 
    $("#save-button").on("click",function(e){
      e.preventDefault();
      var name = $("#name").val();
      var price = $("#price").val();
      if(name == "" || price == ""){
        $("#error-message").html("All fields are required.").slideDown();
        $("#success-message").slideUp();
      }else{
        $.ajax({
          url: "../model/ajax-insert.php",
          type : "POST",
          data : {name:name, price: price},
          success : function(data){
            if(data == 1){
              loadTable();
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }

          }
        });
      }

    });

    
    $(document).on("click",".delete-btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var gameId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "../model/ajax-delete.php",
          type : "POST",
          data : {id : gameId},
          success : function(data){
              if(data == 1){
                $(element).closest("tr").fadeOut();
              }else{
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
          }
        });
      }
    });

    $(document).on("click",".edit-btn", function(){
      $("#modal").show();
      var gameId = $(this).data("eid");

      $.ajax({
        url: "../model/load-update-form.php",
        type: "POST",
        data: {id: gameId },
        success: function(data) {
          $("#modal-form table").html(data);
        }
      })
    });

    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

    
      $(document).on("click","#edit-submit", function(){
        var id = $("#edit-id").val();
        var name = $("#edit-name").val();
        var price = $("#edit-price").val();

        $.ajax({
          url: "../model/ajax-update-form.php",
          type : "POST",
          data : {id: id, name: name, price: price},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              loadTable();
            }
          }
        })
      });

    
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "../model/ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>
</body>





</html>

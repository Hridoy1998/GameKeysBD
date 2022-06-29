
<!DOCTYPE html>
<html>
<head>
    <script src="../js/message.js"></script>
    <link rel="stylesheet" type="text/css" href="../img/message.css">
</head>
<body>

<h2>Chat Messages</h2>
<div>
    <textarea name="message" id="message" cols="106" rows="4"></textarea>
    <input type="button" id="sendm"name="sendm" value="SEND"onclick="return sendm(receiver,sender)">
</div>
<?php
require('../controllers/header.php');
require('../model/admin.php');
$noticeEdit= $_GET['view'];
$email=$_SESSION['email'];

$con = getConnection();
$sql1 = "SELECT * FROM mail where (sender='{$noticeEdit}' and receiver='{$email}') or (sender='{$email}' and receiver='{$noticeEdit}')ORDER BY id DESC";
$result1 = $con->query($sql1);

if ($result1 !== false && $result1->num_rows > 0) {
    while($row= $result1->fetch_assoc()) {
?>
<div class="container">
  <p><?=$row["message"]?></p>
  <?php
  if($row['sender']==$noticeEdit&& $row['receiver']==$email){
  ?>
  <span class="time-right" id="sender"><?=$noticeEdit?></span>
  <?php }
    else{
  ?>
  <span class="time-right" id="sender">Admin</span>
  <?php
    }
    ?>
</div>
<?php
    }
}
else{
    echo"Empty";
}

?>


<script type="text/javascript">
var receiver="<?php echo $noticeEdit; ?>";
var sender="<?php echo $email; ?>";
</script>

</body>
</html>

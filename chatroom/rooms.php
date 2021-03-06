<?php
// get room name
echo '
<link rel="apple-touch-icon" href="img/favicon.png" sizes="180x180">
<link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
';
echo '<title>Chatroom</title>';
$roomname=$_GET['roomname'];
include 'db.php';

$sql="SELECT * FROM `chatroom` WHERE `roomname`='$roomname'";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)==0){
        $message = "This room does not exist.Try creating a new one.";
        echo '<script language="javascript">';
        echo 'alert(" '.$message.' ");';
        echo 'window.location="https://greatonlinetools.com/chatroom/rooms.php?roomname='.$room.'";  ';
        echo '</script>';

    }

}
else {
    echo "Error : ".mysqli_error($conn);
}


?>

<!DOCTYPE html>
<html>
<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157534688-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157534688-1');
</script>

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    
<!-- Custom styles for this template -->
<link href="css/product.css" rel="stylesheet">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyclass{
    height:350px;
    overflow-y:scroll;
}
</style>
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
  <h5 class="my-0 mr-md-auto font-weight-normal">Anonymous chat<hr><hr></ht></h5>
  <!--<nav class="my-2 my-md-0 mr-md-3">-->
  <!--  <a class="p-2 text-dark" href="#">Features</a>-->
  <!--  <a class="p-2 text-dark" href="#">Enterprise</a>-->
  <!--  <a class="p-2 text-dark" href="#">Support</a>-->
  <!--  <a class="p-2 text-dark" href="#">Pricing</a>-->
  <!--</nav>-->

</div>
    

<h2>Chat Messages - <?php echo $roomname; ?></h2>
<div class="anyclass">


</div>


<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add message."><br>
<button class="btn btn-primary" name="submitmsg" id="submitmsg">Send</button>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript">
setInterval(runFunction,1000);
function runFunction(){
    $.post("htcont.php",{room:'<?php echo $roomname ?>'},
    function(data,status){
        document.getElementsByClassName('anyclass')[0].innerHTML = data; 

    })
}    

// pressing enter send the message.
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});

// if user submit the form
$("#submitmsg").click(function(){
    var clientmsg=$("#usermsg").val();
  $.post("postmsg.php", {text:clientmsg , room: '<?php echo $roomname; ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
  function(data,status){
      document.getElementsByClassName('anyclass')[0].innerHTML = data;});
      $("#usermsg").val("");
  return false;
});

</script>

</body>
</html>

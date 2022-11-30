<script src="ht.js"></script>
<style>
  .center {
  text-align: center;
  border: 3px solid black;
  display: table;
  margin: auto;
  background-color: white;
  }
  .result{
    background-color: green;
    color:#fff;
    padding:5%;
    margin: auto;
    display: table;
  }
  .row{
    display:flex;
    margin: auto;
  }

  body{
    background-image: url("logo1.jpg");
    background-position: left;
    background-size: 50%;
  }
</style>
<div class="row">
  <div class="center">
    <div style="width:500px;" id="reader">
    </div>
  </div>
</div>
    <audio id="myAudio1">
    <source src="success.mp3" type="audio/ogg">
    </audio>
    <audio id="myAudio2">
    <source src="failes.mp3" type="audio/ogg">
    </audio>
<script>
var x = document.getElementById("myAudio1");
var x2 = document.getElementById("myAudio2");      
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}

function playAudio() { 
  x.play(); 
} 


  </script>
  <div class="center" style="padding:30px;">
    <h3>SCAN RESULT</h3><br>
    <div>Student name</div><br><form action="">
     <input type="text" name="start" class="input" id="result" onkeyup="showHint(this.value)" placeholder="Result Here" readonly="" /></form>
     <h4>Status: <span id="txtHint"></span></h4>
  </div>
</div>
<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById("result").value = qrCodeMessage;
    showHint(qrCodeMessage);
playAudio();

}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);

</script>
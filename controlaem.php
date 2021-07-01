<?php include_once('control.php');?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="controlar.css">
  <title>Interface</title>
</head>

<body>
    <center>
<h1> Robot Arm</h1>
<form method="REQUEST" action="control.php">  	
	<div>
		<label for="volume">Engon 1</label>
			<input type="range" name="Engon_1" id="m1"  min="0" max="180" step="1" value="0" class="slider"> 
               <span id="d1"></span>
			     <br><br>
			
		<label for="volume">Engon 2</label>
		<input type="range" name="Engon_2" id="m2"  min="0" max="180" step="1" value="0" class="slider"> 
             <span id="d2" class="value"></span>
			     <br><br>
	
		<label for="volume">Engon 3</label>
			<input type="range" name="Engon_3" id="m3"  min="0" max="180" step="1" value="0" class="slider">
            <span id="d3"></span>
			     <br><br>
           
			<label for="volume">Engon 4</label>
			<input type="range" name="Engon_4" id="m4"  min="0" max="180" step="1" value="0" class="slider">
             <span id="d4"></span>
			<br><br>
			
			<label for="volume">Engon 5</label>
			<input type="range" name="Engon_5" id="m5"  min="0" max="180" step="1" value="0" class="slider">
             <span id="d5"></span>
			<br><br>
			
			<label for="volume">Engon 6</label>
			<input type="range" name="Engon_6" id="m6"  min="0" max="180" step="1" value="0" class="slider">
           <span id="d6"></span></p>
			<br><br>

            <button class="btn" type="submit" value="save" name="send">send</button>
			<input type="submit" class="btn" value="Running" name="Running">
    </div> 
  </form>
    </center>
 <script>
var slider1 = document.getElementById("m1");
var output1 = document.getElementById("d1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;

}

var slider2 = document.getElementById("m2");
var output2 = document.getElementById("d2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;

}



var slider3 = document.getElementById("m3");
var output3 = document.getElementById("d3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;

}

var slider4 = document.getElementById("m4");
var output4 = document.getElementById("d4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;

}

var slider5 = document.getElementById("m5");
var output5 = document.getElementById("d5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;

}

var slider6 = document.getElementById("m6");
var output6 = document.getElementById("d6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;

}
</script>
</body>
</html>
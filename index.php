<!DOCTYPE html>
<html>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  
  <script>
  function loadApp(appPath, appFile, appTitle) {
	$("#txtTitle").text("Loading...")
	$("#divApp").load(appPath + encodeURIComponent(appFile), function() {
			  $("#txtTitle").text(appTitle);
			});
	document.title = appTitle;
	}
	
  </script>

  
<body>

<button id="myBtn">Load Kana App</button>

<h2 id="txtTitle" style="color:#ff9900;">Kudori App</h2>
<div id="divApp">Web App will be loaded here</div> 


<script>
document.getElementById("myBtn").addEventListener("click", displayApp);

function displayApp() {
  	loadApp('/','kana.php','Kana Practice');
}
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<div id="demo">
<p>Let AJAX change this text.</p>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = JSON.parse(this.response).text;
  }
  xhttp.open("GET", "http://localhost:8000/api/user");
  xhttp.send();
}
</script>

</body>
</html>
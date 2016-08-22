<html>

<head>
<script type="text/javascript"> 
<!-- 
function showMe (it, box) { 
var vis = (box.checked) ? "block" : "none"; 
document.getElementById(it).style.display = vis;
} 
//--> 
</script>
</head>

<body>

<form>
<input type="checkbox" name="modtype" value="value1" onclick="showMe('div1', this)" />value1

<input type="checkbox" name="modtype" value="value2" onclick="showMe('div2', this)" />value2

<input type="checkbox" name="modtype" value="value3" onclick="showMe('div3', this)" />value3

<input type="checkbox" name="modtype" value="value4" onclick="showMe('div4', this)" />value4

<input type="checkbox" name="modtype" value="value5" onclick="showMe('div5', this)" />value5

<div class="row" id="div1" style="display:none">Show Div 1</div>
<div class="row" id="div2" style="display:none">Show Div 2</div>
<div class="row" id="div3" style="display:none">Show Div 3</div>
<div class="row" id="div4" style="display:none">Show Div 4</div>
<div class="row" id="div5" style="display:none">Show Div 5</div>
</form>

</body>

</html>
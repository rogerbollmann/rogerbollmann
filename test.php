<!DOCTYPE html>
<html>
<head>
<title>Submit us your Bug!</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<script type="text/javascript">
// ref: http://diveintohtml5.org/detect.html
function supports_input_placeholder()
{
var i = document.createElement('input');
return 'placeholder' in i;
}

if(!supports_input_placeholder()) {
var fields = document.getElementsByTagName('INPUT');
for(var i=0; i < fields.length; i++) {
if(fields[i].hasAttribute('placeholder')) {
fields[i].defaultValue = fields[i].getAttribute('placeholder');
fields[i].onfocus = function() { if(this.value == this.defaultValue) this.value = ''; }
fields[i].onblur = function() { if(this.value == '') this.value = this.defaultValue; }
}
}
}
</script>
</head>
<body>

<h2>Bitte melde deinen Bug mit diesem Formular</h2>

<form class="form" action="test.php" method="POST">

<p class="name">
<input type="text" name="name" id="name" placeholder="John Doe"/>
<label for="name">Name</label>
</p>

<p class="email">
<input type="text" name="email" id="email" placeholder="mail@example.com" />
<label for="email">Email</label>
</p>

<p class="web">
<input type="text" name="web" id="web" placeholder="www.example.com" />
<label for="web">Betreffende Website</label>
</p>	

<p class="text">
<textarea name="text" placeholder="Fehlerreport" /></textarea>
</p>

<p class="submit">
<input type="submit" value="Senden" />
</p>
</form>

</body>
</html>
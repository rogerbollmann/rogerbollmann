<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kantone</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript">   
    function generateLink(){   
        var kuerzel = document.getElementById("t1").value  
        document.getElementById("sa").innerHTML = "<a href=resolver.php?service=kantone&methode=single&id=" + kuerzel + ">Output of the canton " + kuerzel + "</a>";  
    }   
    </script>
</head>
<body>
<a href="resolver.php?service=kantone&methode=list&sort=name">List all cantons sorted by name</a><br />
<a href="resolver.php?service=kantone&methode=list&sort=hauptort">List all cantons sorted by hauptort</a><br />
<a href="resolver.php?service=kantone&methode=list&sort=einwohner">List all cantons sorted by einwohner</a><br />
<a href="resolver.php?service=kantone&methode=list&sort=beitritt">List all cantons sorted by beitritt</a>

<form> <br />   
<input type="text" id="t1" placeholder="Please enter you canton sign"/> 
<input type="button" onclick="generateLink()" value="Generate Link"><br />
<span id="sa">  
<a id="aa" href="#"></a>  
</span>

   
</form>


</body>
</html>

<html>
<head>
</head>

<body>


<form action="form.php" method="post">
    Name: <input type="text" name="name">
    Password: <input type="password" name="password"><br>
    Apples: <input type="checkbox" name="fruits[]" value="apples" ><br>
    Oranges :<input type="checkbox" name="fruits[]" value="oranges" ><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears" ><br>
    <input type="submit">
</form>

<?php
 
 echo $_POST["name"] ;
 echo "<br>";
 echo $_POST["password"];
 $fruits = $_POST["fruits"];
 echo $fruits[0];


?> 
</body>
</html>
<html>
<head>
</head>

<body>
<?php

sayHi(); 
    function sayHi(){
        echo "hello user";
    }

    function cube($num){
        $result = $num * $num * $num;

        return $result;
    }

    echo cube(10);
    
?>  
</body>

</html>
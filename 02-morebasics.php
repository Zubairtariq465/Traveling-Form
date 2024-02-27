<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;  
    }
    .container{
        max-width: 80%;
        background-color: grey;  
        margin: auto; 
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1> Lets Learn About PHP</h1>
       <p>Your Party Status is Here:</p> 
        
        
        <?php
        $age=38;   
        if($age>18) {
            echo "You can go to the Party";
        }
        else{
            echo "You cannot go to the Party";
        }
        ?>
    </div>
    
</body>
</html>
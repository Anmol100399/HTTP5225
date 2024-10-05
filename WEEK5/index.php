<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEEK5 Class Activity</title>
</head>
<body>
    <?php
    $connect = mysqli_connect(
        'localhost',
        'root',
        'root',
        'HTTP5225'
    );

    if(!$connect){
        echo 'Error code: '. mysqli_connect_errno();
        echo 'Error Message: '. mysqli_connect_error();
        exit;
    }
    $query = 'SELECT `Name`, `Hex` FROM colors';
    $results = mysqli_query($connect, $query);
    if(!$results){
        echo 'Error Message: '.mysqli_error($connect);
    }else{
        echo 'the query found: '.mysqli_num_rows($results);
        $colors = mysqli_fetch_all($results, MYSQLI_ASSOC);
        foreach ($colors as $color) {
            $colorName = $color['Name'];
            $hexCode = $color['Hex'];
            echo "<div style='background-color: $hexCode;'> $colorName </div>";
        }      
    }    
    ?>
</body>
</html>
<?php include 'assets/includes/getTime.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    
</head>
<body class=<?php echo"$timeOfDay"?>>
    <div id="centerText">
        <h1>Goede <?php echo"$timeOfDay"?> </h1>
        <h1>Het is nu <?php echo"$dateTime"?></h1>
    </div>
</body>
</html>
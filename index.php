<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imgUrl = "";
        $name = "unknown name";
        if (!empty($_GET["name"])) {
            $raw = file_get_contents("resurs.json");
            $resources = json_decode($raw, true);
            foreach ($resources as $i) {
                if ($_GET["name"] == $i["name"]) {
                    $imgUrl = $i["url"];
                    $name = $i["name"];
                } 
            }
        } else {
            $name = "enter a name";
        }
        echo '<h2>'.$name.'</h2>';
        echo "<img src='$imgUrl'>"
    ?>
</body>
</html>

 

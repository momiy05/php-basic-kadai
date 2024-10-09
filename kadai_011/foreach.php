<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>kadai_005</title>
    </head>
    <body>
        <p>
        <?php
        $array = ["名前"=>"玉ねぎ","値段"=>"200","産地"=>"北海道"];
        foreach($array as $key => $val){
            echo "{$key}:{$val}<br>";
        }
        ?>
        </p>
    </body>
</html>
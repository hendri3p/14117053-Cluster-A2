<!DOCTYPE htm>
<html lang="en">
<html>
    <head>
        <h2>Mencari bilangan prima</h2>
        <title>Latihan 3</title>
    </head>
    <body>
        <?php
            echo "Bilangan prima dari 1-50 : <br>";
            for($i=2; $i<=50; $i++){
                $prima = TRUE;
                for($j=2; $j<$i; $j++){
                    if($i%$j==0){
                        $prima = FALSE;
                        break;
                    }
                }
                if($prima){
                    echo $i ." ";
                }
            }
        ?>
    </body>
</html>
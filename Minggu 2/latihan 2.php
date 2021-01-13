<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <h2>Mengurutkan data acak</h2>
    <title>Latihan 2</title>
</head>
<body>
    <?php
        $nama = [
            "lanirne", "fulan", "alexander", "napoleon", "kifuat", "samid", "budi", "bagus", "gusti", "nugroho"
        ];
        echo "Data acak: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
        echo "<br>";
        sort($nama);
        echo "Data terurut: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
    ?>    
</body>
</html>
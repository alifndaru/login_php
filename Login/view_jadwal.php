<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> data barang </h3>

    <table border="1">
    <tr>
    <th> id   </th>
    <th> Nama </th>
    <th> date </th>
    <th> status</th>
    </tr>

    <?php
        include 'config.php';
        $id=1;
        $ambildata = mysqli_query($conn,"select * from demo");
        while ($tampil = mysqli_fetch_array($ambildata)){
        echo"<tr>";
        echo "<td> .$id</td>";
        echo "<td> .$tampil[name].</td>";
        echo "<td> .$tampil[date].</td>";
        echo "
        <td>
            <a href="form-edit.php?id=.$tampil[id].">Edit</a> |
            <a href="hapus.php?id=.$tampil[id].">Hapus</a>
        </td>
        <tr>";
        $id++;
    }




    ?>
</body>
</html>
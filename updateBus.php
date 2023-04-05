<?php 
    include('function.php');

    $id = $_GET["id_bus"];
    $bus = showData("SELECT * FROM bus WHERE id_bus=$id")[0];

    if(isset($_POST["submit"])){
        if (updateBus($_POST) > 0){
            echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data Gagal Diubah!');
            </script>
        ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>

    <h1>Update Data Bus</h1>
    <form action="" method="post">
        <div class="mb-3">
            <input type="hidden" name="id_bus" class="form-control" id="id_bus" value="<?= $bus["id_bus"]; ?>">
        </div>
        <div class="mb-3">
            <label for="plat" class="form-label">Plat</label>
            <input type="text" name="plat" class="form-control" id="plat" value="<?= $bus["plat"]; ?>">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status" value="<?= $bus["status"]; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </form>
</body>

</html>
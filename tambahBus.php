<?php 
    include('function.php');

    if(isset($_POST["submit"])){
        if (tambahBus($_POST) > 0){
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
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
    <title>Tambah Data Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>

    <h1>Tambah Data Bus</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="plat" class="form-label">Plat</label>
            <input type="text" name="plat" class="form-control" id="plat">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status">
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </form>
</body>

</html>
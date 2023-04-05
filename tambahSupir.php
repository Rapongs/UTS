<?php 
    include('function.php');

    if(isset($_POST["submit"])){
        if (tambahSupir($_POST) > 0){
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'supir.php';
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
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="no_sim" class="form-label">No SIM</label>
            <input type="text" name="no_sim" class="form-control" id="no_sim">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </form>
</body>

</html>
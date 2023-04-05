<?php 
    include ('function.php');
    $driver = showData("SELECT * FROM driver");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Trans UPN</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Trans UPN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Trans UPN</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.php">Bus</a></li>
                                <li><a class="dropdown-item" href="supir.php">Supir</a></li>
                                <li><a class="dropdown-item" href="kondektur.php">Kondektur</a></li>
                                <li><a class="dropdown-item" href="transUPN.php">Jarak dan Tanggal</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pendapatan
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="gajiSupir.php">Supir</a></li>
                                <li><a class="dropdown-item" href="gajiKondektur.php">Kondektur</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data Bus Trans UPN
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.php">Semua Data</a></li>
                                <li><a class="dropdown-item" href="busAktif.php">Aktif/Beroperasi</a></li>
                                <li><a class="dropdown-item" href="busCadangan.php">Cadangan</a></li>
                                <li><a class="dropdown-item" href="busRusak.php">Rusak/Perbaikan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tambah Data
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Bus</a></li>
                                <li><a class="dropdown-item" href="#">Supir</a></li>
                                <li><a class="dropdown-item" href="#">Kondektur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Data Bus -->
    <br><br><br>
    <h1>Data Supir</h1>
    <table class="table table-bordered border-black" style="margin-top: 30px;">
        <tr style="background-color: #454545; color: white;">
            <th>ID Supir</th>
            <th>Update | Delete</th>
            <th>Nama</th>
            <th>No SIM</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($driver as $dataDriver): ?>
        <tr style="background-color:#D8D8D8;">
            <td><?= $dataDriver["id_driver"];  ?></td>
            <td style="padding: 10px;"><a style="color: black;"
                    href="updateSupir.php?id_driver=<?=$dataDriver["id_driver"]; ?>">Update</a> | <a
                    style="color: black;" href="hapusSupir.php?id_driver=<?=$dataDriver["id_driver"]; ?>">Delete</a>
            </td>
            <td><?= $dataDriver["nama"];  ?></td>
            <td><?= $dataDriver["no_sim"];  ?></td>
            <td><?= $dataDriver["alamat"];  ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
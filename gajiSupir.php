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
    <form action="gajiSupir.php" method="get">
        <label for="bulan">Filter berdasarkan bulan:</label>
        <select class="custom-select" name="bulan" required="required">
            <option value="">Pilih Salah Satu</option>
            <?php 
                 $getDriver = "select driver.id_driver,sum(jumlah_km) as jumlah_km,tanggal,nama,no_sim,alamat,month(tanggal) as bulan from trans_upn join driver on trans_upn.id_driver = driver.id_driver group by  month(tanggal) order by month(tanggal)"; 
                 $driverList = mysqli_query($conn,$getDriver);
              
                while($getDriver = mysqli_fetch_array($driverList)): ?>
            <option value="<?php echo $getDriver["bulan"]?>"><?php echo $getDriver["bulan"]?></option>
            <?php endwhile ?>
        </select>
        <button type="submit">filter</button>
    </form>
    <form action="gajiSupir.php" method="get">
        <button type="submit">reset</button>
    </form>
    <table class="table table-bordered border-black" style="margin-top: 30px;">
        <tr style="background-color: #454545; color: white;">
            <th>ID Supir</th>
            <th>Nama</th>
            <th>No SIM</th>
            <th>Alamat</th>
            <th>Bulan Ke-</th>
            <th>Tanggal</th>
            <th>Total KM</th>
            <th>Pendapatan</th>
        </tr>
        <?php 
            $query="";
            if (isset($_GET['bulan'])) {
                $query = "select driver.id_driver,sum(jumlah_km) as jumlah_km,tanggal,nama,no_sim,alamat,month(tanggal) as bulan from trans_upn join driver on trans_upn.id_driver = driver.id_driver where month(tanggal) = ".$_GET['bulan'] ." group by trans_upn.id_driver, month(tanggal) ;" ;               
            } else {
                $query = "select driver.id_driver,sum(jumlah_km) as jumlah_km,tanggal,nama,no_sim,alamat,month(tanggal) as bulan from trans_upn join driver on trans_upn.id_driver = driver.id_driver group by trans_upn.id_driver, month(tanggal)";             
            }    
            $result = mysqli_query($conn,$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>
        <tr style="background-color:#D8D8D8;">
            <td><?= $data["id_driver"];  ?></td>
            <td><?= $data["nama"];  ?></td>
            <td><?= $data["no_sim"];  ?></td>
            <td><?= $data["alamat"];  ?></td>
            <td><?= $data["bulan"];  ?></td>
            <td><?= $data["tanggal"];  ?></td>
            <td><?= $data["jumlah_km"];  ?></td>
            <td><?= $data["jumlah_km"]*3000;  ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
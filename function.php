<?php 
    $conn = mysqli_connect("localhost","root","","transupn");

    function showData($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambahBus($data){
        global $conn;

        $id = $data["id_bus"];
        $plat = $data["plat"];
        $status = $data["status"];

        $query = "INSERT INTO bus(id_bus, plat, status) VALUES('','$plat','$status')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function tambahSupir($data){
        global $conn;

        $id = $data["id_driver"];
        $nama = $data["nama"];
        $sim = $data["no_sim"];
        $alamat = $data["alamat"];

        $query = "INSERT INTO driver(id_driver, nama, no_sim, alamat) VALUES('','$nama','$sim','$alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function tambahKondektur($data){
        global $conn;

        $id = $data["id_kondektur"];
        $nama = $data["nama"];

        $query = "INSERT INTO kondektur(id_kondektur, nama) VALUES('','$nama')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapusBus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM bus WHERE id_bus=$id");

        mysqli_affected_rows($conn);
    }

    function hapusSupir($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM driver WHERE id_driver=$id");

        mysqli_affected_rows($conn);
    }

    function hapusKondektur($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM kondektur WHERE id_kondektur=$id");

        mysqli_affected_rows($conn);
    }

    function hapusTransUpn($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM trans_upn WHERE id_trans_upn=$id");

        mysqli_affected_rows($conn);
    }

    function updateBus($data){
        global $conn;

        $id = $data["id_bus"];
        $plat = $data["plat"];
        $status = $data["status"];

        $query = "UPDATE bus SET
                    plat = '$plat',
                    status = '$status'
                    WHERE id_bus=$id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>
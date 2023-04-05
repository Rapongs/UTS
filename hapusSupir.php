<?php 
    include ('function.php');

    $id = $_GET["id_driver"];

    if(hapusSupir($id) > 0){
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'supir.php';
        </script>
    ";
    } else{
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'supir.php';
        </script>
    ";
    }
?>
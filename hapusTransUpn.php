<?php 
    include ('function.php');

    $id = $_GET["id_trans_upn"];

    if(hapusTransUpn($id) > 0){
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'TransUPN.php';
        </script>
    ";
    } else{
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'TransUPN.php';
        </script>
    ";
    }
?>
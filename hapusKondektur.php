<?php 
    include ('function.php');

    $id = $_GET["id_kondektur"];

    if(hapusKondektur($id) > 0){
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'kondektur.php';
        </script>
    ";
    } else{
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'kondektur.php';
        </script>
    ";
    }
?>
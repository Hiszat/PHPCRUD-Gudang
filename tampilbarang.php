<?php
    include("koneksi.php");
?>
<table align="center" border="1">
    <tr>
        <td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Jumlah</td>
        <td>Harga Beli</td>
        <td>Harga Jual</td>
    </tr>
    <?php
        $result = mysqli_query($konek, "SELECT * FROM barang");
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $row['kode_barang']?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td><?= $row['harga_beli'] ?></td>
                    <td><?= $row['harga_jual'] ?></td>
                </tr>
                <?php
            }
        }
    ?>
</table>
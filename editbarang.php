<?php
    include("koneksi.php");
    $result = mysqli_query($konek, "SELECT * FROM barang WHERE kode_barang='$_GET[kode_barang]'");
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        { ?>
        
        
        <?php }
    }
?>


<form action="updatebarang.php" method="post">
    <table align="center">
        <tr>
            <td>Kode Barang</td>
            <td>
                <input type="text" name="kode_barang" id="">
            </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>
                <input type="text" name="nama_barang" id="">
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>
                <input type="text" name="jumlah" id="">
            </td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>
                <input type="text" name="harga_jual" id="">
            </td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>
                <input type="text" name="harga_beli" id="">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
            <td>
                <button  type="reset">Reset</button>
            </td>
        </tr>
    </table>
</form>
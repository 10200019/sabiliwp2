<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<style>
    fieldset {
    width: 40%;
    margin: 20px auto;
    border-radius: 5px;
    }

    select {
        width: 100%;
        }
</style>

</body>
    <fieldset>
        <legend>output transaksi</legend>

            <table>
                <tr>
                    <th>NAMA PEMBELI</th>
                        <td>:</td>
                        <td>
                        <?= $nama; ?>
                        </td>
                    </tr>

                    <tr>
                            <th>NOMOR HP</th>
                            <td>:</td>
                            <td>
                            <?= $nhp; ?>
                            </td>
                        </tr>

                     <tr>
                            <th>MEREK SEPATU</th>
                            <td>:</td>
                            <td>
                            <?= $merk; ?>
</td>
</tr>
                     <tr>
                            <th>UKURAN SEPATU</th>
                            <td>:</td>
                            <td>
                            <?= $ukuran; ?>
</td>
</tr>
                        <tr>
                            <th>HARGA</th>
                            <td>:</td>
                            <td>
                            <?= $harga; ?>
</td>
</tr>

        <tr>
            <td colspan="3" align="center">
            <hr>
            <a href="<?= base_url('Sepatu');?>">kembali</a>
       </td>
     </tr>


</table>
</fieldset>
</body>

</html>
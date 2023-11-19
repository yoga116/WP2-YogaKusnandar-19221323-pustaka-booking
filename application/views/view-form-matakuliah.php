<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Form Input Data Mata Kuliah</title>
</head>

<body>

    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>" placeholder="Required">
                    </td>
                    <td><?php echo form_error('kode'); ?></td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="type" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" placeholder="Required">
                    </td>
                    <td><?php echo form_error('nama'); ?></td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                    <td><?php echo form_error('sks'); ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="sumbit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
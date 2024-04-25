<html>

<head></head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Program Kerja</td>
                <td>Surat Keterangan</td>
            </tr>
            <?php foreach ($proker[0] as $prokerKey) : ?>
                <tr>
                    <td><?= $prokerKey["nomorProgram"] ?></td>
                    <td><?= $prokerKey["namaProgram"] ?></td>
                    <td><?= $prokerKey["suratKeterangan"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>
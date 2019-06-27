<a href="form1.html">Kembali ke Form</a>
<h1>Data Mahasiswa</h1>
<table border="1">
    <tr>
        <td>NIM</td>
        <td><?= $_POST["nim"] ?></td>
    </tr>
    <tr>
        <td>Nama Mahasiswa</td>
        <td><?= $_POST["nama"] ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td><?= $_POST["prodi"] ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?= $_POST["jekel"] ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?= $_POST["alamat"] ?></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><?= $_POST["foto"] ?></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td><?= (isset($_POST["memasak"]) ? $_POST["memasak"] : "") .
" ".(isset($_POST["membaca"]) ? $_POST["membaca"] : "") . " "
. (isset($_POST["main-bola"]) ? $_POST["main-bola"] : "") ?></td>
    </tr>
</table>
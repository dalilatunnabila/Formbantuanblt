<html>
    <head>
</head>
<body>
    <h1>Form Bantuan BLT</h3>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldseat>
                <p>
                    <label for="Nama_lengkap">Nama lengkap:</label>
                    <input type="text" name="Nama_lengkap"/>
                </p>
                <p>
                    <label for="jb">Jenis Bantuan:</label>
                    <label><input type="radio" name="jb" Value="Tunai">Tunai</label>
                    <label><input type="radio" name="jb" Value="Non Tunai">Non Tunai</label>
                    <label><input type="radio" name="jb" Value="Beras">Beras</label>
                    <label><input type="radio" name="jb" Value="Minyak">Minyak</label>
                    <label><input type="radio" name="jb" Value="Gula">Gula</label>
                </p>
                <p>
                    <input type="submit" name="kirim_data" Value="kirim_data"/>
                </p>
</fieldseat>
</form>
</body>
</html>
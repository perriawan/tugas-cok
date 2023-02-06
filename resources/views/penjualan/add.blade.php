<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>penjualan</title>
</head>
<body>
    <form action="/penjualan/store" method="POST">
        @csrf
        <table border="0">
            <tr>
                <td>nama makanan :</td>
                <td><input type="text" name="nama_makanan" placeholder="nama makanan"></td>
            </tr>
            <tr>
                <td>Harga :</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>stok :</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="simpan"></td>
                <td><input type="reset" name="reset" value="batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>
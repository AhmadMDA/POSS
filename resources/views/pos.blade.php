<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi POS</title>
    <!-- Tambahkan stylesheet atau link ke framework CSS di sini -->
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h1>Halaman Transaksi POS</h1>
    
    <!-- Form atau elemen transaksi POS -->
    <form action="/pos/process" method="POST">
        @csrf
        <label for="product">Produk:</label>
        <select name="product" id="product">
            
            <option value="nasi-goreng">Nasi Goreng</option>
            <option value="mie-goreng">Mie Goreng</option>
            <option value="ayam-goreng">Ayam Goreng</option>
           
        </select>
        <br>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <br>
        <button type="submit">Tambahkan ke Keranjang</button>
    </form>

    <!-- Tampilkan keranjang belanja atau ringkasan transaksi -->
    <h2>Keranjang Belanja</h2>
    <ul>
        <!-- Tampilkan daftar item yang sudah ditambahkan ke keranjang -->

        <li>Nasi Goreng (x2)</li>
        <li>Mie Goreng (x1)</li>
    </ul>

    

    <!--  -->

</body>
</html>

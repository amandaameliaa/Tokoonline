</html><style>
    body h3{
        margin-top:50px;
       
    }
    
    body form {
padding: 10% 30%;
background-image: url(usaha-1.jpg);
border-radius: 10px;

    }
    .button{
        margin-top: 30px;
        padding: 5px 10%;
        color: brown;
        border-radius: 8px; 
        border-style: none;
        font-weight:500;
        font-size: 30px;
        margin-bottom: 10px;

}
.button:hover{
    background-color:burlywood;
    color: darkgreen;
}
form {
    font-size: 20px;
    font-weight: 500;
  padding: 10px 2px;
    padding-top: 10px;
    color: whitesmoke;
}
    .foto{
        margin-top: 10px;
        background-color: whitesmoke;
        border-radius: 8px;
    }
    input[type="file"]{
        background-color: burlywood;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <title>Ubah Produk</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <center><h3>Ubah Produk</h3></center>
    <form action="proses_ubah_produk.php" method="post">
        <input type="hidden" name="id_produk" value= "<?=$dt_siswa['id_produk']?>">
        Nama Produk :
        <input type="text" name="nama_produk" value= "<?=$dt_siswa['nama_produk']?>" class="form-control">
        Deskripsi : 
        <textarea name="deskripsi" class="form-control"
        rows="4"><?=$dt_siswa['deskripsi']?></textarea>
        Harga : 
        <input type="number" name="harga" value="<?=$dt_siswa['harga']?>" class="form-control">
        Foto : 
        <input type="file" name="foto" value="<?=$dt_siswa['foto_produk']?>" class="form-control"> 
       <center> <input style="background-color: brown;
       margin-top:100px;
       border:none;
       padding:10px 100px;
       border-radius:8px" type="submit" name="simpan" value="Ubah Produk" class="btn btn-primary"></center>
    </form>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
</body>
</html>
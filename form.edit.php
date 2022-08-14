<?php 
//Koneksi Database
include 'koneksi.php';
//ambil data di URL
$id = $_GET["id_mhs"];
//query data mahasiswa berdasarkan ID
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
// Proses pengambilan data MySQL menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
$row = mysqli_fetch_array($mahasiswa);
// Membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA', 'TEKNIK ELEKTRO', 'REKAMEDIS');
// Membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // Apabila value dari radio sama dengan yang di input
    $result = $value==$input? 'checked' : '';
    return $result;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Ubah Data </title>
</head>

<body>
    <!-- Method & URL -->
    <form method="post" action="edit.php"> <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" value="<?php echo $row['nim'];?>" name="nim">
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td> <input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L"
                        <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P"
                        <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN <?php echo $row['jurusan'];?></td>
                <td>
                    <select name="jurusan">
                        <?php
                            foreach ($jurusan as $j){
                                echo "<option value='$j' ";
                                echo $row['jurusan']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td> <input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="index1.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
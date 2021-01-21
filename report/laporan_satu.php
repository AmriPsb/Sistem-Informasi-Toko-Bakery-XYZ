<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Roti Kadaluarsa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_daftar WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Toko Bakery XYZ </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>Data Roti Kadaluarsa</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Kode Roti</td> <td><?= $data['kode_roti'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Roti</td> <td><?= $data['nama_roti'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Roti</td> <td><?= $data['jenis_roti'] ?></td>
                                </tr>
								<tr>
                                    <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Toko Bakery XYZ<strong></u><br>
                                        BPOM RI.007
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
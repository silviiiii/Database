<?php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 20px">
                <div class="card">
                    <div class="card-header"><center><b>Daftar Biodata</b></center></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="align:center">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>AGAMA</th>
                                    <th>UMUR</th>
                                    <th colspan="3"><center>AKSI</center></th>
                                </tr>
                                <?php 
                                    $bio = new Biodata();
                                    $no = 1;
                                    foreach ($bio->index() as $data){
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['umur']; ?></td>
                                    <td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-info btn-sm active" role="button" aria-pressed="true">Show</a></td>
                                    <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning btn-sm active" role="button" aria-pressed="true">Edit</a></td>
                                    <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" class="btn btn-outline-danger btn-sm active" role="button" aria-pressed="true">Hapus</a></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <a class="btn btn-outline-success" href="../biodata/create.php">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>
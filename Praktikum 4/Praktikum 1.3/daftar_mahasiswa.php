<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Daftar <b>Mahasiswa</b></h2></div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Tambah Mahasiswa</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Thn Angkatan</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "class_mahasiswa.php";
                            $Mahasiswa1 = new Mahasiswa(02011,"Faiz Fikri");
                            $Mahasiswa1->nama = "Faiz Fikri";
                            $Mahasiswa1->nim = 02011;
                            $Mahasiswa1->prodi = "TI";
                            $Mahasiswa1->thn_angkatan = 2012;
                            $Mahasiswa1->ipk = 3.8;

                            $Mahasiswa2 = new Mahasiswa(02012,"Alissa Khairunnisa");
                            $Mahasiswa2->nama = "Alissa Khairunnisa";
                            $Mahasiswa2->nim = 02012;
                            $Mahasiswa2->prodi = "TI";
                            $Mahasiswa2->thn_angkatan = 2012;
                            $Mahasiswa2->ipk = 3.9;

                            $Mahasiswa3 = new Mahasiswa(01011,"Rosalie Naurah");
                            $Mahasiswa3->nama = "Rosalie Naurah";
                            $Mahasiswa3->nim = 01011;
                            $Mahasiswa3->prodi = "SI";
                            $Mahasiswa3->thn_angkatan = 2010;
                            $Mahasiswa3->ipk = 3.46;

                            $Mahasiswa4 = new Mahasiswa(01012,"Defghi Muhammad");
                            $Mahasiswa4->nama = "Defghi Muhammad";
                            $Mahasiswa4->nim = 01012;
                            $Mahasiswa4->prodi = "SI";
                            $Mahasiswa4->thn_angkatan = 2010;
                            $Mahasiswa4->ipk = 3.2;

                            $DaftarMahasiswa = array($Mahasiswa1, $Mahasiswa2, $Mahasiswa3, $Mahasiswa4);

                            $no = 1;
                            foreach($DaftarMahasiswa as $ListMahasiswa){
                                echo '<tr>';
                                echo '    <td>'.$no++.'</td>';
                                echo '    <td>'.$ListMahasiswa->nim.'</td>';
                                echo '    <td>'.$ListMahasiswa->nama.'</td>';
                                echo '    <td>'.$ListMahasiswa->prodi.'</td>';
                                echo '    <td>'.$ListMahasiswa->thn_angkatan.'</td>';
                                echo '    <td>'.$ListMahasiswa->ipk.'</td>';
                                echo '    <td>'.$ListMahasiswa->predikat_ipk().'</td>';
                                echo '    <td>';
                                echo '        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>';
                                echo '        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>';
                                echo '        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>';
                                echo '    </td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
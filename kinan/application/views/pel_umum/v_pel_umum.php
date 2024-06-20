 <!-- Begin Page Content -->
<div class="container-fluid">     
    <div class="card shadow bg-info pt-3">
        <div class="container">
            <h3 class="text-title text-light"> PEMERIKSAAN UMUM</h3>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <a href="<?php echo base_url()."index.php/pel_umum/add"; ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
        </div>
    
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center">No</th>
                            <th style="text-align: center;">Id Registrasi</th>
                            <th style="text-align: center;">Tanggal Periksa</th>
                            <th style="text-align: center;">Id Pasien</th>
                            <th style="text-align: center;">Nama Pasien</th>
                            <th style="text-align: center;">Keluhan</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach($data_pel_biasa as $dpb){?>
                            <tr style="font-size: 14px">
                                <td style="text-align: center;"><?php echo $no++; ?></td>
                                <td style="text-align: center;"><?php echo $dpb['id_registrasi']; ?></td>
                                <td style="text-align: center;"><?php echo date('d-m-Y',strtotime($dpb['tgl_periksa'])); ?></td>
                                <td style="text-align: center;"><?php echo $dpb['id']; ?></td>
                                <td style="text-align: center;"><?php echo $dpb['nama_pasien']?></td>
                                <td style="text-align: center;"><?php echo $dpb['keluhan']?></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url()."pel_umum/detail/".$dpb['id']; ?>" style="text-decoration: none;" title="Informasi Lengkap"><button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-list"></i></button>
                                    <a href="<?php echo base_url()."pel_umum/edit/".$dpb['id']; ?>" style="text-decoration: none;" title="Ubah Data"><button type="button" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                    <a href="<?php echo base_url()."pel_umum/delete/".$dpb['id']; ?>" style="text-decoration: none;" title="Hapus Data"><button type="button" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin anda akan menghapus data ini ?');"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
<!-- /.container-fluid -->
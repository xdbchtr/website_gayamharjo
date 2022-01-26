<div class="col-md-12">
    <div class="card card-purple">
        <div class="card-header">
            <h3 class="card-title"> Data Pengguna </h3>

            <div class="card-tools">
                <a href="<?= base_url('data/add') ?>" type="button" class="btn btn-purple btn-sm"><i class="fas fa-plus"></i> Tambah </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sukses!';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $dt) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $dt->name ?></td>
                            <td><?= $dt->email ?></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#delete<?= $dt->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<?php foreach ($data as $dt) { ?>
    <div class="modal fade" id="delete<?= $dt->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $dt->name ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>Apakah Anda Yakin ingin Menghapus Data Ini..?</h5>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('data/delete/' . $dt->id) ?>" class="btn btn-danger">Hapus</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>
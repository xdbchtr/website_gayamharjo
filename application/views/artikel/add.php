<?php echo form_open_multipart('artikel/tambah') ?>
<div class="col-md-8">
    <!-- /. tools -->
    <!-- /.card-header -->
    <div class="card-body pad">
        <div class="mb-3">
            <div class="form-group">
                <input type="text" name="head" class="form-control" placeholder="Head" value="">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <input type="text" name="subhead" class="form-control" placeholder="SubHead" value="">
            </div>
        </div>
        <div class="mb-3">
            <textarea name="isi" class="textarea" placeholder="Tulis Artikel Disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= set_value('deskripsi') ?></textarea>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label> Gambar Artikel </label>
                    <input type="file" name="namagambar" class="form-control" id="preview_gambar" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        <a href="<?= base_url('artikel') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <!-- /.col-->
</div>
<?php echo form_close() ?>




<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>
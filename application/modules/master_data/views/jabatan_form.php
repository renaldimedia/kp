<h3 class="page-header">Form Jabatan</h3>
<div class="actions">
    <a href="<?php echo $back; ?>"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
</div>

<?php echo form_open($action, array('class' => 'form-horizontal row-form'));?>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label input-sm">Nama Jabatan</label>
        <div class="col-sm-3">
            <input type="text" name="nama" value="<?php echo $nm ?>" class="form-control input-sm" placeholder="Nama Jabatan" required>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 control-label input-sm">Keterangan</label>
        <div class="col-sm-3">
            <input type="text" name="keterangan" value="<?php echo $ket ?>" class="form-control input-sm" placeholder="Keterangan" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn btn-primary btn-sm button-blue"> Simpan </button>
            <button type="submit" class="btn btn btn-primary btn-sm button-red"> Reset </button>
        </div>
    </div>
    <?php echo form_close() ?>

<h3 class="page-header">Data Jabatan</h3>
<div class="actions">
    <a href="<?php echo $add; ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add Data</a>
</div>
<div class="block-table table-sorting clearfix">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
        <th width="10%">no</th>
        <th width="60%">jabatan</th>
        <th width="20%">keterangan</th>
        <th width="10%">aksi</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($grid as $record) :
        ?>
        <tr>
            <td align="center"><?php echo $no; ?></td>
            <td><?php echo $record->nama_jabatan; ?></td>
            <td align="center"><?php echo $record->keterangan; ?></td>
            <td align="center">
                <a href=<?php echo site_url('/master_data/jabatan/edit'.$record->id_jabatan); ?> title="Edit Data">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php $no++;
        endforeach; ?>

    </tbody>
</table>
</div>

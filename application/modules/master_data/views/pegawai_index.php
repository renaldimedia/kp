<h3 class="page-header">Data Pegawai</h3>
<div class="actions">
    <a href="<?php echo $add; ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add Data</a>
</div>
<div class="block-table table-sorting clearfix">
<table cellpadding="0" cellspacing="0" class="table" id="datatables">
    <thead>
        <th width="5%%" align="center">no</th>
        <th width="20%" align="center">NIP</th>
        <th width="30%" align="center">Nama</th>
        <th width="30%" align="center">Jabatan</th>
        <th width="10%" align="center">aksi</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($grid as $record) :
        ?>
        <tr>
            <td align="center"><?php echo $no; ?></td>
            <td align="center"><?php echo $record->nip; ?></td>
            <td align="center"><?php echo $record->nama; ?></td>
            <td align="center"><?php echo $record->nama_jabatan; ?></td>

            <td align="center">
                <a href=<?php echo site_url('/master_data/pegawai/edit/'.$record->id); ?> title="Edit Data">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
        </tr>
        <?php $no++;
        endforeach; ?>

    </tbody>
</table>
</div>

<h3 class="page-header">Data Pegawai</h3>
<div class="actions">
    <a href="<?php echo $add; ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add Data</a>
</div>
<div class="block-table table-sorting clearfix">
<table cellpadding="0" cellspacing="0" class="table" id="datatables">
    <thead>
        <th width="5%" align="center">no</th>
        <th width="15%" align="center">NIP</th>
        <th width="30%" align="center">Nama</th>
        <th width="30%" align="center">Jabatan</th>
        <th width="15%" align="center">aksi</th>


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
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a>
                <!-- Button trigger modal -->
                <a data-toggle="modal" href="#myModal" data-target="#myModal" data-whatever="<?php echo $record->nip; ?>" data-id="<?php echo $record->id_pegawai; ?>"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                  Detail
                </a>
            </td>

        </tr>
        <?php $no++;
        endforeach; ?>

    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
$('#myModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var nip = button.data('whatever'); // Extract info from data-* attributes
    var id = button.data('id');
    var baseUrl = 'http://localhost/simpeg/master_data/pegawai/index_by_id/';
    $.getJSON(baseUrl + id, function(datas) {
        //debug only
        // console.log(Object.keys(datas));
        // console.log(Object.values(datas));
        // alert('Fetched ' + datas.length + ' items!');
        var data = [];
            $.each( Object.values(datas.nama), function() {
                data.push( datas );
            });
        console.log(Object.values(data[0]));
    //     var items = [];
    //
    //     $.each( data[0], function( key, val ) {
    //         items.push( "<li id='" + data[0].key + "'>" + val + "</li>" );
    //     });
    //
    //   $( "<ul/>", {
    //     "class": "my-new-list",
    //     html: items.join( "" )
    // }).appendTo( ".modal-body" );
})
$('#myModal').on('hide.bs.modal', function (event) {
    $(".modal-body").html("")
})


  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Detail Pegawai Dengan NIP ' + nip)
})
</script>

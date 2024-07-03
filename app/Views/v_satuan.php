<div class="col-md-12">
      <div class="card card-primary">
            <div class="card-header">
                  <h3 class="card-title"><?= $subjudul ?></h3>
                  <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus "></i> Tambah Data
                        </button>
                  </div>

            </div>

            <div class="card-body">
                  <?php
                  if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                        echo session()->getFlashdata('pesan');
                        echo '</h5></div>';
                  }
                  ?>
                  <table class="table table-bordered">
                        <thead>
                              <tr class="text-center">
                                    <th width="50px">No</th>
                                    <th>Satuan</th>
                                    <th width="91px">Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php $no = 1;
                              foreach ($satuan as $key => $value) { ?>
                                    <tr>
                                          <td><?= $no++ ?></td>
                                          <td><?= $value['nama_satuan'] ?></td>
                                          <td>
                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-data<?= $value['id_satuan'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-data<?= $value['id_satuan'] ?>"><i class="fas fa-trash"></i></button>
                                          </td>
                                    </tr>
                              <?php } ?>
                        </tbody>
                  </table>
            </div>

      </div>
</div>

<div class="modal fade" id="add-data">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Tambah Data <?= $subjudul ?> </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <?php echo form_open('Satuan/InsertData') ?>
                  <div class="modal-body">
                        <div class="form-grup">
                              <label for="">Nama Satuan</label>
                              <input name="nama_satuan" class="form-control" placeholder="satuan" required>
                        </div>

                  </div>
                  <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Save</button>
                  </div>
                  <?php echo form_close() ?>
            </div>

      </div>
      <?php foreach ($satuan as $key => $value) { ?>
</div>
<div class="modal fade" id="edit-data<?= $value['id_satuan'] ?>">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Edit Data <?= $subjudul ?> </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <?php echo form_open('Satuan/UpdateData/' . $value['id_satuan']) ?>
                  <div class="modal-body">
                        <div class="form-grup">
                              <label for="">Nama Satuan</label>
                              <input name="nama_satuan" value="<?= $value['nama_satuan'] ?>" class="form-control" placeholder="satuan" required>
                        </div>

                  </div>
                  <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning btn-flat">Edit</button>
                  </div>
                  <?php echo form_close() ?>
            </div>

      </div>

</div>
<?php
      }
?>

<?php foreach ($satuan as $key => $value) { ?>
      </div>
      <div class="modal fade" id="delete-data<?= $value['id_satuan'] ?>">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h4 class="modal-title">Hapus Data <?= $subjudul ?> </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">
                              Apakah Anda Yakin Hapus <b><?= $value['nama_satuan'] ?></b> ..?

                        </div>
                        <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal">Close</button>
                              <a href="<?= base_url('Satuan/DeleteData/' . $value['id_satuan']) ?>" class="btn btn-danger btn-flat">Hapus</a>
                        </div>

                  </div>

            </div>

      </div>
<?php
}
?>
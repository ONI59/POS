<div class="col-md-12">
      <div class="card card-primary">
            <div class="card-header">
                  <h3 class="card-title"><?= $subjudul ?></h3>
                  <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data">
                              <i class="fas fa-plus"></i> Tambah Data
                        </button>
                  </div>
            </div>
            <div class="card-body">
                  <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5><i class="icon fas fa-check"></i>
                                    <?= session()->getFlashdata('pesan') ?>
                              </h5>
                        </div>
                  <?php endif; ?>

                  <?php if ($errors = session()->getFlashdata('errors')) : ?>
                        <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <?php foreach ($errors as $error) : ?>
                                    <p><?= esc($error) ?></p>
                              <?php endforeach ?>
                        </div>
                  <?php endif; ?>

                  <table id="example1" class="table table-bordered table-striped">
                        <thead>
                              <tr class="text-center">
                                    <th width="50px">No</th>
                                    <th>Kode/Barcode</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th width="100px">Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php $no = 1;
                              foreach ($produk as $key => $value) : ?>
                                    <tr>
                                          <td class="text-center"> <?= $no++ ?></td>
                                          <td class="text-center"> <?= $value['kode_produk'] ?></td>
                                          <td> <?= $value['nama_produk'] ?></td>
                                          <td class="text-center"> <?= $value['nama_kategori'] ?></td>
                                          <td class="text-center"> <?= $value['nama_satuan'] ?></td>
                                          <td class="text-right">Rp. <?= number_format($value['harga_beli'], 0) ?></td>
                                          <td class="text-right">Rp. <?= number_format($value['harga_jual'], 0) ?></td>
                                          <td class="text-center"> <?= $value['stok'] ?></td>
                                          <td class="text-center">
                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-data<?= $value['id_produk'] ?>">
                                                      <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-data<?= $value['id_produk'] ?>">
                                                      <i class="fas fa-trash"></i>
                                                </button>
                                          </td>
                                    </tr>
                              <?php endforeach; ?>
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
                  <?= form_open('Produk/InsertData') ?>
                  <div class="modal-body">
                        <div class="form-group">
                              <label for="">Kode Produk</label>
                              <input name="kode_produk" class="form-control" placeholder="Kode Produk" required>
                        </div>

                        <div class="form-group">
                              <label for="">Nama Produk</label>
                              <input name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                        </div>

                        <div class="form-group">
                              <label for="">Kategori</label>
                              <select name="id_kategori" class="form-control">
                                    <option value=""> -- Pilih Kategori -- </option>
                                    <?php foreach ($kategori as $key => $value) { ?>
                                          <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                                    <?php } ?>
                              </select>
                        </div>

                        <div class="form-group">
                              <label for="">Satuan</label>
                              <select name="id_satuan" class="form-control">
                                    <option value=""> -- Pilih Satuan -- </option>
                                    <?php foreach ($satuan as $key => $value) { ?>
                                          <option value="<?= $value['id_satuan'] ?>"><?= $value['nama_satuan'] ?></option>
                                    <?php } ?>
                              </select>
                        </div>

                        <div class="form-group">
                              <label for="">Harga Beli</label>
                              <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input name="harga_beli" id='harga_beli' class="form-control" placeholder="Harga Beli" required>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="">Harga Jual</label>
                              <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input name="harga_jual" id='harga_jual' class="form-control" placeholder="Harga Jual" required>
                              </div>
                        </div>

                        <div class="form-group">
                              <label for="">Stok</label>
                              <input name="stok" type="number" class="form-control" placeholder="Stok" required>
                        </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Save</button>
                  </div>
                  <?= form_close() ?>
            </div>
      </div>
</div>

<?php foreach ($produk as $key => $value) : ?>
      <div class="modal fade" id="edit-data<?= $value['id_produk'] ?>">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h4 class="modal-title">Edit Data <?= $subjudul ?> </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <?= form_open('Produk/UpdateData/' . $value['id_produk']) ?>
                        <div class="modal-body">
                              <div class="form-group">
                                    <label for="">Kode Produk</label>
                                    <input name="kode_produk" value="<?= $value['kode_produk'] ?>" class="form-control" placeholder="Kode Produk" required>
                              </div>

                              <div class="form-group">
                                    <label for="">Nama Produk</label>
                                    <input name="nama_produk" value="<?= $value['nama_produk'] ?>" class="form-control" placeholder="Nama Produk" required>
                              </div>

                              <div class="form-group">
                                    <label for="">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                          <option value=""> -- Pilih Kategori -- </option>
                                          <?php foreach ($kategori as $key => $kategoriValue) { ?>
                                                <option value="<?= $kategoriValue['id_kategori'] ?>" <?= $value['id_kategori'] == $kategoriValue['id_kategori'] ? 'selected' : '' ?>><?= $kategoriValue['nama_kategori'] ?></option>
                                          <?php } ?>
                                    </select>
                              </div>

                              <div class="form-group">
                                    <label for="">Satuan</label>
                                    <select name="id_satuan" class="form-control">
                                          <option value=""> -- Pilih Satuan -- </option>
                                          <?php foreach ($satuan as $key => $satuanValue) { ?>
                                                <option value="<?= $satuanValue['id_satuan'] ?>" <?= $value['id_satuan'] == $satuanValue['id_satuan'] ? 'selected' : '' ?>><?= $satuanValue['nama_satuan'] ?></option>
                                          <?php } ?>
                                    </select>
                              </div>

                              <div class="form-group">
                                    <label for="">Harga Beli</label>
                                    <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                          </div>
                                          <input name="harga_beli" id='harga_beli<?= $value['id_produk'] ?>' value="<?= $value['harga_beli'] ?>" class="form-control" placeholder="Harga Beli" required>
                                    </div>
                              </div>

                              <div class="form-group">
                                    <label for="">Harga Jual</label>
                                    <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                          </div>
                                          <input name="harga_jual" id='harga_jual<?= $value['id_produk'] ?>' value="<?= $value['harga_jual'] ?>" class="form-control" placeholder="Harga Jual" required>
                                    </div>
                              </div>

                              <div class="form-group">
                                    <label for="">Stok</label>
                                    <input name="stok" type="number" value="<?= $value['stok'] ?>" class="form-control" placeholder="Stok" required>
                              </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-flat">Save</button>
                        </div>
                        <?= form_close() ?>
                  </div>
            </div>
      </div>

      <div class="modal fade" id="delete-data<?= $value['id_produk'] ?>">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h4 class="modal-title">Delete Data <?= $subjudul ?> </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <?= form_open('Produk/DeleteData/' . $value['id_produk']) ?>
                        <div class="modal-body">
                              <p>Apakah anda yakin ingin menghapus data produk <b><?= $value['nama_produk'] ?></b>?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger btn-flat">Delete</button>
                        </div>
                        <?= form_close() ?>
                  </div>
            </div>
      </div>
<?php endforeach; ?>

<script>
      $(function() {
            $("#example1").DataTable({
                  "responsive": true,
                  "lengthChange": false,
                  "autoWidth": false,
                  "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                  "responsive": true,
            });

            new AutoNumeric('#harga_beli', {
                  currencySymbol: 'Rp ',
                  decimalCharacter: ',',
                  digitGroupSeparator: '.',
            });

            new AutoNumeric('#harga_jual', {
                  currencySymbol: 'Rp ',
                  decimalCharacter: ',',
                  digitGroupSeparator: '.',
            });
      });
</script>
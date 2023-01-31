<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($objek as $r) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $r["name"] ?></td>
                                <td><span class="tag tag-success">AKtif</span></td>
                                <td>
                                    <a class="btn  bg-info">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                    <a href="/berita/hapusKategori/<?= $r["id"] ?>" class="btn bg-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
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

    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/berita/tambahKategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kategori</label>
                        <input type="text" class="form-control" id="kategori" placeholder="masukkan kategori" name="name">
                    </div>
                    <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
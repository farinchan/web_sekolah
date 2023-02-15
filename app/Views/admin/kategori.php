<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->

        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Kategori</h5>
                <small class="text-muted float-end">Kategori Blog</small>
            </div>
            <div class="card-body">
                <form method="post" action="/Admin/berita/tambahKategori">
                    <?= csrf_field() ?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Kategori" name="nama">
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card">
            <h5 class="card-header">Light Table head</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Slug</th>
                            <th>Dibuat Pada</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1; ?>
                        <?php foreach ($Kategori as $r) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= htmlentities($r['name']) ?></strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $r['slug'] ?></strong></td>

                                <td><?= $r['createdAt']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $r['id']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="/admin/KategoriBlog/delete/<?= $r['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                                <div class="modal fade" id="exampleModal<?= $r['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="/admin/kategoriBlog/saveEdit/<?= $r['id']; ?>">
                                                <?= csrf_field() ?>
                                                <div class="modal-body">
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kategori</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nama" value="<?= $r['name']; ?>" placeholder="Kategori" name="nama">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Post Berita</h5>
                    <a href="/admin/artikel/tambah" class="btn btn-primary mb-3">
                        <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Artikel
                    </a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tanggal</th>
                                <th>View</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($artikel as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item["judul"] ?></td>
                                    <td><?= $item["author"] ?></td>
                                    <td><?= $item["tanggal"] ?></td>
                                    <td><?= $item["views"] ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <a type="button" class="btn btn-outline-secondary">
                                                <i class='tf-icons bx bx-info-circle'></i>
                                            </a>
                                            <a type="button" class="btn btn-outline-secondary">
                                                <i class='tf-icons bx bxs-edit'></i>
                                            </a>
                                            <a type="button" href="/admin/artikel/delete/<?= $item["id"] ?>" class="btn btn-outline-secondary">
                                                <i class='tf-icons bx bx-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection() ?>
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <form method="post" action="/admin/artikel/save" enctype="multipart/form-data">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Buat Artikel</h5>
                <small class="text-muted float-end">Kategori Blog</small>
            </div>
            <div class="card-body">

                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Artikel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Artikel" name="judul">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Description</label>
                    <div class="col-sm-10">
                        <textarea id="basic-default-message" class="form-control" placeholder="Masukkan Meta Description" aria-describedby="basic-icon-default-message2" name="deskripsi"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Isi</h5>
                        <small class="text-muted float-end">Isi Artikel</small>
                    </div>
                    <div class="card-body">
                        <textarea name="editor1" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Kategori</h5>
                        <small class="text-muted float-end">Kategori Blog</small>
                    </div>
                    <div class="card-body">
                        <div class="mt-2 mb-3">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar Thumbnail</label>
                                <div class="card mb-3">
                                    <img class="card-img-top img-preview" src="<?= base_url() ?>/thumbnail/preview-img.jpg" alt="Card image cap">
                                </div>
                                <input class="form-control" type="file" id="thumb" name="thumb" onchange="ImgPreview()">
                            </div>
                            <label for="largeSelect" class="form-label">Kategori</label>
                            <select id="largeSelect" class="form-select form-select-lg mb-3" name="kategori">
                                <option>Pilih Kategori</option>
                                <?php foreach ($KategoriBlog as $Kategori) : ?>
                                    <option value="<?= $Kategori['id'] ?>"><?= $Kategori['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    <span class="tf-icons bx bx-send"></span>&nbsp; Publish
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
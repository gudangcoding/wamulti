<div class="app-content">
    <link href="../assets/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="../assets/plugins/select2/css/select2.css" rel="stylesheet">
    <div class="content-wrapper">
        <div class="container">
            <h2 class="my">Auto responder</h2>

            <div class="card-header d-flex justify-content-between">
                <form action="" method="POST">

                    <button type="submit" name="deleteAll" class="btn btn-danger "><i class="material-icons-outlined">contacts</i>Hapus semua</button>
                </form>
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#selectNomor"><i class="material-icons-outlined">contacts</i>Generate Kontak</button>
                <div class="d-flex justify-content-right">
                    <form action="" method="POST">
                        <button type="submit" name="export" class="btn btn-warning "><i class="material-icons">download</i>Export (xlsx)</button>
                    </form>
                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#importExcel"><i class="material-icons-outlined">upload</i>Import (xlsx)</button>
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addNumber"><i class="material-icons-outlined">add</i>Tambah</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Daftar Nomor</h5>
                            <!-- <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#selectNomor"><i class="material-icons-outlined">contacts</i>Hapus semua</button>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#selectNomor"><i class="material-icons-outlined">contacts</i>Generate Kontak</button>
                            <div class="d-flex justify-content-right">
                                <form action="" method="POST">
                                    <button type="submit" name="export" class="btn btn-warning "><i class="material-icons">download</i>Export (xlsx)</button>
                                </form>
                                <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#importExcel"><i class="material-icons-outlined">upload</i>Import (xlsx)</button>
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addNumber"><i class="material-icons-outlined">add</i>Tambah</button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nomor</th>
                                        <th>Pesan Default</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- modal tambah data -->
<!-- Modal -->
<div class="modal fade" id="addNumber" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nomor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="keyword" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="nama" required>
                    <label for="nomor" class="form-label">Nomor</label>
                    <input type="number" name="number" class="form-control" id="nomor" required>
                    <label for="message" class="form-label">Default Pesan</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10" required></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nomor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST" enctype="multipart/form-data">

                    <p>Format harus xlsx dan berisi 3 tabel (Nama, nomor ,dan pesan)</p>
                    <label for="fileexcel" class="form-label">File xlsx</label>
                    <input type="file" name="fileexcel" class="form-control" id="fileexcel" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="import" class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="selectNomor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generate Kontak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST" enctype="multipart/form-data">

                    <p>Mau ambil kontak dari nomor yang mana ?</p>
                    <select name="nomor" id="" class="form-control" tabindex="-1" style="display: none; width: 100%">
                        <option value="6281322334545">6281322334545</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="generate" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function scan(nomor) {
        window.location = "scan.php?nomor=" + nomor
    }
</script>
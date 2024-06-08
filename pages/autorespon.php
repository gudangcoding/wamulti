<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <h2 class="my">Auto responder</h2>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Lists auto respond</h5>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addAutoRespond"><i class="material-icons-outlined">add</i>Tambah</button>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sender</th>
                                        <th>Keyword</th>
                                        <th>Media</th>
                                        <th>Respond</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

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
<div class="modal fade" id="addAutoRespond" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Auto Respond</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <select name="nomor" class="js-states form-control" tabindex="-1" style="display: none; width: 100%" required>
                        <option value="6281322334545">6281322334545</option>
                    </select>
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" name="keyword" class="form-control" id="keyword" required>
                    <label for="responmedia" class="form-label">Respond Media</label>
                    <input type="file" name="media" class="form-control" id="responmedia">
                    <div id="emailHelp" class="form-text">tidak wajib, *pdf,doc,jpg,png</div>
                    <label for="Respond pesan" class="form-label">Respond Pesan</label>
                    <input type="text" name="respond" class="form-control" id="Respond pesan" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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
<div class="app-container">
    <div class="search">
        <form>
            <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
    </div>
    <div class="app-header">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-nav" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                        </li>

                        <li class="nav-item dropdown hidden-on-mobile">
                            <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons-outlined">explore</i>
                            </a>

                        </li>
                    </ul>

                </div>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item hidden-on-mobile">
                            <a class="nav-link active" href="#">Applications</a>
                        </li>

                        <li class="nav-item hidden-on-mobile">
                            <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                            <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                <h6 class="dropdown-header">Notifications</h6>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <h2 class="my-5">Dashboard</h2>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card widget widget-stats">
                            <div class="card-body">
                                <div class="widget-stats-container d-flex">
                                    <div class="widget-stats-icon widget-stats-icon-primary">
                                        <i class="material-icons-outlined">contacts</i>
                                    </div>
                                    <div class="widget-stats-content flex-fill">
                                        <span class="widget-stats-title">Total nomor/kontak</span>
                                        <span class="widget-stats-amount">0</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card widget widget-stats">
                            <div class="card-body">
                                <div class="widget-stats-container d-flex">
                                    <div class="widget-stats-icon widget-stats-icon-warning">
                                        <i class="material-icons-outlined">message</i>
                                    </div>
                                    <div class="widget-stats-content flex-fill">
                                        <span class="widget-stats-title">Pesan Blast</span>

                                        <span class="widget-stats-info">0 Sukses</span>
                                        <span class="widget-stats-info">0 Gagal</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card widget widget-stats">
                            <div class="card-body">
                                <div class="widget-stats-container d-flex">
                                    <div class="widget-stats-icon widget-stats-icon-danger">
                                        <i class="material-icons-outlined">schedule</i>
                                    </div>
                                    <div class="widget-stats-content flex-fill">
                                        <span class="widget-stats-title">Pesan jadwal</span>

                                        <span class="widget-stats-info">0 Sukses</span>
                                        <span class="widget-stats-info">0 Gagal</span>
                                        <span class="widget-stats-info">0 Pending</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>List Devices</h5>
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addDevice"><i class="material-icons">add</i>Tambah </button>
                                <table class="table table-striped">
                                    <thead>
                                        <th>Nomor</th>
                                        <th>link Webhook</th>
                                        <th>status</th>
                                        <th>aksi</th>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>6281322334545</td>
                                            <td>https://wamulti.ptbit.net/pages/home.php</td>
                                            <td><span class="badge badge-danger">Disconnect</span></td>
                                            <td>
                                                <button type="button" class="btn btn-warning " onclick="scan('6281322334545')" style="font-size: 10px;"><i class="material-icons">qr_code</i></button>
                                                <form action="" method="POST">
                                                    <input name="deviceId" type="hidden" value="13">
                                                    <button type="delete" name="delete" class="btn btn-danger "><i class="material-icons">delete_outline</i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addDevice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Device</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <label for="sender" class="form-label">Nomor</label>
                    <input type="number" name="sender" class="form-control" id="nomor" placeholder="62xxx" required>
                    <p class="text-small text-danger">*gunakan kode negara/country code ( tanpa + )</p>
                    <label for="urlwebhook" class="form-label">Link webhook</label>
                    <input type="text" name="urlwebhook" class="form-control" id="urlwebhook">
                    <p class="text-small text-danger">*tidak wajib</p>
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
        window.location = "?=scan&nomor=" + nomor
    }
</script>
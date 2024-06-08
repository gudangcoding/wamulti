
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MPWA V5.0.0">
    <meta name="keywords" content="waapi,wa gateway, whatsapp blast, wamp, mpwa, m pedia wa gateway, wa gateway m pedia, ">
    <meta name="author" content="Ilman Sunanuddin , M pedia">
    <title>MPWA - Unofficial Whatsapp Gateway</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="../assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />


</head>

<body><div class="app align-content-stretch d-flex flex-wrap">
    <div class="app-sidebar">
        <div class="logo">
            <a href="home.php" class="logo-icon"><span class="logo-text">MPWA</span></a>
            <div class="sidebar-user-switcher user-activity-online">
                <a href="#">
                    <img src="../assets/images/avatars/avatar.png">
                    <span class="activity-indicator"></span>
                    <span class="user-info-text">pandu jawara<br></span>
                </a>
            </div>
        </div>
        <div class="app-menu">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Apps
                </li>
                <li class="">
                    <a href="home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                </li>
                <li class="">
                    <a href="autoresponder.php" class=""><i class="material-icons-two-tone">message</i>Auto Respons</a>
                </li>
                <li class="">
                    <a href="numbers.php" class=""><i class="material-icons-two-tone">contacts</i>Kontak/Nomor</a>
                </li>
                <li class="">
                    <a href="messages.php" class=""><i class="material-icons-two-tone">send</i>Test Pesan</a>
                </li>
                <li class="">
                    <a href="blast.php" class=""><i class="material-icons-two-tone">notifications</i>Blast Message</a>
                </li>
                <li class="active-page">
                    <a href="schedule.php" class=""><i class="material-icons-two-tone">schedule</i>Pesan terjadwal</a>
                </li>
                <li class="sidebar-title">
                    Other
                </li>
                <li>
                    <a href="rest_api.php"><i class="material-icons-two-tone">api</i>Rest API</a>
                </li>
                <li>
                    <a href="pengaturan.php"><i class="material-icons-two-tone">settings</i>Pengaturan</a>
                </li>
                <li>
                    <a href="logout.php"><i class="material-icons-two-tone">logout</i>Logout</a>
                </li>

            </ul>
        </div>
    </div>
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
    <link href="../assets/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="../assets/plugins/select2/css/select2.css" rel="stylesheet">
    <div class="content-wrapper">
        <div class="container">
            <h2 class="my">Jadwal Pesan</h2>
            
            <div class="card-header d-flex justify-content-between">

            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Daftar Schedule</h5>
                            <div class="d-flex justify-content-between">
                                <form action="" method="POST">
                                    <button type="submit" name="deletepending" class="btn btn-warning mx-2"><i class="material-icons-outlined">delete</i>Hapus ( Pending )</button>
                                </form>
                                <form action="" method="POST">

                                    <button type="submit" name="deletesuccess" class="btn btn-danger mx-2"><i class="material-icons-outlined">delete</i>Hapus ( Success )</button>
                                </form>
                                <form action="" method="POST">

                                    <button type="submit" name="deletefailed" class="btn btn-secondary mx-2"><i class="material-icons-outlined">delete</i>Hapus ( Failed )</button>
                                </form>
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addSchedule"><i class="material-icons-outlined">add</i>Tambah Jadwal</button>

                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sender</th>
                                        <th>Nomor</th>
                                        <th>Pesan</th>
                                        <th>Media</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>

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
<div class="modal fade" id="addSchedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <label for="inputEmail4" class="form-label">sender</label>
                    <select name="sender" id="" class="form-control" style="width: 100%;" required>
                                                    <option value="6281322334545">6281322334545</option>
                                            </select>
                    <label for="inputEmail4" class="form-label">Pilih nomor tujuan</label>
                    <div class="thisselect">

                        <select name="listnumber[]" id="lists" class="form-control" style="width: 100%; height:200px;" multiple="multiple" required>
                                                    </select>
                    </div>
                    <label for="message" class="form-label">Pesan</label>
                    <textarea name="message" class="form-control" id="" cols="20" rows="10" required></textarea>
                    <label for="nomor" class="form-label">Media (JPG/JPEG/PNG/PDF/DOC/DOCX) </label>
                    <input type="text" name="media" class="form-control" id="nomor">
                    <label for="nomor" class="form-label">Tanggal pengiriman</label>
                    <input type="date" name="date" class="form-control" id="nomor" required>
                    <label for="nomor" class="form-label">waktu pengiriman</label>
                    <input type="time" name="time" class="form-control" id="nomor" required>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- Javascripts -->
<script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="../assets/plugins/pace/pace.min.js"></script>
<script src="../assets/plugins/highlight/highlight.pack.js"></script>
<script src="../assets/plugins/datatables/datatables.min.js"></script>
<script src="../assets/js/main.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/pages/datatables.js"></script>
<script src="../assets/js/pages/select2.js"></script>
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
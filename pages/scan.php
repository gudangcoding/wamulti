<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <h4 class="my-5">#Device-6281322334545</h4>

            <div class="alert alert-secondary">Refresh halaman jika tidak muncul foto profil setelah scan</div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="widget-stats-large-chart-container">
                                    <div class="card-header logoutbutton">
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-earnings"></div>
                                        <div class="imageee text-center">
                                            <img src="../assets/images/other/waiting.jpg" height="300px" alt="">
                                        </div>
                                        <div class="statusss text-center">
                                            <button class="btn btn-primary" type="button" disabled>
                                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                Menunggu respon dari server
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header">
                                        <h5 class="card-title">Account<span class="badge badge-info badge-style-light">Updated 5 min ago</span></h5>
                                    </div>
                                    <div class="card-body account">

                                        <ul class="list-group account list-group-flush">
                                            <li class="list-group-item">Nama : </li>
                                            <li class="list-group-item">Nomor : </li>
                                            <li class="list-group-item">Phone : </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.socket.io/4.4.1/socket.io.min.js"></script>
<!--<script src="../node_modules/socket.io/client-dist/socket.io.js"></script>-->
<script>
    $(document).ready(function() {
        let interval
        let timeout
        // jika di local
        // const socket = io('http://localhost:7000', {
        //  transports: ['websocket', 'polling', 'flashsocket']
        //});

        //      var socket = io('http://wamulti.ptbit.net:7000', {
        //     transports: ['websocket',
        //         'polling',
        //         'flashsocket'
        //     ]
        // });
        // var socket = io();

        // jika di hosting
        const socket = io();
        socket.emit("startconnection", "6281322334545"), socket.on("qrgenerated", t => {
            $(".imageee").html(` <img src="${t.url}" height="300px" alt="">`);
            $(".statusss").html('  <button class="btn btn-warning" type="button" disabled>\n                                                <span class="" role="status" aria-hidden="true"></span>\n                                               QR Code didapatkan, silahkan scan\n                                            </button>'), timeout = setTimeout(() => {
                $(".statusss").html('  <button class="btn btn-danger" type="button" disabled>\n                                                    <span class="" role="status" aria-hidden="true"></span>\n                                             Timed Out, Reload halaman untuk Generate qr ulang\n                                                </button>'), $(".imageee").html(' <img src="../assets/images/other/waiting.jpg" height="300px" alt="">')
            }, 3e4)
        }), socket.on("connected", t => {
            clearTimeout(timeout), $(".imageee").html(` <img src="${t.img}" height="300px" class="mb-2" alt="">`), $(".account").html(`  <li class="list-group-item">Nama : ${t.nama} </li>\n                                            <li class="list-group-item">Nomor : ${t.nomor}</li>\n                                            <li class="list-group-item">Phone : ${t.phone.device_model}</li>\n                                            <li class="list-group-item">Type : ${t.phone.device_manufacturer}</li>\n                                            `), $(".statusss").html('  <button class="btn btn-success" type="button" disabled>\n                                                    <span class="" role="status" aria-hidden="true"></span>\n                                            Terhubung\n                                                </button>')
        }), socket.on("disconnect", () => {
            $(".statusss").html('  <button class="btn btn-danger" type="button" disabled>\n                                                    <span class="" role="status" aria-hidden="true"></span>\n                                             Terputus, silahkan reload page untuk scan ulang\n                                                </button>'), $(".imageee").html(' <img src="../assets/images/other/waiting.jpg" height="300px" alt="">')
        }), socket.on("disconnect2", () => {
            $(".statusss").html('  <button class="btn btn-danger" type="button" disabled>\n                                                    <span class="" role="status" aria-hidden="true"></span>\n                                             Koneksi ke server Terputus, silahkan reload page untuk scan ulang\n                                                </button>'), $(".imageee").html(' <img src="../assets/images/other/waiting.jpg" height="300px" alt="">')
        }), $("#logout").on("click", function() {
            const t = $(this).data("nomor");
            socket.emit("logoutdevice", t)
        }), socket.on("successLogout", t => {
            $(".logoutbutton").html(""), $(".statusss").html('  <button class="btn btn-danger" type="button" disabled>\n                                                    <span class="" role="status" aria-hidden="true"></span>\n                                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>  Berhasil Logout, Meminta code qr kembali...\n                                                </button>'), $(".imageee").html(' <img src="../assets/images/other/waiting.jpg" height="300px" alt="">'), setTimeout(() => {
                socket.emit("startconnection", "6281322334545")
            }, 5e3)
        });
    })
</script>
<!-- Javascripts -->
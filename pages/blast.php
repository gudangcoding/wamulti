<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <h2 class="my-5">Blast Pesan</h2>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" method="POST" id="formblast">
                            <div class="col-md-12">
                                <label for="textmessage" class="form-label">Sender</label>
                                <select name="sender" id="sender" class="form-control" style="width: 100%;" required>
                                    <option value="6281322334545">6281322334545</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <label for="inputEmail4" class="form-label">Daftar nomor</label>
                                <div class="thisselect">

                                    <select name="listnumber[]" id="lists" class="form-control" style="width: 100%; height:200px;" multiple="multiple" required>
                                    </select>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="all" type="checkbox" name="all" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Kirim ke semua nomor ( Di data nomor/kontak )
                                    </label>
                                </div>
                                <label for="" class="form-label MT-3"> Link images ( JPG,JPEG,PDF ) </label>
                                <input type="text" class="urlmedia form-control" name="media" class="form-control">
                                <p class="text-danger text-small">*Opsional (Kosongkan jika hanya kirim text!)</p>
                                <label for="" class="form-label MT-3"> Delay setiap pesan ( detik ) </label>
                                <input type="number" class="delay form-control" name="delay" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <label for="inputPassword4" class="form-label">Pesan</label>
                                <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control">Pesan</textarea>



                            </div>
                            <div class="col-12">

                            </div>

                            <div class="col-12" id="buttonblast">
                                <button type="submit" id="startblast" name="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Daftar Blast</h5>
                            <form action="" method="POST">

                                <button type="submit" name="deleteall" class="btn btn-danger" class="btn btn-danger" data-bs-toggle="modal"><i class="material-icons-outlined">remove</i>Hapus Semua</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sender</th>
                                        <th>Tujuan</th>
                                        <th>Pesan</th>
                                        <th>Media</th>
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


<script>
    var cek = 0;
    $("#all").change(function() {
        this.checked ? ($("#lists").val([]), $(".thisselect").hide(), $("#lists").attr("disabled", !0), $("#lists").attr("required", !1), cek = 1) : ($("#lists").val([]), $(".thisselect").fadeIn(), $("#lists").attr("disabled", !1), $("#lists").attr("required", !0), cek = 0)
    }), $("#startblast").on("click", a => {
        a.preventDefault();
        var s = [];
        if ($("#lists option:selected").each(function() {
                s.push($(this).val())
            }), 0 == cek && "" == $("#lists").val()) return alert("Harap pilih tujuan blast!");
        if ("" == $("#pesan").val()) return alert("Pesan wajib diisi!");
        const e = cek,
            t = $("#sender").val(),
            l = $("#pesan").val(),
            i = ($(".delay").val(), $(".urlmedia").val()),
            r = {
                selected: s,
                all: e,
                sender: t,
                pesan: l,
                media: i
            };
        $(this).attr("disabled", !0), $("#startblast").html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>\n                                                Prossess Blasting...'), $("#sender").attr("disabled", !0), $("#pesan").attr("disabled", !0), $("#lists").attr("disabled", !0), $("#all").attr("disabled", !0), $.ajax({
            type: "POST",
            url: "../ajax/blast.php",
            data: r,
            success: a => {
                window.location = ""
            },
            error: a => {
                alert("error hubungi dev jika mendapatkan error ini! ( 123 )")
            }
        })
    });
</script>
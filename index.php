<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Online</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/all.min.js"></script>

</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row my-2">
                    <div class="col-1">Nama :</div>
                    <div class="col-6">Khoirul Jannah</div>
                </div>
                <div class="row my-2">
                    <div class="col-1">Absen :</div>
                    <div class="col-6">14</div>
                </div>
                <div class="row my-2">
                    <div class="col-1">Kelas :</div>
                    <div class="col-6">XI RPL</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow rounded overflow-hidden mt-3">
        <div class="row">
            <div class="col-md-12 bg-primary p-2 position-relative">
                <h5 class="px-3 text-light m-0">Hotel Onlen</h5>
                <div class="position-absolute menu-bar d-flex">
                    <div class="w-100 h-100 position-relative menu-item p-2">
                        <i class="fas fa-minus"></i>
                    </div>
                    <div class="w-100 h-100 position-relative menu-item p-2">
                        <i class="fa fa-window-maximize"></i>    
                    </div>
                    <div class="w-100 h-100 position-relative menu-item-danger p-2">
                        <i class="fas fa-times text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST">
        <div class="row">
            <div class="col-md-6 p-3">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Your Awesome Name" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-1">
                            <label for="no">No</label>
                        </div>
                        <div class="col-11">
                            <input type="number" name="no" id="no" class="form-control" min="1" max="40" placeholder="Your Absention Number (1 - 36)" aria-describedby="helpId">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Jln, Rt, Rw, Desa, Dusun, Kecamatan, Kabupaten, Provinsi"></textarea>
                </div>
            </div>
            <div class="col-md-6 p-3 mt-3">
                <select name="type_bed" class="form-control mb-3 mt-3" id="type_bed">
                    <option value="">Pilih Tipe Kamar</option>
                    <option value="economy">Ekonomi</option>
                    <option value="regular">Regular</option>
                    <option value="vip">VIP</option>
                </select>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="checkin">Check In</label>
                            <input type="date" name="checkin" id="checkin" class="form-control" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="checkout">Check Out</label>
                            <input type="date" name="checkout" id="checkout" class="form-control" aria-describedby="helpId">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="py-1 px-3 mx-2 d-block text-center bg-light rounded-pill facilities">
                        <p class="m-0"><i class="fas fa-tshirt"></i> Laundry</p>
                    </div>
                    <div class="py-1 px-3 mx-2 d-block text-center bg-light rounded-pill facilities">
                        <p class="m-0"> <i class="fas fa-utensils"></i> Eat</p>
                    </div>
                    <div class="py-1 px-3 mx-2 d-block text-center bg-light rounded-pill facilities">
                        <p class="m-0"><i class="fas fa-swimming-pool"></i> Swimming pool</p>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button class="btn btn-light px-5" type="button" id="btn_reset"><i class="fas fa-undo"></i> Reset</button>
                    <button class="btn btn-warning px-5 shadow-sm"><i class="fas fa-paper-plane"></i> Kirim</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('.facilities').click(function() {
                $(this).toggleClass('facilities-primary')
            })
            $('#btn_reset').click(function() {
                $('input, textarea, select').val("")
                $('.facilities').addClass('facilities-default')
            })
        })
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="halaman login">

    <title>Pesan Reservasi - Hotel Hebat</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />


    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="assets/tamu/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/tamu/css/style.css" />

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg"></div>
                        <form method="post" action="{{ route('pesanReservasi.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_tamu">Nama Tamu</label>
                                        <input class="form-control" type="text" required placeholder="Input nama"
                                            name="nama_tamu" value="{{ old('nama_tamu') }}" autofocus>
                                        @error('nama_tamu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="email" required placeholder="Input email"
                                            name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="no_hp">No. HP</label>
                                        <input class="form-control" type="text" required placeholder="Input No. HP"
                                            name="no_hp" value="{{ old('no_hp') }}">
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="jumlah_kamar">Jumlah Kamar</label>
                                        <input class="form-control" type="number" min="1" required
                                            placeholder="Input jumlah kamar" name="jumlah_kamar" id="jumlah_kamar"
                                            value="{{ old('jumlah_kamar') }}">
                                        @error('jumlah_kamar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tipe_kamar">Tipe Kamar</label>
                                <select class="form-control" name="tipe_kamar" id="tipe_kamar" required
                                    value="{{ old('tipe_kamar') }}">
                                    @foreach ($dataKamar as $row)
                                        <option value="{{ $row->id }}" data-jumlah="{{ $row->jumlah_kamar }}">
                                            {{ $row->tipe_kamar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tipe_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tgl_check_in">Check In</label>
                                        <input class="form-control" type="date" id="tgl_check_in" required
                                            name="tgl_check_in">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tgl_check_out">Check Out</label>
                                        <input class="form-control" type="date" id="tgl_check_out" required
                                            name="tgl_check_out">
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">PESAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

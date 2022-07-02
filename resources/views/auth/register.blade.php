<x-guest-layout>
    <section class="position-relative overflow-hidden pt-0 pt-sm-5">
        <div class="container">

            <!-- Title -->
            <div class="row position-relative z-index-9">
                <div class="col-md-6 mx-auto">
                    <h2 class="mb-0 text-center">Formulir Pendaftaran</h2>
                    <p class="text-center">Pastikan data yang anda masukan benar. Cek alur pendaftaran<a href="/alur-pendaftaran">
                            disini</a>!</p>

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- form  -->
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control border-0 bg-light rounded-end px-3" placeholder="Nama lengkap" id="name" name="name" :value="old('name')" required autofocus />
                                <div class="invalid-feedback">
                                    Nama lengkap harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="nik" class="form-label">NIK</label>
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control border-0 bg-light rounded-end px-3" placeholder="NIK" id="nik" name="nik" required />
                                <div class="invalid-feedback">
                                    NIK harap diisi!
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control border-0 bg-light rounded-end px-3" placeholder="E-mail" id="email" name="email" :value="old('email')" required />
                                <div class="invalid-feedback">
                                    Email invalid
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="no_hp" class="form-label">No HP</label>
                            <div class="input-group input-group-lg">
                                <input type="no_hp" class="form-control border-0 bg-light rounded-end px-3" placeholder="+62 XXX-XXXX-XXXX" id="no_hp" name="no_hp" required />
                                <div class="invalid-feedback">
                                    No HP harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-4 col-md-6 mx-auto">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control border-0 bg-light rounded-end px-3" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" required />
                                    <div class="invalid-feedback">
                                        Tempat lahir harap diisi!
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <div class="input-group input-group-lg">
                                    <input type="date" class="form-control border-0 bg-light rounded-end px-3" placeholder="Tanggal Lahir" id="tgl_lahir" name="tgl_lahir" required />
                                    <div class="invalid-feedback">
                                        Tanggal lahir harap diisi!
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">

                            <div class="mb-4 col-md-6 mx-auto">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <div class="input-group input-group-lg">

                                    <select class="form-control border-0 bg-light rounded-end px-3 px-3" name="jk" id="jk" required>
                                        <option value="" selected>Pilih...</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Jenis Kelamin harap diisi!
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="agama" class="form-label">Agama</label>
                                <div class="input-group input-group-lg">
                                    <select class="form-control border-0 bg-light rounded-end px-3 px-3" name="agama" id="agama" required>
                                        <option value="" selected>Pilih...</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Kristen</option>
                                        <option value="3">Katolik</option>
                                        <option value="4">Hindu</option>
                                        <option value="5">Budha</option>
                                        <option value="6">Konghucu</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Agama harap diisi!
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="mb-4">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3" id="pendidikan" name="pendidikan" required>
                                    <option value="" selected>Pilih...</option>
                                    <option value="1">SD/Sederajat</option>
                                    <option value="2">SMP/Sederajat</option>
                                    <option value="3">SMA/Sederajat</option>
                                    <option value="4">Diploma</option>
                                    <option value="5">Sarjana</option>
                                    <option value="6">Master</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pendidikan Terakhir harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control border-0 bg-light rounded-end px-3" placeholder="Alamat" id="alamat" name="alamat" required />
                                <div class="invalid-feedback">
                                    Alamat harap diisi!
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-4">
                            <label for="pengurus_tingkat" class="form-label">Pengurus Tingkat</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3" id="pengurus_tingkat" name="pengurus_tingkat" required>
                                    <option value="" selected>Pilih...</option>
                                    <option value="00">DPP</option>
                                    <option value="01">DPKW</option>
                                    <option value="02">DPW</option>
                                    <option value="03">PAW</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pengurus Tingkat harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3 provkat" id="provinsi" name="provinsi" required>
                                    <option value="" selected>Pilih...</option>
                                    @foreach($provinsis as $provinsi)
                                    <option value="{{ $provinsi->kode }}">{{ $provinsi->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Provinsi harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="kabko" class="form-label">Kabupaten/Kota</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3 selectkabko" id="kabko" name="kabko" required>
                                    <!-- <option value="" selected>Pilih...</option> -->
                                </select>
                                <div class="invalid-feedback">
                                    Kabupaten/Kota harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3" id="kecamatan" name="kecamatan" required>
                                    <!-- <option value="" selected>Pilih...</option> -->
                                </select>
                                <div class="invalid-feedback">
                                    Kecamatan harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <div class="input-group input-group-lg">
                                <select class="form-control border-0 bg-light rounded-end px-3 px-3" id="kelurahan" name="kelurahan" required>
                                    <!-- <option value="" selected>Pilih...</option> -->
                                </select>
                                <div class="invalid-feedback">
                                    Kelurahan harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <div class="input-group input-group-lg">
                            <select class="form-control border-0 bg-light rounded-end px-3 px-3" id="jabatan" name="jabatan" required>
                                    <option value="" selected>Pilih...</option>
                                    @foreach($jabatans as $jabatan)
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Jabatan harap diisi!
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="photo" class="form-label">Photo</label>

                            <div class="input-group input-group-lg">
                                <input type="file" class="form-control border-0 bg-light rounded-end px-3" placeholder="Photo" name="photo" id="photo" required />
                                <div class="invalid-feedback">
                                    Photo harap diisi!
                                </div>
                            </div>
                            <small>Pengurus: Background merah, Anggota: Background biru</small>
                        </div>

                        <div class="mb-4">
                            <label for="ktp" class="form-label">Foto KTP</label>

                            <div class="input-group input-group-lg">
                                <input type="file" class="form-control border-0 bg-light rounded-end px-3" placeholder="KTP" name="ktp" id="ktp" required />
                                <div class="invalid-feedback">
                                    Foto KTP harap diisi!
                                </div>
                            </div>
                            <small>Terlihat penuh dan jelas</small>
                        </div>

                        <hr>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control border-0 bg-light rounded-end px-3" placeholder="*********" id="password" name="password" required autocomplete="new-password" />
                                <div class="invalid-feedback">
                                    Password akun harap diisi!
                                </div>
                            </div>
                        </div>
                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control border-0 bg-light rounded-end px-3" placeholder="*********" id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- Check box -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="term1" required />
                                <label class="form-check-label" for="term1">Saya menyatakan seluruh data
                                    yang diberikan dalam formulir ini adalah benar dan tanpa paksaan dari pihak manapun.</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="term" name="term" required onclick="termChecked()" />
                                <label class="form-check-label" for="term">Saya menyatakan akan mematuhi<a href="#" target="_blank"> aturan
                                        dan kebijakan</a> organisasi yang berlaku.</label>
                            </div>
                        </div>

                        {{-- http://www.youtube.com/channel/UCrcQbKmVGKuitoUUYRXs3WQ?sub_confirmation=1&amp;feature=subscribe-embed-click --}}

                        <div class="align-items-center mt-0">
                            <div class="d-grid">
                                <button class="btn btn-primary mb-0" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center position-relative">

                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 translate-middle ms-8">
                        <svg style="enable-background:new 0 0 141.7 143.9;">
                            <path class="fill-success" d="M137.7,53.1c9.6,29.3,1.8,64.7-20.2,80.7s-58.1,12.6-83.5-5.8C8.6,109.5-6.1,76.1,2.4,48.7 C10.8,21.1,42.2-0.7,71.5,0S128.1,23.8,137.7,53.1z">
                            </path>
                        </svg>
                    </figure>

                    <!-- SVG decoration -->
                    <figure class="position-absolute bottom-0 end-0 me-n9 rotate-193">
                        <svg width="297.5px" height="295.9px">
                            <path stroke="#F99D2B" fill="none" stroke-width="13" d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9">
                            </path>
                        </svg>
                    </figure>

                    <!-- Start form  -->
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>

            function termChecked() {
                var checkBox = document.getElementById('term');
                if(checkBox.checked == true){
                    window.open('http://www.youtube.com/channel/UCrcQbKmVGKuitoUUYRXs3WQ?sub_confirmation=1&amp;feature=subscribe-embed-click', '', 'width=400,height=250').focus();
                }
            }
        </script>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('change', '#provinsi', function() {
                    var prov_id = $(this).val();
                    console.log(prov_id);

                    var div = $(this).parent();

                    var op = " ";
                    $('#kabko').empty();
                    $('#kecamatan').empty();
                    $('#kelurahan').empty();

                    $.ajax({
                        type: 'get',
                        url: '{!!URL::to('findKabko')!!}',
                        data: {
                            'kode': prov_id
                        },
                        success: function(data) {
                            console.log(data.length);

                            $("#kabko").append('<option>Pilih...</option>');
                            if (data) {
                                if(data==0){
                                    $('#kabko').empty();
                                    $('#kecamatan').empty();
                                    $('#kelurahan').empty();
                                }

                                $.each(data, function(key, value) {

                                    $('#kabko').append($("<option/>", {
                                        value: value.kode,
                                        text: value.nama
                                    }));
                                });
                            }
                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('change', '#kabko', function() {
                    var prov_id = $(this).val();
                    console.log(prov_id);

                    var div = $(this).parent();

                    var op = " ";
                    $('#kecamatan').empty();
                    $('#kelurahan').empty();

                    $.ajax({
                        type: 'get',
                        url: '{!!URL::to('findKecamatan')!!}',
                        data: {
                            'kode': prov_id
                        },
                        success: function(data) {
                            console.log(data.length);

                            $("#kecamatan").append('<option>Pilih...</option>');
                            if (data) {
                                if(data==0){
                                    $('#kecamatan').empty();
                                    $('#kelurahan').empty();
                                }

                                $.each(data, function(key, value) {

                                    $('#kecamatan').append($("<option/>", {
                                        value: value.kode,
                                        text: value.nama
                                    }));
                                });
                            }
                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('change', '#kecamatan', function() {
                    var prov_id = $(this).val();
                    console.log(prov_id);

                    var div = $(this).parent();

                    var op = " ";
                    $('#kelurahan').empty();

                    $.ajax({
                        type: 'get',
                        url: '{!!URL::to('findKelurahan')!!}',
                        data: {
                            'kode': prov_id
                        },
                        success: function(data) {
                            console.log(data.length);

                            $("#kelurahan").append('<option>Pilih...</option>');
                            if (data) {
                                if(data==0){
                                    $('#kelurahan').empty();
                                }

                                $.each(data, function(key, value) {

                                    $('#kelurahan').append($("<option/>", {
                                        value: value.kode,
                                        text: value.nama
                                    }));
                                });
                            }
                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                });
            });
        </script>

    </x-slot>

</x-guest-layout>
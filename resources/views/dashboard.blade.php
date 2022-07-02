<x-user-layout>


    @role('admin')

    <div class="row g-4 mb-4">
        <!-- Counter item -->
        <div class="col-md-6">
            <div class="card card-body bg-success bg-opacity-15 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="5" data-purecounter-delay="200" data-purecounter-duration="0">{{ $users }}</h2>
                        <span class="mb-0 h6 fw-light">Total Anggota</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="fas fa-users fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6">
            <div class="card card-body bg-danger bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="4" data-purecounter-delay="200" data-purecounter-duration="0">{{ $pending }}</h2>
                        <span class="mb-0 h6 fw-light">Total Pending</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-danger text-white mb-0"><i class="fas fa-pause fa-fw"></i></div>
                </div>
            </div>
        </div>

    @else

    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-sm-10 col-xl-6 text-center mx-auto">
                    <h2>Hi, {{ Auth::user()->name }}</h2>
                    <p class="mb-0">Pengajuanmu masih dalam review Pimpinan, mohon bersabar hingga pengajuanmu diapprove. Berikut tahapan pengajuan Anggota RGBI.</p>
                </div>
            </div>

            <!-- Work process -->
            <div class="row g-4 g-md-5">
                <!-- Item -->
                <div class="col-md-4 text-center">
                    <img src="assets/images/step/registrasi.png" class="h-200px" alt="">
                    <h4 class="mt-3">Registrasi</h4>
                    <p class="mb-0">Melakukan registrasi Anggota RGPI dengan benar dan menyatakan kesanggupan.</p>
                </div>

                <!-- Item -->
                <div class="col-md-4 text-center">
                    <img src="assets/images/step/verification.png" class="h-200px" alt="">
                    <h4 class="mt-3">Verifikasi</h4>
                    <p class="mb-0">Verifikasi data melalui, DPW dan DPKW untuk mengetahui keabsahan data pengajuan.
                    </p>
                </div>

                <!-- Item -->
                <div class="col-md-4 text-center">
                    <img src="assets/images/step/approve.png" class="h-200px" alt="">
                    <h4 class="mt-3">Aktivasi</h4>
                    <p class="mb-0">Aktivasi oleh Pimpinan Pusat dan melakukan percetakan KTA sebagai bukti keanggotaa RGPI.</p>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>

    <section>
        <div class="container position-relative">
            <!-- SVG -->
            <figure class="position-absolute top-50 start-50 translate-middle ps-3">
                <svg class="fill-white opacity-2">
                    <path d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"></path>
                    <path d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"></path>
                    <path d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"></path>
                    <path d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"></path>
                </svg>
            </figure>

            <div class="bg-dark p-4 p-sm-5 rounded-3">
                <div class="row justify-content-center position-relative">
                    <!-- Svg -->
                    <figure class="position-absolute top-50 start-0 translate-middle-y">
                        <svg width="141px" height="141px">
                            <path class="fill-white opacity-1" d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
                        </svg>
                    </figure>
                    <!-- Action box -->
                    <div class="col-11 position-relative">
                        <div class="row align-items-center">
                            <!-- Title -->
                            <div class="col-lg-7">
                                <h3 class="text-white">Ada kesulitan?</h3>
                                <p class="text-white mb-3 mb-lg-0">Untuk pertanyaan lebih lanjut terkait status pengajuan anda, silakan hubungi kami melalui kontak yang telah disediakan.</p>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-5 text-lg-end">
                                <a href="#fill-instructor-form" class="btn btn-lg btn-white mb-0">Kontak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endrole


    <x-slot name="script"> </x-slot>
</x-user-layout>

{{-- <x-super-layout>
</x-super-layout> --}}
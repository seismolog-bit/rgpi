<x-user-layout>

    <div class="card-body">
        <div class="table-responsive border-0 rounded-3">
            <!-- Table START -->
            <table class="table table-dark-gray align-middle p-4 mb-0">
                <!-- Table head -->
                <thead>
                    <tr>
                        <th scope="col" class="border-0 rounded-start">Uraian</th>
                        <th scope="col" class="border-0">Jangkauan</th>
                        <th scope="col" class="border-0">Keseluruhan</th>
                        <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>
                <!-- Table body START -->
                <tbody>

                    <!-- Table item -->
                    <tr>
                        <!-- Course item -->
                        <td>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-90px">
                                    <div class="card card-body bg-warning bg-opacity-15 h-100 p-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md rounded-circle bg-warning text-white mb-0"><i class="fas fa-globe fa-fw"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title">
                                    <a href="#">Provinsi</a>
                                </h6>
                            </div>
                        </td>
                        <!-- Selling item -->
                        <td>{{ $provinsis }}</td>
                        <!-- Amount item -->
                        <td>{{ $provinsis }}</td>
                        <!-- Period item -->
                        <!-- Action item -->
                        <td>
                            <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <!-- Course item -->
                        <td>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-90px">
                                    <div class="card card-body bg-info bg-opacity-15 h-100 p-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md rounded-circle bg-info text-white mb-0"><i class="fas fa-map fa-fw"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title">
                                    <a href="#">Kabupaten/Kota</a>
                                </h6>
                            </div>
                        </td>
                        <!-- Selling item -->
                        <td>{{ $kabkos }}</td>
                        <!-- Amount item -->
                        <td>{{ $kabkos }}</td>
                        <!-- Period item -->
                        <!-- Action item -->
                        <td>
                            <a href="#" class="btn btn-sm btn-info-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
                        </td>
                    </tr>

                    
                    <tr>
                        <!-- Course item -->
                        <td>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-90px">
                                    <div class="card card-body bg-primary bg-opacity-15 h-100 p-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md rounded-circle bg-primary text-white mb-0"><i class="fas fa-building fa-fw"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title">
                                    <a href="#">Kecamatan</a>
                                </h6>
                            </div>
                        </td>
                        <!-- Selling item -->
                        <td>{{ $kecamatans }}</td>
                        <!-- Amount item -->
                        <td>{{ $kecamatans }}</td>
                        <!-- Period item -->
                        <!-- Action item -->
                        <td>
                            <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
                        </td>
                    </tr>

                    
                    <tr>
                        <!-- Course item -->
                        <td>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-90px">
                                    <div class="card card-body bg-danger bg-opacity-15 h-100 p-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md rounded-circle bg-danger text-white mb-0"><i class="fas fa-home fa-fw"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title">
                                    <a href="#">Kelurahan</a>
                                </h6>
                            </div>
                        </td>
                        <!-- Selling item -->
                        <td>{{ $kelurahans }}</td>
                        <!-- Amount item -->
                        <td>{{ $kelurahans }}</td>
                        <!-- Period item -->
                        <!-- Action item -->
                        <td>
                            <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i> </a>
                        </td>
                    </tr>

                </tbody>
                <!-- Table body END -->
            </table>
            <!-- Table END -->
        </div>
    </div>

    <x-slot name="script"> </x-slot>
</x-user-layout>
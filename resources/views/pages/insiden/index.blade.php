<x-default-layout>

    @section('title')
        Maklumat Insiden
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('pengurusan-prapelan.index') }}
    @endsection

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>

    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <style>
        .image-input-placeholder {
            background-image: url('{{ asset('svg/avatars/blank.svg') }}');

        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset('svg/avatars/blank-dark.svg') }}');
        }
    </style>


    <div class="card card-flush mb-7">
        <div class="card-header">
            <div class="card-title">
                <h2 class="mb-0">Insiden</h2>
            </div>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambah-insiden" class="btn btn-sm btn-light-primary fw-bold">Tambah Insiden</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush h-xl-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Senarai</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">Paparan insiden di Kawasan Selangor</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <div class="position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-table-widget-4="search"
                            class="form-control w-200px form-control-sm ps-12" placeholder="Carian" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-2">
            <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                        id="kt_table_widget_4_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="text-start" rowspan="1" colspan="1">Bil</th>
                                <th class="text-center" rowspan="1" colspan="1">Alamat</th>
                                <th class="text-center" rowspan="1" colspan="1">Jenis Insiden</th>
                                <th class="text-center" rowspan="1" colspan="1">Tarikh</th>
                                <th class="text-center" rowspan="1" colspan="1">Masa</th>
                                <th class="text-center" rowspan="1" colspan="1">Anggota</th>
                                <th class="text-center" rowspan="1" colspan="1">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            @for ($i = 1; $i <= 5; $i++)
                                <tr>
                                    <td class="text-start">
                                        <a href="#" class="text-gray-800 text-hover-primary">
                                            {{ $i }}
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        No 92, Jalan KP 6, Bandar Baru Bangi 43500 Selangor.
                                    </td>

                                    <td class="text-center">
                                        <span class="text-gray-600 fw-bold">Kebakaran</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600 fw-bold">23-02-2023</span>
                                        
                                    </td>
                                    <td class="text-center">
                                        09:30 AM
                                    </td>
                                    <td class="text-center">
                                        <div class="symbol-group symbol-hover flex-nowrap">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-11.jpg') }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        {{-- <a href="#" class="btn btn-sm btn-light fw-bold">Inventori</a> --}}
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#lihat-insiden"
                                            class="btn btn-sm btn-light-secondary fw-bold text-dark">Lihat</a>
                                        <a href="#" class="btn btn-sm btn-light-danger fw-bold">Padam</a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <span class="small text-muted">Showing 1 to 5 of 5 results</span>
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <ul class="pagination pagination-circle pagination-outline">
                            <li class="page-item previous disabled m-1"><a href="#" class="page-link"><i
                                        class="previous"></i></a></li>
                            <li class="page-item active m-1"><a href="#" class="page-link">1</a></li>
                            <li class="page-item next m-1"><a href="#" class="page-link"><i
                                        class="next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages/insiden/modal/create')
    @include('pages/insiden/modal/view')

</x-default-layout>

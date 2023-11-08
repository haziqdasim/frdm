<x-default-layout>

    @section('title')
        Balai Bomba
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('balai-bomba.index') }}
    @endsection
    
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>

    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
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
                <h2 class="mb-0">Balai Bomba</h2>
            </div>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambah-balai-bomba" class="btn btn-sm btn-light-primary fw-bold">Tambah Balai Bomba</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush h-xl-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Senarai</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">Paparan balai bomba di Malaysia</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <div class="position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-table-widget-4="search" class="form-control w-200px form-control-sm ps-12" placeholder="Carian"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-2">
            <div id="kt_table_widget_4_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                        id="kt_table_widget_4_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-3">
                                <th class="text-start" rowspan="1" colspan="1">Bil</th>
                                <th class="text-start" rowspan="1" colspan="1">Balai</th>
                                <th class="text-start w-400px" rowspan="1" colspan="1">Alamat</th>
                                {{-- <th class="text-start" rowspan="1" colspan="1">Zon</th> --}}
                                <th class="text-start" rowspan="1" colspan="1">Perhubungan</th>
                                <th class="text-center w-300px" rowspan="1" colspan="1">Tindakan</th>
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
                                    
                                    <td class="text-start">
                                        <span class="text-gray-600 fw-bold">BBP Putrajaya</span>
                                    </td>
                                    
                                    <td class="text-start">
                                        <span class="text-gray-600 fw-bold">Balai Bomba Dan Penyelamat Putrajaya, Lebuh Wawasan, Presint 7 62250 Putrajaya, WP Putrajaya.</span>
                                    </td>
                                    {{-- <td class="text-start">
                                        <span class="text-gray-600 fw-bold">Wilayah Persekutuan</span>
                                    </td> --}}
                                    <td class="text-start">
                                        <div class="d-flex flex-column">
                                            <li class="d-flex align-items-center py-0">
                                                <span class="bullet bg-primary me-5"></span> Tel: 03 8888 0970 / 0971
                                            </li>
                                            <li class="d-flex align-items-center py-0">
                                                <span class="bullet bg-primary me-5"></span> Fax: 03 8888 0019
                                            </li>
                                            <li class="d-flex align-items-center py-0">
                                                <span class="bullet bg-primary me-5"></span> Email: oc-putra.bomba@1govuc.gov.my
                                            </li>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#lihat-balai-bomba" class="btn btn-sm btn-light-secondary text-dark fw-bold mb-1">Lihat</a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kemaskini-balai-bomba" class="btn btn-sm btn-light-warning fw-bold mb-1">Kemaskini</a>
                                        <a href="#" class="btn btn-sm btn-light-danger fw-bold mb-1">Padam</a>
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

    @include('pages/balai-bomba/modal/create')
    @include('pages/balai-bomba/modal/view')
    @include('pages/balai-bomba/modal/edit')

</x-default-layout>

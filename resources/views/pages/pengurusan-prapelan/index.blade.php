<x-default-layout>

    @section('title')
        Pengurusan Prapelan
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('pengurusan-prapelan.index') }}
    @endsection
    
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    

    <div class="card card-flush mb-7">
        <div class="card-header">
            <div class="card-title">
                <h2 class="mb-0">Pengurusan Prapelan</h2>
            </div>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <a href="#" class="btn btn-sm btn-light-primary fw-bold">Tambah Prapelan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush h-xl-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Negeri</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">Paparan prapelan mengikut negeri</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    {{-- <div class="d-flex align-items-center fw-bold">
                        <div class="text-gray-400 fs-7 me-2">Lokasi</div>
                        <select class="form-select form-select-sm" data-control="select2" data-placeholder="Pilih lokasi">
                            <option></option>
                            <option value="1">Rumah</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center fw-bold">
                        <div class="text-gray-400 fs-7 me-2">Negeri</div>
                        <select class="form-select form-select-sm" data-control="select2" data-placeholder="Pilih negeri">
                            <option></option>
                            <option value="1">Selangor</option>
                            <option value="2">Melaka</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center fw-bold">
                        <div class="text-gray-400 fs-7 me-2">Bandar</div>
                        <select class="form-select form-select-sm" data-control="select2" data-placeholder="Pilih negeri">
                            <option></option>
                            <option value="1">Bandar Baru Bangi</option>
                        </select>
                    </div> --}}
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
                    <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                        id="kt_table_widget_4_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="text-start" rowspan="1" colspan="1">Bil</th>
                                <th class="text-center" rowspan="1" colspan="1">Negeri</th>
                                <th class="text-center" rowspan="1" colspan="1">Bandar</th>
                                <th class="text-center" rowspan="1" colspan="1">Poskod</th>
                                <th class="text-center" rowspan="1" colspan="1">No Pusat Bandar</th>
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
                                        Selangor
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="text-gray-800 text-hover-primary">Bandar Baru
                                            Bangi</a>
                                    </td>
                                    <td class="text-center">
                                        43500
                                    </td>
                                    <td class="text-center">
                                        <span class="text-gray-600 fw-bold">SEK15-42238</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light fw-bold">Lihat</a>
                                        <a href="#" class="btn btn-sm btn-light-warning fw-bold">Kemaskini</a>
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

</x-default-layout>

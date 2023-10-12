<x-default-layout>

    @section('title')
        Laporan
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('pengurusan-prapelan.index') }}
    @endsection
    
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    

    <div class="card card-flush mb-7">
        <div class="card-header">
            <div class="card-title">
                <h2 class="mb-0">Laporan</h2>
            </div>
            {{-- <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <a href="#" class="btn btn-sm btn-light-primary fw-bold"> </a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card card-flush h-xl-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Laporan</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">Senarai laporan</span>
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
            
        </div>
    </div>

</x-default-layout>

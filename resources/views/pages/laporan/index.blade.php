<x-default-layout>

    @section('title')
        Laporan
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('laporan.index') }}
    @endsection

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>

    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <div class="card bg-light-success card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bold text-success fs-5 mb-3 d-block">
                        Misi Berjaya </a>

                    <div class="py-1">
                        <span class="text-gray-900 fs-1 fw-bold me-2">50%</span>

                        <span class="fw-semibold text-success fs-7">Secara Purata</span>
                    </div>

                    <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card bg-light-warning card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bold text-warning fs-5 mb-3 d-block">
                        Misi Sedang Berjalan </a>

                    <div class="py-1">
                        <span class="text-gray-900 fs-1 fw-bold me-2">15%</span>

                        <span class="fw-semibold text-warning fs-7">Secara Purata</span>
                    </div>

                    <div class="progress h-7px bg-warning bg-opacity-50 mt-7">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bold text-primary fs-5 mb-3 d-block">
                        Bomba Aktif </a>

                    <div class="py-1">
                        <span class="text-gray-900 fs-1 fw-bold me-2">96%</span>

                        <span class="fw-semibold text-primary fs-7">Secara Purata</span>
                    </div>

                    <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row g-5 g-xl-8">
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Informasi Insiden</span>

                        <span class="text-muted fw-semibold fs-7">Bermula Febuari sehingga Julai di Sekitar
                            Selangor</span>
                    </h3>

                </div>

                <div class="card-body">
                    <div id="kt_charts_widget_1_chart" style="height: 350px;"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Informasi Insiden</span>

                        <span class="text-muted fw-semibold fs-7">Bermula Febuari sehingga Julai di Sekitar
                            Selangor</span>
                    </h3>

                </div>

                <div class="card-body">
                    <div id="kt_charts_widget_5_chart" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5 g-xl-8">
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Informasi Insiden</span>

                        <span class="text-muted fw-semibold fs-7">Bermula Febuari sehingga Julai di Sekitar
                            Selangor</span>
                    </h3>

                </div>

                <div class="card-body">
                    <div id="kt_charts_widget_3_chart" style="height: 350px;"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Informasi Insiden</span>

                        <span class="text-muted fw-semibold fs-7">Bermula Febuari sehingga Julai di Sekitar
                            Selangor</span>
                    </h3>
                </div>

                <div class="card-body">
                    <div id="kt_charts_widget_2_chart" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>


</x-default-layout>

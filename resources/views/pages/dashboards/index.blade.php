<x-default-layout>

    {{-- @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection --}}

    <div class="card card-flush mb-7">
        <div class="card-header">
            <div class="card-title">
                <h2 class="mb-0">Lokasi Unit</h2>
                <span class="badge badge-danger badge-sm mx-2">
                    <span class="bullet bullet-dot bg-light h-6px w-6px position-absolute animation-blink"></span>
                    <span class="ps-3" style="letter-spacing: 0.5px;">LANGSUNG</span>
                </span>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-5">
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="symbol symbol-70px">
                                    <div class="symbol-label"
                                        style="background-image:url('{{ asset('assets/media/customs/lori-bomba.jpg') }}')"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 align-items-top justify-content-center justify-content-md-start">
                                <span><b>No. Pendaftaran:</b> JSA 3382</span><br>
                                <span><b>Pemandu:</b> Fakhri Nor Hisham</span><br>
                                <span><b>Latitude:</b> 6.1723</span><br>
                                <span><b>Longitude:</b> 102.26707</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-5">
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="symbol symbol-70px">
                                    <div class="symbol-label"
                                        style="background-image:url('{{ asset('assets/media/customs/lori-bomba.jpg') }}')"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 align-items-top justify-content-center justify-content-md-start">
                                <span><b>No. Pendaftaran:</b> JSA 3382</span><br>
                                <span><b>Pemandu:</b> Fakhri Nor Hisham</span><br>
                                <span><b>Latitude:</b> 6.1723</span><br>
                                <span><b>Longitude:</b> 102.26707</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-5">
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="symbol symbol-70px">
                                    <div class="symbol-label"
                                        style="background-image:url('{{ asset('assets/media/customs/lori-bomba.jpg') }}')"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 align-items-top justify-content-center justify-content-md-start">
                                <span><b>No. Pendaftaran:</b> JSA 3382</span><br>
                                <span><b>Pemandu:</b> Fakhri Nor Hisham</span><br>
                                <span><b>Latitude:</b> 6.1723</span><br>
                                <span><b>Longitude:</b> 102.26707</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-5">
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="symbol symbol-70px">
                                    <div class="symbol-label"
                                        style="background-image:url('{{ asset('assets/media/customs/lori-bomba.jpg') }}')">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-9 align-items-top justify-content-center justify-content-md-start">
                                <span><b>No. Pendaftaran:</b> JSA 3382</span><br>
                                <span><b>Pemandu:</b> Fakhri Nor Hisham</span><br>
                                <span><b>Latitude:</b> 6.1723</span><br>
                                <span><b>Longitude:</b> 102.26707</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card my-5 mb-xxl-8">
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bold mb-2 text-dark">Garis Masa</span>
                                <span class="text-muted fw-semibold fs-7">Aktiviti sepanjang perjalanan</span>
                            </h3>
                        </div>

                        <div class="card-body pt-5">
                            <div class="timeline-label">
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                    <div class="timeline-badge">
                                        <span class="svg-icon svg-icon-warning svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 6C8.7 6 6 8.7 6 12C6 15.3 8.7 18 12 18C15.3 18 18 15.3 18 12C18 8.7 15.3 6 12 6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">Balau Bomba Puchong</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                    <div class="timeline-badge">
                                        <span class="svg-icon svg-icon-warning svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 6C8.7 6 6 8.7 6 12C6 15.3 8.7 18 12 18C15.3 18 18 15.3 18 12C18 8.7 15.3 6 12 6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">Head west toward Persiaran Cyber Point Selatan</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                    <div class="timeline-badge">
                                        <span class="svg-icon svg-icon-warning svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 6C8.7 6 6 8.7 6 12C6 15.3 8.7 18 12 18C15.3 18 18 15.3 18 12C18 8.7 15.3 6 12 6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">Turn left onto Persiaran Cyber Point Selatan</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                    <div class="timeline-badge">
                                        <span class="svg-icon svg-icon-warning svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 6C8.7 6 6 8.7 6 12C6 15.3 8.7 18 12 18C15.3 18 18 15.3 18 12C18 8.7 15.3 6 12 6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">Continue onto Persiaran Rimba Permai</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                    <div class="timeline-badge">
                                        <span class="svg-icon svg-icon-warning svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 6C8.7 6 6 8.7 6 12C6 15.3 8.7 18 12 18C15.3 18 18 15.3 18 12C18 8.7 15.3 6 12 6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">Continue onto Persiaran Rimba Permai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6>Jangka Masa Tiba: <span class="fw-bolder h4">03:34 PM</span></h6>
                            <h6>Jarak: <span class="fw-bolder h4">7 Kilometer</span></h6>
                            <h6>Tempoh Masa: <span class="fw-bolder h4">6 Minit</span></h6>

                        </div>
                        <div class="card-footer text-end p-3">
                            <a href="#" class="btn btn-secondary btn-sm me-2">Lihat Selanjutnya</a>
                            <a href="#" class="btn btn-light-primary btn-sm me-2">Kongsi</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div id="map" style="height: 730px; width: auto; border-radius: 8px;"></div>
        </div>
    </div>



    <script>
        function initMap() {
            const mapOptions = {
                center: {
                    lat: 2.9132183,
                    lng: 101.6496328
                }, // Initial map center coordinates
                zoom: 15, // Zoom level
            };
            const map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Create a marker
            const marker = new google.maps.Marker({
                position: {
                    lat: 2.9132183,
                    lng: 101.6496328
                },
                map: map,
                title: 'Star Central'
            });
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ZUDxBCPmhXS3R5Knr_g-eScB9j0JrR4&callback=initMap">
    </script>



</x-default-layout>

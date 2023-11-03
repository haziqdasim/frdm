<div class="modal fade" tabindex="-1" id="lihat-insiden">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Lihat Insiden</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="border rounded p-10">
                    <div class="tns tns-default" style="direction: ltr">
                        <!--begin::Slider-->
                        <div
                        data-tns="true"
                        data-tns-loop="true"
                        data-tns-swipe-angle="false"
                        data-tns-speed="2000"
                        data-tns-autoplay="true"
                        data-tns-autoplay-timeout="18000"
                        data-tns-controls="true"
                        data-tns-nav="false"
                        data-tns-items="3"
                        data-tns-center="false"
                        data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev1"
                        data-tns-next-button="#kt_team_slider_next1">
                    
                            <!--begin::Item-->
                            @for ($i = 1; $i <= 5; $i++)
                            <div class="text-center px-5 py-5">
                                <img src="{{ asset('assets/media/stock/600x400/img-'.$i.'.jpg') }}" class="card-rounded mw-100" />
                            </div>
                            @endfor
                            
                            <!--end::Item-->
                        </div>
                        
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                            <span class="svg-icon fs-2x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.75 10.7L17.65 5V19L7.75 13.3C6.75 12.7 6.75 11.3 7.75 10.7Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                        
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                            <span class="svg-icon fs-2x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9 10.7L7 5V19L16.9 13.3C17.9 12.7 17.9 11.3 16.9 10.7Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                        
                    </div>
                </div>

                <div class="row my-10">
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Alamat Insiden</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="3" readonly>No 92, Jalan KP 6, Bandar Baru Bangi 43500 Selangor.</textarea>
                        <span class="text-danger error-text"></span>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Tarikh</label>
                        <input class="form-control" placeholder="Pilih tarikh" id="tarikh-barang" value="23-02-2023" readonly/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Masa</label>
                        <input class="form-control" placeholder="Pilih tarikh" id="tarikh-barang" value="09:30 AM" readonly/>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Jenis Insiden</label>
                        <input class="form-control" placeholder="Pilih tarikh" id="jenis" value="Kebakaran" readonly/>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Senarai Anggota</label>
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
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tarikh-luput-cukai-jalan, #servis-seterusnya").flatpickr();
</script>
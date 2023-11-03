<div class="modal fade" tabindex="-1" id="kemaskini-barang">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Kemaskini Barang</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="text-center">
                    <div class="mb-3">
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('/assets/media/svg/avatars/blank.svg') }})">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('/assets/media/customs/hos-bomba.png') }})"></div>

                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                
                            </label>
                            
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Cancel avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Remove avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            
                        </div>
                    </div>
                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                </div>

                <div class="row my-10">
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama-barang" value="Hos Kebakaran">
                        <span class="text-danger error-text"></span>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Cukai Jalan Tamat</label>
                        <input class="form-control" placeholder="Pilih tarikh" id="tarikh-barang" value="23-02-2023"/>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Status</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih status">
                            <option></option>
                            <option value="1" selected>Masuk</option>
                            <option value="2">Keluar</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Kemaskini</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tarikh-luput-cukai-jalan, #servis-seterusnya").flatpickr();
</script>
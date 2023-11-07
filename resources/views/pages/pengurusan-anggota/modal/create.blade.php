<div class="modal fade" tabindex="-1" id="tambah-anggota">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Anggota</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>

            </div>

            <div class="modal-body">
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Gambar Pegawai</label>
                    
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/avatars/300-11.jpg') }})"></div>
                                
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                data-bs-original-title="Change avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    </div>
                </div>
                
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Pegawai</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <input type="text" name="fname"
                                    class="form-control form-control-lg mb-3 mb-lg-0"
                                    placeholder="Sila masukkan nama" value="">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Emel</label>
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="email" name="" class="form-control form-control-lg" placeholder="Sila masukkan alamat emel" value="">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Gred</label>
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <select class="form-select" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                            <option value="1">KB 19 - PENGUASA BOMBA</option>
                            <option value="2">KB 22 - PENGUASA BOMBA</option>
                            <option value="3">KB 24 - PENGUASA BOMBA</option>
                            <option value="4">KB 28 - PENGUASA BOMBA</option>
                            <option value="5">KB 29 - PENGUASA BOMBA</option>
                            <option value="6">KB 32 - PENGUASA BOMBA</option>
                            <option value="7">KB 38 - PENGUASA BOMBA</option>
                            <option value="8">KB 40 - PENGUASA BOMBA</option>
                            <option value="9">KB 41 - PENGUASA BOMBA</option>
                            <option value="10">KB 44 - PENGUASA BOMBA</option>
                            <option value="11">KB 48 - PENGUASA BOMBA</option>
                            <option value="12">KB 52 - PENGUASA BOMBA</option>
                        </select>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tarikh-barang").flatpickr();
</script>

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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ZUDxBCPmhXS3R5Knr_g-eScB9j0JrR4&callback=initMap"></script>

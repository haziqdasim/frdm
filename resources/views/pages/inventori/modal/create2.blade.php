<div class="modal fade" tabindex="-1" id="tambah-barang">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Barang</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Nombor RFID</label>
                        <div class="input-group mb-5">
                            <span class="input-group-text" id="basic-addon1">
                                <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="currentColor"/>
                                    <path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </span>
                            <input type="text" class="form-control" placeholder="Scan tag RFID anda" aria-label="rfid-number" aria-describedby="basic-addon1" id="rfidInput" oninput="showDiv()"/>
                            <span class="text-danger error-text"></span>
                        </div>
                    </div>
                </div>
                <div class="row" id="outputDiv" style="display: none;">
                    <div class="col-md-12 fv-row mb-7 text-center">
                        <label class="required fs-6 fw-semibold mb-2" style="vertical-align: top;">Gambar</label>
                        <div class="image-input image-input-empty" style="margin-left:10px; background-image: url(  {{ asset('/assets/media/svg/avatars/blank.svg') }}" data-kt-image-input="true">
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            
                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Change picture" data-bs-original-title="Change picture" data-kt-initialized="1">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                    <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="picture_remove">
                            </label>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Cancel picture" data-bs-original-title="Cancel picture" data-kt-initialized="1">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" aria-label="Remove picture" data-bs-original-title="Remove picture" data-kt-initialized="1">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Nama Barang</label>
                        <input class="form-control" placeholder="Sila masukkan nama" id="nama-barang"/>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Status</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih status">
                            <option></option>
                            <option value="1">Masuk</option>
                            <option value="2">Keluar</option>
                        </select>
                        <span class="text-danger error-text"></span>
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
    function showDiv() {
        var rfidInput = document.getElementById("rfidInput");
        var outputDiv = document.getElementById("outputDiv");

        if (rfidInput.value.length > 0) {
            outputDiv.style.display = "block";
        } else {
            outputDiv.style.display = "none";
        }
    }
</script>
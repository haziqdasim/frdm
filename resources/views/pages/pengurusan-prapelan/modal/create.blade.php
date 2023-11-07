<div class="modal fade" tabindex="-1" id="tambah-prapelan">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Prapelan</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Alamat</label>
                        <input type="text" class="form-control mb-2" placeholder="Masukkan alamat 1" name="">
                        <input type="text" class="form-control mb-2" placeholder="Masukkan alamat 2" name="">
                        <input type="text" class="form-control mb-2" placeholder="Masukkan alamat 3" name="">
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Poskod</label>
                        <input type="number" class="form-control" placeholder="Masukkan poskod" name="">
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Negeri</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih negeri">
                            <option></option>
                            <option value="1">Selangor</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Muatnaik Prapelan</label>
                        <div class="dropzone" id="kt_dropzonejs_example_1">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                
                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Klik untuk muatnaik prapelan anda disini.</h3>
                                    <span class="fs-7 fw-semibold text-gray-500">Muatnaik</span>
                                </div>
                                <!--end::Info-->
                            </div>
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
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 1,
    maxFilesize: 50, // MB
    acceptedFiles: ".pdf"
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == "wow.jpg") {
            done("Naha, you don't.");
        } else {
            done();
        }
    }
    
});
</script>

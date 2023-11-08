<div class="modal fade" tabindex="-1" id="kemaskini-balai-bomba">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Kemaskini Balai Bomba</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Nama Balai</label>
                        <input class="form-control" type="text" placeholder="Sila masukkan nama balai" value="BBP Putrajaya" id="nama-balai"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Zon</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih zon">
                            <option></option>
                            <option value="1" selected>Wilayah Persekutuan</option>
                            <option value="2">Selangor</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Menugaskan Pemandu(Admin)</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih pemandu">
                            <option></option>
                            <option value="1">Ltt. Aqbal Omar</option>
                            <option value="2" selected>Ltt. Shahrizal Jaafar</option>
                            <option value="3">Ltt. Fariq Aizul</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Alamat</label>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 1" value="Balai Bomba Dan Penyelamat Putrajaya" id="alamat1"/>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 2" value="Lebuh Wawasan" id="alamat2"/>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 3" value="Presint 7" id="alamat3"/>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Poskod</label>
                        <input class="form-control" type="number" placeholder="Sila masukkan poskod" value="62250" id="poskod"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Negeri</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih zon">
                            <option></option>
                            <option value="1" selected>WP Putrajaya</option>
                            <option value="2">Selangor</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Telefon:</label>
                        <input class="form-control" type="tel" value="03 8888 0970 / 0971" placeholder="Sila masukkan nombor telefon" id="telefon"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">No. Fax</label>
                        <input class="form-control" type="tel" value="03 8888 0019" placeholder="Sila masukkan nombor fax" id="fax"/>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Emel</label>
                        <input class="form-control" type="email" value="oc-putra.bomba@1govuc.gov.my" placeholder="Sila masukkan alamat emel" id="emel"/>
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
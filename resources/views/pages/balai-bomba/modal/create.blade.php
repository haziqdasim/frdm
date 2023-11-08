<div class="modal fade" tabindex="-1" id="tambah-balai-bomba">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Balai Bomba</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Nama Balai</label>
                        <input class="form-control" type="text" placeholder="Sila masukkan nama balai" id="nama-balai"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Zon</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih zon">
                            <option></option>
                            <option value="1">Wilayah Persekutuan</option>
                            <option value="2">Selangor</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Menugaskan Pemandu(Admin)</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih pemandu">
                            <option></option>
                            <option value="1">Ltt. Aqbal Omar</option>
                            <option value="2">Ltt. Shahrizal Jaafar</option>
                            <option value="3">Ltt. Fariq Aizul</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Alamat</label>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 1" id="alamat1"/>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 2" id="alamat2"/>
                        <input class="form-control mb-2" placeholder="Sila masukkan alamat 3" id="alamat3"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Poskod</label>
                        <input class="form-control" type="number" placeholder="Sila masukkan poskod" id="poskod"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Negeri</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih zon">
                            <option></option>
                            <option value="1">WP Putrajaya</option>
                            <option value="2">Selangor</option>
                        </select>
                        <span class="text-danger error-text"></span>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Telefon:</label>
                        <input class="form-control" type="tel" placeholder="Sila masukkan nombor telefon" id="telefon"/>
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">No. Fax</label>
                        <input class="form-control" type="tel" placeholder="Sila masukkan nombor fax" id="fax"/>
                    </div>
                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Emel</label>
                        <input class="form-control" type="email" placeholder="Sila masukkan alamat emel" id="emel"/>
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
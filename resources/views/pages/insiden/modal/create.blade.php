<div class="modal fade" tabindex="-1" id="tambah-insiden">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Insiden</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12 fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Insiden ID</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nama-barang">
                            <span class="text-danger error-text"></span>
                        </div>
                        <div class="col-md-12 fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Jumlah Lori Bomba</label>
                            <input type="number" class="form-control" placeholder="Masukkan nombor" name="bilangan-lori">
                            <span class="text-danger error-text"></span>
                        </div>
                        <div class="col-md-12 fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Maklumat Insiden</label>
                            <textarea name="maklumat-insiden" class="form-control" id="" cols="30" rows="10" placeholder="Sila masukkan maklumat insiden"></textarea>
                            <span class="text-danger error-text"></span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12 fv-row mb-7">
                            <label class="required fs-6 fw-semibold mb-2">Lokasi</label>
                            <textarea name="maklumat-insiden" class="form-control" id="" cols="30" rows="3" placeholder="Sila masukkan alamat insiden"></textarea>
                            <span class="text-danger error-text"></span>
                        </div>
                        <div class="col-md-12 fv-row mb-7">
                            <div id="map" style="height: 350px; width: auto; border-radius: 8px;"></div>
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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6ZUDxBCPmhXS3R5Knr_g-eScB9j0JrR4&callback=initMap">
    </script>
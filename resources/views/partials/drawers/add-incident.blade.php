<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#tambah-insiden" data-kt-drawer-close="#kt_drawer_chat_close">
	<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<div class="card-title">
				<div class="d-flex justify-content-center flex-column me-3">
					<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Tambah Insiden</a>
					{{-- <div class="mb-0 lh-1">
						<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
						<span class="fs-7 fw-semibold text-muted">Active</span>
					</div> --}}
				</div>
			</div>
			<div class="card-toolbar">
				{{-- <div class="me-0">
					<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{!! getIcon('dots-square', 'fs-2') !!}</button>
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
						</div>
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
						</div>
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
							<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">{!! getIcon('information', 'fs-7') !!}</span></a>
						</div>
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
								</div>
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
								</div>
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
							</div>
						</div>
						<div class="menu-item px-3 my-1">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
						</div>
					</div>
				</div> --}}
				<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">{!! getIcon('cross-square', 'fs-2') !!}</div>
			</div>
		</div>
		<div class="card-body">
			<div class="mb-10">
                <label class="form-label">Penerangan Insiden</label>
				<textarea class="form-control mb-3" rows="2" data-kt-element="input" placeholder="Isi penerangan insiden disini"></textarea>
            </div>
			<div class="mb-10">
                <label class="form-label">Gambar Insiden</label>
                <div class="dropzone" id="kt_dropzonejs_example_1">
					<!--begin::Message-->
					<div class="dz-message needsclick">
						<i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

						<!--begin::Info-->
						<div class="ms-4">
							<h3 class="fs-5 fw-bold text-gray-900 mb-1">Klik Untuk Muatnaik Gambar.</h3>
							<span class="fs-7 fw-semibold text-gray-400">Muatnaik sehingga 10 Gambar</span>
						</div>
						<!--end::Info-->
					</div>
				</div>
            </div>
			<div class="mb-10">
                <label class="form-label">Cari Lori Bomba</label>
                <input type="text" class="form-control" placeholder="Taip disini" autocomplete="text">
            </div>
		</div>
		<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
			<div class="d-flex flex-stack text-end" style="justify-content: end">
				<button class="btn btn-primary" type="button" data-kt-element="send">Hantar</button>
			</div>
		</div>
	</div>
</div>

<script>
	var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
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

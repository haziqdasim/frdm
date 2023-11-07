<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#log-masa" data-kt-drawer-close="#kt_drawer_chat_close">
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <div class="card-title">
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Log Masa</a>
                </div>
            </div>
            <div class="card-toolbar">
                 
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    {!! getIcon('cross-square', 'fs-2') !!}</div>
            </div>
        </div>
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px"
                style="height: 717px;">

                <div class="timeline timeline-border-dashed">
                    @for ($i=0; $i<=10; $i++)
						<div class="timeline-item">
							<div class="timeline-line"></div>
							<div class="timeline-icon">
								<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
									<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
									</svg>
								</span>
							</div>

							<div class="timeline-content mb-10 mt-n2">
								<div class="overflow-auto pe-3">
									<div class="fs-5 fw-semibold mb-2">
										Hos kebakaran telah digunakan dalam operasi menyelamat.<br>
										<span class="fw-bolder">ID Insiden: </span><span class="badge badge-secondary">#6623453</span>
									</div>
									<div class="d-flex align-items-center mt-1 fs-6">
										<div class="text-muted me-2 fs-7">Telah dikemaskini pada 4:23 PM oleh</div>
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" aria-label="Sarjan Ismail"
											data-bs-original-title="Alan Nilson" data-kt-initialized="1">
											<img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="img">
										</div>
									</div>
								</div>
							</div>
						</div>
					@endfor
                </div>
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

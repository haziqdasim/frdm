<div class="modal fade" tabindex="-1" id="kemaskini-lori">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Kemaskini Lori</h3>
                
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                
            </div>

            <div class="modal-body">
                <div class="row my-10">
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Nombor Pendaftaran</label>
                        <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" placeholder="Masukkan nombor pendaftaran" name="reg-num" value="JVE 9306">
                        <span class="text-danger error-text"></span>
                    </div>
                    
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2" style="vertical-align: top;">Gambar Kenderaan</label>
                        
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('/assets/media/svg/avatars/blank.svg') }})">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('/assets/media/avatars/firetruck.png') }})"></div>

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
                    
                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Cukai Jalan Tamat</label>
                        <input class="form-control" placeholder="Pilih tarikh" value="12-11-2023" id="tarikh-luput-cukai-jalan"/>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label for="" class="required form-label">Servis seterusnya</label>
                        <input class="form-control" placeholder="Pilih tarikh" value="12-11-2023" id="servis-seterusnya"/>
                    </div>

                    <div class="col-md-12 fv-row mb-7">
                        <label class="required form-label">Menugaskan Anggota</label>
                        <input class="form-control d-flex align-items-center" value="" placeholder="Sila pilih anggota" id="kt_tagify_users" />
                    </div>
                    <div class="col-md-6 fv-row mb-7">
                        <label class="required form-label">Menugaskan Pemandu</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih pemandu">
                            <option></option>
                            <option value="1">Ltt. Aqbal Omar</option>
                            <option value="2" selected>Ltt. Shahrizal Jaafar</option>
                            <option value="3">Ltt. Fariq Aizul</option>
                        </select>
                    </div>

                    <div class="col-md-6 fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Status</label>
                        <select class="form-select" data-control="select2" data-placeholder="Pilih status">
                            <option></option>
                            <option value="1" selected>Aktif</option>
                            <option value="2">Tidak Aktif</option>
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

<script>
    var inputElm = document.querySelector('#kt_tagify_users');

    const usersList = [
        { value: 1, name: 'Ltt. Aqbal Omar', avatar: 'avatars/300-6.jpg', email: 'aqbal@bomba.gov.my' },
        { value: 2, name: 'Ltt. Shahrizal Jaafar', avatar: 'avatars/300-1.jpg', email: 'sharizal@bomba.gov.my' },
        { value: 3, name: 'Ltt. Fahmie Amzar', avatar: 'avatars/300-5.jpg', email: 'fahmie@bomba.gov.my' },
        { value: 4, name: 'Ltt. Sulaiman', avatar: 'avatars/300-25.jpg', email: 'sulaiman@bomba.gov.my' },
        { value: 5, name: 'Ltt. Fariq Aizul', avatar: 'avatars/300-9.jpg', email: 'fariq@bomba.gov.my' },
        { value: 6, name: 'Ltt. Yaseen Daniel', avatar: 'avatars/300-23.jpg', email: 'yaseen@bomba.gov.my' },
        { value: 7, name: 'Ltt. Farhan Junaidi', avatar: 'avatars/300-12.jpg', email: 'farhan@bomba.gov.my' },
        { value: 8, name: 'Ltt. Adam Bakery', avatar: 'avatars/300-13.jpg', email: 'adam@bomba.gov.my' }
    ];

    function tagTemplate(tagData) {
        return `
            <tag title="${(tagData.title || tagData.email)}"
                    contenteditable='false'
                    spellcheck='false'
                    tabIndex="-1"
                    class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                    ${this.getAttributes(tagData)}>
                <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                <div class="d-flex align-items-center">
                    <div class='tagify__tag__avatar-wrap ps-0'>
                        <img onerror="this.style.visibility='hidden'" class="rounded-circle w-25px me-2" src="assets/media/${tagData.avatar}">
                    </div>
                    <span class='tagify__tag-text'>${tagData.name}</span>
                </div>
            </tag>
        `
    }

    function suggestionItemTemplate(tagData) {
        return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">

                ${tagData.avatar ? `
                        <div class='tagify__dropdown__item__avatar-wrap me-2'>
                            <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-50px me-2" src="assets/media/${tagData.avatar}">
                        </div>` : ''
                    }

                <div class="d-flex flex-column">
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            </div>
        `
    }

    // initialize Tagify on the above input node reference
    var tagify = new Tagify(inputElm, {
        tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
        enforceWhitelist: true,
        skipInvalid: true, // do not remporarily add invalid tags
        dropdown: {
            closeOnSelect: false,
            enabled: 0,
            classname: 'users-list',
            searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
        },
        templates: {
            tag: tagTemplate,
            dropdownItem: suggestionItemTemplate
        },
        whitelist: usersList
    })

    tagify.on('dropdown:show dropdown:updated', onDropdownShow)
    tagify.on('dropdown:select', onSelectSuggestion)

    var addAllSuggestionsElm;

    function onDropdownShow(e) {
        var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

        if (tagify.suggestedListItems.length > 1) {
            addAllSuggestionsElm = getAddAllSuggestionsElm();

            // insert "addAllSuggestionsElm" as the first element in the suggestions list
            dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
        }
    }

    function onSelectSuggestion(e) {
        if (e.detail.elm == addAllSuggestionsElm)
            tagify.dropdown.selectAll.call(tagify);
    }

    // create a "add all" custom suggestion element every time the dropdown changes
    function getAddAllSuggestionsElm() {
        // suggestions items should be based on "dropdownItem" template
        return tagify.parseTemplate('dropdownItem', [{
            class: "addAll",
            name: "Tambah semua",
            email: tagify.settings.whitelist.reduce(function (remainingSuggestions, item) {
                return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
            }, 0) + " Anggota"
        }]
        )
    }
</script>
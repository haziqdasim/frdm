var apiUrl = '/api/v1/inventory';

async function fetchInventoryItem(id) {
    await axios.get(apiUrl + '/' + id).then(function (response) {

        var imageInputElement = document.getElementById("kt_image_input_control");

        if(response.data?.photo_path !== null)
        {
            imageInputElement.style.backgroundImage = "url('./storage/app/public/inventories/'"+response.data.photo_path+")";

            console.log(imageInputElement.style);
        }

        document.getElementById('nama-barang-edit').value = response.data.name;
        document.getElementById('inventory-id').value = response.data.id;
        document.getElementById('rfid-edit').value = response.data.rfid_no ?? 'N/A';

    }).catch(function (error) {
        console.log(error);
    });
}

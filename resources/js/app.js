import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {Dropzone} from "dropzone";

Dropzone.autoDiscover = false;
let elementDropzone = document.getElementById('dropzone')
if (elementDropzone) {
    const dropzone = new Dropzone('#dropzone', {
        dictDefaultMessage: 'Upload File',
        acceptedFiles: '.png,.jpg,.jpeg,.gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Delete File',
        maxFiles: 1,
        uploadMultiple: false,
        init: function () {
            this.on("addedfile", function (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    let imagePreview = document.getElementById("image-preview");
                    imagePreview.src = event.target.result;

                };
                reader.readAsDataURL(file);
                let test = document.querySelector('.dz-remove');
                test.style.color = 'red'

            });
        }

    })

    dropzone.on('success', function (file, response) {
        document.querySelector('[name="img_item"]').value = response.img_item;
    })

    dropzone.on('removedfile', function () {
        document.querySelector('[name="img_item"]').value = "";
        let imagePreview = document.getElementById("image-preview");
        imagePreview.src = 'https://cdn-icons-png.flaticon.com/512/149/149071.png';
    })
}

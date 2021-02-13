/*===========================
<|-Variables              -|>
===========================*/
let previewBox = document.getElementById('previewBox');
let imgPreview = document.getElementById('imgPreview');
let content = document.getElementById('content');
let cancelIcon = document.getElementById('cancelIcon');
let inputField = document.getElementById('field');
let button = document.getElementById('button');
let regPattern = /\.(jpe?g|png|gif|bmp)$/i;

/*===========================
<|-Event                  -|>
===========================*/
inputField.addEventListener('focusout', function () {
    let imgUrl = inputField.value;

    if (imgUrl != "") {
        if (regPattern.test(imgUrl)) {
            let imgTag = `<img src="${imgUrl}">`;
            imgPreview.innerHTML += imgTag;
            previewBox.classList.add('activePreview');
            content.classList.add('activeContent');
            cancelIcon.classList.add('activeIcon');
            inputField.classList.add('disabled');
            button.classList.add('active');

            cancelIcon.addEventListener('click', function() {
                imgPreview.innerHTML = "";
                previewBox.classList.remove('activePreview');
                content.classList.remove('activeContent');
                cancelIcon.classList.remove("activeIcon");
                inputField.classList.remove("disabled");
                button.classList.remove("active");
            });

        } else {
            Swal.fire({
                title: `<p class="alertTitle">We have a problem with the route: <span>${imgUrl.substring(0, 40)}...</span></p>`,
                html: '<p class="alertText">Make sure the route is correct<br>Correct path example: <span>https://website.com/photo.jpg</span><br>Make sure the path ends with the image extension<br>Remember that the allowed extensions are <span>(.jpeg .jpg .png .gif .bmp)</span></p>',
                icon: 'warning',
                confirmButtonText: 'Confirm',
                grow: 'row',
                backdrop: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
    
                showConfirmButton: true,
                confirmButtonColor: '#fb6d43',
                confirmButtonAriaLabel: 'Confirm',
    
            }).then((result) =>{
                inputField.value = "";
            });
        }
    }
});

function previewImgUser () {
    const imgUser = document.querySelector('#imgUser');
    const imgUserLabel = document.querySelector('.custom-file-label');
    const imgUserPreview = document.querySelector('.img-preview');

    imgUserLabel.textContent = imgUser.files[0].name;

    const fileImgUser = new FileReader();
    fileImgUser.readAsDataURL(imgUser.files[0]);

    fileImgUser.onload = function (e) {
        imgUserPreview.src = e.target.result;
    }
}

function previewImgCategory () {
    const imgCategory = document.querySelector('#imgCategory');
    const imgCategoryLabel = document.querySelector('.custom-file-label');
    const imgCategoryPreview = document.querySelector('.img-preview');

    imgCategoryLabel.textContent = imgCategory.files[0].name;

    const fileImgCategory = new FileReader();
    fileImgCategory.readAsDataURL(imgCategory.files[0]);

    fileImgCategory.onload = function (e) {
        imgCategoryPreview.src = e.target.result;
    }
}

function previewImgPosts () {
    const imgPosts = document.querySelector('#imgPosts');
    const imgPostsLabel = document.querySelector('.custom-file-label');
    const imgPostsPreview = document.querySelector('.img-preview');

    imgPostsLabel.textContent = imgPosts.files[0].name;

    const fileImgPosts = new FileReader();
    fileImgPosts.readAsDataURL(imgPosts.files[0]);

    fileImgPosts.onload = function (e) {
        imgPostsPreview.src = e.target.result;
    }
}

function previewImgWidget () {
    const imgWidget = document.querySelector('#imgWidget');
    const imgWidgetLabel = document.querySelector('.custom-file-label');
    const imgWidgetPreview = document.querySelector('.img-preview');

    imgWidgetLabel.textContent = imgWidget.files[0].name;

    const fileImgWidget = new FileReader();
    fileImgWidget.readAsDataURL(imgWidget.files[0]);

    fileImgWidget.onload = function (e) {
        imgWidgetPreview.src = e.target.result;
    }
}

function previewImgPages () {
    const imgPages = document.querySelector('#imgPages');
    const imgPagesLabel = document.querySelector('.custom-file-label');
    const imgPagesPreview = document.querySelector('.img-preview');

    imgPagesLabel.textContent = imgPages.files[0].name;

    const fileImgPages = new FileReader();
    fileImgPages.readAsDataURL(imgPages.files[0]);

    fileImgPages.onload = function (e) {
        imgPagesPreview.src = e.target.result;
    }
}

function previewImgBeranda () {
    const imgBeranda = document.querySelector('#imgBeranda');
    const imgBerandaLabel = document.querySelector('.custom-file-label');
    const imgBerandaPreview = document.querySelector('.img-preview');

    imgBerandaLabel.textContent = imgBeranda.files[0].name;

    const fileImgBeranda = new FileReader();
    fileImgBeranda.readAsDataURL(imgBeranda.files[0]);

    fileImgBeranda.onload = function (e) {
        imgBerandaPreview.src = e.target.result;
    }
}

function previewImgSettings () {
    const imgSettings = document.querySelector('#imgSettings');
    const imgSettingsLabel = document.querySelector('.custom-file-label');
    const imgSettingsPreview = document.querySelector('.img-preview');

    imgSettingsLabel.textContent = imgSettings.files[0].name;

    const fileImgSettings = new FileReader();
    fileImgSettings.readAsDataURL(imgSettings.files[0]);

    fileImgSettings.onload = function (e) {
        imgSettingsPreview.src = e.target.result;
    }
}
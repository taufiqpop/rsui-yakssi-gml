function previewImgUser() {
  const imgUser = document.querySelector("#imgUser");
  const imgUserLabel = document.querySelector(".custom-file-label");
  const imgUserPreview = document.querySelector(".img-preview");

  imgUserLabel.textContent = imgUser.files[0].name;

  const fileImgUser = new FileReader();
  fileImgUser.readAsDataURL(imgUser.files[0]);

  fileImgUser.onload = function (e) {
    imgUserPreview.src = e.target.result;
  };
}

function previewImgPosts() {
  const imgPosts = document.querySelector("#imgPosts");
  const imgPostsLabel = document.querySelector(".custom-file-label");
  const imgPostsPreview = document.querySelector(".img-preview");

  imgPostsLabel.textContent = imgPosts.files[0].name;

  const fileImgPosts = new FileReader();
  fileImgPosts.readAsDataURL(imgPosts.files[0]);

  fileImgPosts.onload = function (e) {
    imgPostsPreview.src = e.target.result;
  };
}

function previewImgPages() {
  const imgPages = document.querySelector("#imgPages");
  const imgPagesLabel = document.querySelector(".custom-file-label");
  const imgPagesPreview = document.querySelector(".img-preview");

  imgPagesLabel.textContent = imgPages.files[0].name;

  const fileImgPages = new FileReader();
  fileImgPages.readAsDataURL(imgPages.files[0]);

  fileImgPages.onload = function (e) {
    imgPagesPreview.src = e.target.result;
  };
}

function previewImgPasien() {
  const imgPasien = document.querySelector("#imgPasien");
  const imgPasienLabel = document.querySelector(".custom-file-label");
  const imgPasienPreview = document.querySelector(".img-preview");

  imgPasienLabel.textContent = imgPasien.files[0].name;

  const fileImgPasien = new FileReader();
  fileImgPasien.readAsDataURL(imgPasien.files[0]);

  fileImgPasien.onload = function (e) {
    imgPasienPreview.src = e.target.result;
  };
}

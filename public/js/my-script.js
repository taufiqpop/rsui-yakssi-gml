// Time Zone Responsive
window.onload = function () {
  jam();
};

function jam() {
  let e = document.getElementById("jam"),
    d = new Date(),
    h,
    m,
    s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h + ":" + m + ":" + s;

  setTimeout("jam()", 1000);
}

function set(e) {
  e = e < 10 ? "0" + e : e;
  return e;
}

// Active Page Highlight On Click
$(document).ready(function () {
  let nav = $("a[href='" + window.location.href + "']");
  nav.parent().addClass("active");
  // $(".nav-item a")
  //   .on("click", function () {
  //     $(".nav-item.active").removeClass(" active");
  //     $(this).parent().addClass(" active");
  //   })
  //   .filter(function () {
  //     return window.location.href.indexOf($(this).attr("href").trim()) > -1;
  //   })
  //   .click();
});

// Preview Images
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

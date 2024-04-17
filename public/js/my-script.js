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

function previewImgContent() {
  const imgContent = document.querySelector("#imgContent");
  const imgContentLabel = document.querySelector(".custom-file-label");
  const imgContentPreview = document.querySelector(".img-preview");

  imgContentLabel.textContent = imgContent.files[0].name;

  const fileImgContent = new FileReader();
  fileImgContent.readAsDataURL(imgContent.files[0]);

  fileImgContent.onload = function (e) {
    imgContentPreview.src = e.target.result;
  };
}

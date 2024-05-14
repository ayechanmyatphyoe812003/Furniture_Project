const imageInput1 = document.getElementById("image1");
const imageInput2 = document.getElementById("image2");
const imageInput3 = document.getElementById("image3");
const imageInput4 = document.getElementById("image4");

const img_pre1 = document.querySelector(".img_preview1");
const img_pre2 = document.querySelector(".img_preview2");
const img_pre3 = document.querySelector(".img_preview3");
const img_pre4 = document.querySelector(".img_preview4");

imageInput1.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      img_pre1.src = reader.result;
    };
    reader.readAsDataURL(file);
  } else {
    photoPreview1.innerHTML = "";
  }
});

imageInput2.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      img_pre2.src = reader.result;
    };
    reader.readAsDataURL(file);
  } else {
    photoPreview2.innerHTML = "";
  }
});
imageInput3.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      img_pre3.src = reader.result;
    };
    reader.readAsDataURL(file);
  } else {
    photoPreview3.innerHTML = "";
  }
});
imageInput4.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      img_pre4.src = reader.result;
    };
    reader.readAsDataURL(file);
  } else {
    photoPreview4.innerHTML = "";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const inputBox = documment.querySelector("img");
});

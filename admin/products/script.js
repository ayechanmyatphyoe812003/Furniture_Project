const imageInput1 = document.getElementById("image1");
const imageInput2 = document.getElementById("image2");
const imageInput3 = document.getElementById("image3");
const imageInput4 = document.getElementById("image4");
const photoPreview1 = document.createElement("div");
photoPreview1.classList.add("photo-preview1");
const photoPreview3 = document.createElement("div");
photoPreview3.classList.add("photo-preview3");
const photoPreview2 = document.createElement("div");
photoPreview2.classList.add("photo-preview2");
const photoPreview4 = document.createElement("div");
photoPreview4.classList.add("photo-preview4");
const leftColumn = document.querySelector(".left-column");
leftColumn.appendChild(photoPreview1);
leftColumn.appendChild(photoPreview2);
leftColumn.appendChild(photoPreview3);
leftColumn.appendChild(photoPreview4);

imageInput1.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      const imgElement = document.createElement("img");
      imgElement.src = reader.result;
      photoPreview1.innerHTML = "";
      photoPreview1.appendChild(imgElement);
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
      const imgElement = document.createElement("img");
      imgElement.src = reader.result;
      photoPreview2.innerHTML = "";
      photoPreview2.appendChild(imgElement);
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
      const imgElement = document.createElement("img");
      imgElement.src = reader.result;
      photoPreview3.innerHTML = "";
      photoPreview3.appendChild(imgElement);
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
      const imgElement = document.createElement("img");
      imgElement.src = reader.result;
      photoPreview4.innerHTML = "";
      photoPreview4.appendChild(imgElement);
    };
    reader.readAsDataURL(file);
  } else {
    photoPreview4.innerHTML = "";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const inputBox = documment.querySelector("img");
});

// window.addEventListener("load", () => {
//   const imgElement = document.createElement("img");
//   imgElement.src = "<?= $img1 ?>";
//   photoPreview1.innerHTML = "";
//   photoPreview1.appendChild(imgElement);
// });

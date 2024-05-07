"use strict";
//imgs
const thumImg = document.querySelectorAll(".img_small img");
const imgLarge = document.querySelector(".img_thumbnail img");
//modal
const modalEl = document.querySelector(".modal");
const closeModal = document.querySelector(".close_icon");
const nextImg = document.querySelector(".next img");
const prevImg = document.querySelector(".prev img");
const modalImgs = document.querySelectorAll(".img_small_modal img");
const modalLImg = document.querySelector(".m_img");
let proPrice = 125;
let totalQty = qty.innerHTML;
let totalPrice;
// shoping cart dispaly and hide

//btn cart to increament number
decr.addEventListener("click", () => {
  if (totalQty == 1) {
    totalQty == 1;
  } else {
    totalQty--;
  }
  totalPrice = proPrice * totalQty;
  normalPrice.textContent = "$" + totalPrice + ".00";
  qty.textContent = totalQty;
});
//btn cart to increament number
increa.addEventListener("click", () => {
  totalQty++;
  totalPrice = proPrice * totalQty;
  normalPrice.textContent = "$" + totalPrice + ".00";
  qty.textContent = totalQty;
});
//add to carts
btnAddCart.addEventListener("click", () => {
  qtyLable.style.display = "block";
  qtyLable.innerHTML = totalQty;
  proContainer.innerHTML = "";
  let html = `<img src="./images/profile2.jpg" alt="" />
      <div class="p_details">
        <p class="pro_txt">Fall Limited Edition Sneakers</p>
        <p class="price">
          $125.00 <span>x</span><span class="times">${totalQty}</span>
          $<span class="total">${totalPrice}</span>
        </p>
      </div>
      <div class="trash">
        <img src="./images/icon-delete.svg" alt="" class="trash_img" />
      </div>`;
  proContainer.insertAdjacentHTML("afterbegin", html);
  cartEmpty.innerHTML = "";
  document.querySelector(".trash_img").addEventListener("click", () => {
    cartEmpty.innerHTML = "Your cart is empty :";
    proContainer.innerHTML = "";
    qtyLable.style.display = "none";
  });
});

// display thumbnail images
thumImg.forEach((img, indx) => {
  indx++;
  img.addEventListener("click", (e) => {
    imgLarge.src = `images/img${indx}.jpg`;
    thumImg.forEach((thumb) => thumb.classList.remove("active"));
    img.classList.add("active");
  });
});
// display modal
imgLarge.addEventListener("click", () => {
  modalEl.style.display = "block";
});
// hide modal modal
closeModal.addEventListener("click", () => {
  modalEl.style.display = "none";
});
// display images in the modal
modalImgs.forEach((mImg, indx) => {
  indx++;
  mImg.addEventListener("click", (e) => {
    modalLImg.src = `images/profile2.jpg`;
    modalImgs.forEach((thuMImg) => thuMImg.classList.remove("active"));
    mImg.classList.add("active");
  });
});

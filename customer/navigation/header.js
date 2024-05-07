document.querySelector(".hamburger-icon").addEventListener("click", () => {
  document.querySelector(".navbar").classList.add("active");
});

document.querySelector(".close-icon").addEventListener("click", () => {
  document.querySelector(".navbar").classList.remove("active");
});

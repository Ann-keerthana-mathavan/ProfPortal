"use strict";
const modal = document.querySelector(".box");
const overlay = document.querySelector(".overlay");
const btnsOpenModal = document.querySelectorAll(".btn--show-modal");
const btnCloseModal = document.querySelector(".btn--close-modal");
const input = document.querySelector(".toggle-password");
const toggleBtn = document.querySelector(".eye-icon");
const resetPassModal = document.querySelector(".resetPassModal");
const resetPassBtn = document.querySelector(".btn-forget-password");
const resetCloseBtn = document.querySelector(".reset-btn-close");
const signBackBtn = document.querySelector(".back-sign-in");
let passwordVisible = false;

const openModal = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};
// opening and closing the modal
for (const btn of btnsOpenModal) {
  btn.addEventListener("click", openModal);
}

btnCloseModal.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);
// toggling password visibility
toggleBtn.addEventListener("click", function () {
  if (passwordVisible) {
    input.setAttribute("type", "text");
    toggleBtn.classList.remove("fa-eye-slash");
    toggleBtn.classList.add("fa-eye");
    passwordVisible = false;
  } else {
    input.setAttribute("type", "password");
    toggleBtn.classList.remove("fa-eye");
    toggleBtn.classList.add("fa-eye-slash");
    passwordVisible = true;
  }
});
// opening the password reset modal
resetPassBtn.addEventListener("click", () => {
  resetPassModal.classList.remove("hidden");
  modal.classList.add("hidden");
});
// closing the password reset modal
resetCloseBtn.addEventListener("click", () => {
  resetPassModal.classList.add("hidden");
  overlay.classList.add("hidden");
});

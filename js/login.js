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
let passwordVisible = true;

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
  input.type = passwordVisible ? "text" : "password";
  passwordVisible = !passwordVisible;
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

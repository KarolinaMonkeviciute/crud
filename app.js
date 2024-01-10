const amountPlaceholder = document.querySelector("#amount");
const rangeInput = document.querySelector('[type="range"]');

amountPlaceholder.innerText = rangeInput.value;

rangeInput.addEventListener("input", (e) => {
  amountPlaceholder.innerText = e.target.value;
});

const msg = document.querySelector("[data-removable]");

if (msg) {
  setTimeout(() => {
    msg.remove();
  }, +msg.dataset.removeAfter * 5000);
}

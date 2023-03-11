/*const $manual_list = document.querySelectorAll(".item");
console.log([...$manual_list]);
let selectedItem = true;

[...$manual_list].forEach(($manual_list) => {
  $manual_list.addEventListener("click", (e) => {
    e.preventDefault();
    e.target.style.background = "darkgrey";
    console.log("clicked");
  });
});*/

const $moresuppliers = document.querySelector("#suppliers");
const $buttonremove = document.querySelector(".moresuppliers");
$buttonremove.addEventListener("click", (e) => {
  $moresuppliers.classList.remove("collapse");
  $buttonremove.classList.add("hidden");
  console.log("test");
});

const $til1 = document.querySelector(".til1");
const $til2 = document.querySelector(".til2");
const $til3 = document.querySelector(".til3");
const $til4 = document.querySelector(".til4");
const $site = document.querySelector(".site");
const $tk = document.querySelector(".tk");

$til1.addEventListener("input", (e) => {
  let $newTil1 = $til1.value;
  if ($newTil1.length > 10) {
    $til1.value = $newTil1.slice(0, 10);
  }
});

$til2.addEventListener("input", (e) => {
  let $newTil2 = $til2.value;
  if ($newTil2.length > 10) {
    $til2.value = $newTil2.slice(0, 10);
  }
});
$til3.addEventListener("input", (e) => {
  let $newTil3 = $til3.value;
  if ($newTil3.length > 10) {
    $til3.value = $newTil3.slice(0, 10);
  }
});
$til4.addEventListener("input", (e) => {
  let $newTil4 = $til4.value;
  if ($newTil4.length > 10) {
    $til4.value = $newTil4.slice(0, 10);
  }
});

$tk.addEventListener("input", (e) => {
  let SearchTerm = e.target.value;
  if (SearchTerm.length > 5) {
    $tk.value = SearchTerm.slice(0, 5);
  }
});

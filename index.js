const title = document.createElement("div");
const $searchResults = document.querySelector(".results");
const $tkInput = document.querySelector(".tkInput");
const $nomos = document.querySelector(".nomos");
const test = document.querySelector(".image-left img");

const $btnSubmit = document.querySelector(".btn-submit");
const $til1 = document.querySelector(".til1");
const $til2 = document.querySelector(".til2");

//document.body.appendChild(title);

//document.querySelector("aside").appendChild(title);

console.log(test.getAttribute("width")); //προσθέτουμε attribute με το setAttribute()

const myPromise = new Promise((resolve, reject) => {
  if (true) {
    setTimeout(() => {
      resolve("Happy path!");
    }, 2000);
  } else {
    setTimeout(() => {
      reject(Error("Κατι πήγε στραβά..."));
    }, 2000);
  }
});

myPromise
  .then((data) => {
    if (data) {
      title.innerHTML =
        " <p>  Γράψε τον ταχυδρομικό κώδικα της περιοχής που θέλεις να στείλεις δέματα </p>";
    }
  })
  .catch((error) => {
    title.innerHTML = " <p>  Κάτι πήγε στραβά </p>";
  });

//Max input length
$tkInput.addEventListener("input", (e) => {
  $nomos.value = "";
  let SearchTerm = e.target.value;
  //console.log(SearchTerm);

  //console.log(typeof SearchTerm.slice(0, 1));
  if (SearchTerm.length >= 2) {
    switch (Number(SearchTerm.slice(0, 1))) {
      case 1:
        $nomos.value = "Αττικής";
        break;
      case 2:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
            $nomos.value = "Κορινθίας";
            break;
          case 1:
            $nomos.value = "Αργολίδας";
            break;
          case 2:
            $nomos.value = "Αρκαδίας";
            break;
          case 3:
            $nomos.value = "Λακωνίας";
            break;
          case 4:
            $nomos.value = "Μεσσηνίας";
            break;
          case 5:
          case 6:
            $nomos.value = "Αχαΐας";
            break;
          case 7:
            $nomos.value = "Ηλείας";
            break;
          case 8:
            $nomos.value = "Κεφαλληνίας";
            break;
          case 9:
            $nomos.value = "Ζακύνθου";
            break;
        }
        break;
      case 3:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
            $nomos.value = "Αιτωλοακαρνανίας";
            break;
          case 1:
            $nomos.value = "Λευκάδας";
            break;
          case 2:
            $nomos.value = "Βοιωτίας";
            break;
          case 3:
            $nomos.value = "Φωκίδας";
            break;
          case 4:
            $nomos.value = "Εύβοιας";
            break;
          case 5:
            $nomos.value = "Φθιώτιδας";
          case 6:
            $nomos.value = "Ευρυτανίας";
            break;
          case 7:
          case 8:
            $nomos.value = "Μαγνησίας";
            break;
        }
        break;
      case 4:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
          case 1:
            $nomos.value = "Λάρισας";
            break;
          case 2:
            $nomos.value = "Τρικάλων";
            break;
          case 3:
            $nomos.value = "Καρδίτσας";
            break;
          case 4:
          case 5:
            $nomos.value = "Ιωαννίνων";
            break;
          case 6:
            $nomos.value = "Θεσπρωτίας";
            break;
          case 7:
            $nomos.value = "Άρτας";
            break;
          case 8:
            $nomos.value = "Πρέβεζας";
            break;
          case 9:
            $nomos.value = "Κέρκυρας";
            break;
        }
        break;
      case 5:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
            $nomos.value = "Κοζάνης";
            break;
          case 1:
            $nomos.value = "Γρεβενών";
            break;
          case 2:
            $nomos.value = "Καστοριάς";
            break;
          case 3:
            $nomos.value = "Φλώρινας";
            break;
          case 4:
          case 5:
            0;
          case 6:
            0;
          case 7:
            0;
            $nomos.value = "Θεσσαλονίκης";
            0;
            break;
            0;
          case 8:
            0;
            $nomos.value = "Πέλλης";
            break;
          case 9:
            $nomos.value = "Ημαθίας";
            break;
        }
        break;
      case 6:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
            $nomos.value = "Πιερίας";
            break;
          case 1:
            $nomos.value = "Κιλκίς";
            break;
          case 2:
            $nomos.value = "Σερρών";
            break;
          case 3:
            $nomos.value = "Χαλκιδικής";
            break;
          case 4:
          case 5:
            $nomos.value = "Καβάλας";
            break;
          case 6:
            $nomos.value = "Δράμας";
            break;
          case 7:
            $nomos.value = "Ξάνθης";
            break;
          case 8:
            $nomos.value = "Έβρου";
            break;
          case 9:
            $nomos.value = "Ροδόπης";
            break;
        }
        break;
      case 7:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
          case 1:
            $nomos.value = "Ηρακλείου";
            break;
          case 2:
            $nomos.value = "Λασιθίου";
            break;
          case 3:
            $nomos.value = "Χανίων";
            break;
          case 4:
            $nomos.value = "Ρεθύμνης";
            break;
        }
        break;
      case 8:
        switch (Number(SearchTerm.slice(1, 2))) {
          case 0:
            $nomos.value = "Αττικής";
            break;
          case 1:
            $nomos.value = "Λέσβου";
            break;
          case 2:
            $nomos.value = "Χίου";
            break;
          case 3:
            $nomos.value = "Σάμου";
            break;
          case 4:
            $nomos.value = "Κυκλάδων";
            break;
          case 5:
            $nomos.value = "Δωδεκανήσου";
            break;
        }
        break;
      default:
        $nomos.value = "";
    }
  }
  if (SearchTerm.length > 5) {
    $tkInput.value = SearchTerm.slice(0, 5);
  }
});

if ($til2.innerHTML == "0") {
  $til2.innerHTML = "-";
}

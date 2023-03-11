<html>
<form action="search_results.php" method="post">
          <h1 class="fs-4 fw-bold no-padding-top">Εύρεση Μεταφορικής</h1>
          <div class="form-margins">
            <label for="taxidromikos"> ΤΚ</label>
            <input
              class="tkInput center"
              name="tax"
              type="number"
              placeholder="πχ 19015"
              width="50%"
              value="<?php print_r($tkinput);?>"
              required
            />
          </div>
          <div class="form-margins">
            <label for="nomos"> Νομός </label>
            <input
              class="nomos center"
              name="nomos"
              type="text"
              placeholder="πχ Αττικής"
              width="50%"
              maxlength="16"
              value="<?php if(isset($nomosinput)){print_r($nomosinput);}?>"

            />
          </div>
          <div class="form-margins">
            <label for="antikatavoli">Παίρνει αντικαταβολή</label>
            <input type="checkbox" />
          </div>
            <button class="btn w-100 text-light" type="submit" value="Αναζήτηση" >Αναζήτηση</button>

        </form>
</html>

<form class="fw-bold new_form" action="input_success.php" method="post">
    <h1 class="fs-4 fw-bold no-padding-top mb-5">Προσθήκη νέας μεταφορικής</h1>
    <div>
        <label for="metaforiki"> Μεταφορική</label>
        <input
            class="inputGroup-sizing-lg col-12 center"
            name="metaf"
            type="text"
            placeholder="πχ Μεταφορική Πολύμερος"
            required>
    </div>
    <div class="row">
        <div class="col-6 mt-3">
            <label for="til1"> Τηλέφωνο 1</label>
            <input
            class="til1 center"
            name="til1"
            type="number"
            placeholder="πχ 2102224888"
        
            required
            />
            </div>
        <div class="col-6 mt-3" >
            <label for="til2"> Τηλέφωνο 2</label>
            <input
            class="til2 center"
            name="til2"
            type="number"
            placeholder="πχ 2102224888"/>
        </div>   
    </div>
    <div class="row">
        <div class="col-6 mt-3">
            <label for="til3"> Τηλέφωνο 3</label>
            <input
            class="til3 center"
            name="til3"
            type="number"
            placeholder="πχ 2102224888"/>
        </div>
        <div class="col-6 mt-3">
            <label for="til4"> Τηλέφωνο 4</label>
            <input
            class="til4 center"
            name="til4"
            type="number"
            placeholder="πχ 2102224888"/>
        </div>   
    </div>      


    <div class="form-margins">
    <label for="addr"> Διεύθυνση </label>
    <input
        class="center"
        name="addr"
        type="text"
        placeholder="πχ Αγίας Λάυρας, 66"
        width="50%"/>
    </div>
    <div class="form-margins">
    <label for="taxidromikos"> ΤΚ</label>
    <input
        class="tk center"
        name="tk"
        type="number"
        placeholder="πχ 19015"
        width="50%"
        required/>
    </div>    
    <div class="form-margins">
    <label for="website">Website</label>
    <input
        class="center"
        name="website"
        type="text"
        placeholder="πχ http://www.homesweethome.gr"/>
    </div>    
    <div class="form-margins">
    <label for="email">Email</label>
    <input
        class="center"
        name="email"
        type="email"
        placeholder="πχ sales@homesweethome.gr"/>
    </div>
    <div class="form-margins">
    <label for="descr">Περιγραφή</label>
    <textarea
        class="w-100 h-25"
        name="descr"
        type="text">
</textarea>
    </div>    
    <button class="btn w-100 text-light" type="submit" value="Προσθήκη" >Προσθήκη</button>

</form>
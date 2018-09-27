<?php
    include "templates/header.php";
?>
<div>
    <h1>Government Secondary School</h1>
    <hr class="uk-divider-icon">
</div>
<form action="">
    <div class="uk-margin">
        <label class="uk-form-label" for=""><block> Student Name : </block></label>
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for=""><block>Student Number : </block> </label>
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip"></span>
            <input class="uk-input" type="text">
        </div>
    </div>
</form>

<?php
include "templates/footer.php";
?>
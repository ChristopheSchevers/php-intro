<?php

?>

<form action="home.php" method="post">
    <div class="form-group">
        <div class="row">
            <p>Are you a bot from the future coming to exterminate the human race and are just here for a cool nickname?</p>
        </div>
        <div class="row">
            <input class="form-check-input" type="radio" name="radio1" value="yes">
            <label for="radio1" class="form-check-label">Yes</label>
            <input class="form-check-input" type="radio" name="radio2" value="no">
            <label for="radio2" class="form-check-label">No</label>
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </div>
</form>
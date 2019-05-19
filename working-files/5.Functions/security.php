<?php

?>

<body class="d-flex align-items-center">
    <div class="container col-8 offset-2" name="security-page" <?php echo !isset($_SESSION['hide-security']) ? "" : $_SESSION['hide-security']; ?>>
        <div class="card p-5">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row text-center">
                            <p>Are you a bot from the future coming to exterminate the human race and are just here for a cool nickname?</p>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="form-check p-3 mr-5">
                                <input class="form-check-input" type="radio" name="radio-security" id="radio1" value="yes">
                                <label for="radio1" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check p-3">
                                <input class="form-check-input" type="radio" name="radio-security" id="radio2" value="no" checked>
                                <label for="radio2" class="form-check-label">No</label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-secondary" name="security-btn">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if(isset($random_nickname)){
                    echo '<div class="row justify-content-center my-4"><p>'.$random_nickname.'</p></div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
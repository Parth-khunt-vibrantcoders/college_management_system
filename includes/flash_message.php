<?php

if(isset($_SESSION['flash_message'])){ ?>
    <div class="alert alert-<?= $_SESSION['flash_type'] ?> alert-dismissible fade show mt-5" role="alert"><?= $_SESSION['flash_message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php 
   unset($_SESSION['flash_type']);
   unset($_SESSION['flash_message']);
} ?>



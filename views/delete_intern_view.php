<?php 

    $title = "Delete Intern With Id $id";

    ob_start(); ?>

        <h5 class="mb-3">Do you really want to delete the intern with id <?= $id ?>?</h5>

        <a href="index.php?action=list" class="btn btn-warning">Cancel</a>

        <a href="index.php?action=destroy&id=<?= $id ?>" class="btn btn-danger">Delete</a>

    <?php $content = ob_get_clean();

    include_once "views/layout.php";

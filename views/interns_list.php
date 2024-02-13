<?php

    $title = "List Of Interns";

    ob_start();

?>

<a href="index.php?action=create" class="btn btn-primary">Add Intern</a>

<table class="table">

  <thead>

    <tr>

      <th scope="col">#Id</th>

      <th scope="col">First Name</th>

      <th scope="col">Last Name</th>

      <th scope="col">Login</th>

      <th scope="col">Password</th>

      <th scope="col">Actions</th>

    </tr>

  </thead>

  <tbody>

    <?php 
    
        foreach ($interns as $intern) { ?>

            <tr>

                <td><?= $intern->id ?></td>

                <td><?= $intern->first_name ?></td>

                <td><?= $intern->last_name ?></td>

                <td><?= $intern->login ?></td>

                <td><?= $intern->password ?></td>

                <td>

                  <a 
                  
                    href="index.php?action=delete&id=<?= $intern->id ?>" 
                    
                    class="btn btn-danger btn-sm"
                  
                  >Delete</a>

                  <a 
                  
                    href="index.php?action=update&id=<?= $intern->id ?>" 
                    
                    class="btn btn-success btn-sm"
                  
                  >Update</a>

                </td>

            </tr>

        <?php }
    
    ?>

  </tbody>

</table>

<?php 

    $content = ob_get_clean();

    include_once "views/layout.php"

?>

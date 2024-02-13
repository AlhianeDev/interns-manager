<?php

    $title = "Update Intern With id $intern->id";

    ob_start();

?>

    <form method="post" action="index.php?action=edite">

        <div class="mb-3">

            <input 
                
                type="hidden" 

                name="id"

                value="<?= $intern->id ?>"
            
            >

            <label 
            
                for="exampleInputFirstName" 
                
                class="form-label"
            
            >First Name</label>

            <input 
                
                type="text" 
                
                class="form-control" 
                
                id="exampleInputFirstName" 

                name="first_name"

                value="<?= $intern->first_name ?>"
                
                aria-describedby="firstNameHelp"
            
            >

        </div>

        <div class="mb-3">

            <label 
            
                for="exampleInputLastName" 
                
                class="form-label"
            
            >Last Name</label>

            <input 
                
                type="text" 
                
                class="form-control" 
                
                id="exampleInputLastName" 

                name="last_name"

                value="<?= $intern->last_name ?>"
                
                aria-describedby="lastNameHelp"
            
            >

        </div>

        <div class="mb-3">

            <label 
            
                for="exampleInputLogin" 
                
                class="form-label"
            
            >Login</label>

            <input 
                
                type="text" 
                
                class="form-control" 
                
                id="exampleInputLogin" 

                name="login"

                value="<?= $intern->login ?>"
                
                aria-describedby="loginHelp"
            
            >

        </div>

        <div class="mb-3">

            <label 
            
                for="exampleInputPassword" 
                
                class="form-label"
            
            >Password</label>

            <input 
                
                type="password" 
                
                class="form-control" 
                
                id="exampleInputPassword" 

                name="password"

                value="<?= $intern->password ?>"
                
                aria-describedby="passwordHelp"
            
            >

        </div>

        <button type="submit" class="btn btn-primary">Update Intern</button>

    </form>

<?php 

    $content = ob_get_clean();

    include_once "views/layout.php"

?>

<?php

    $title = "Add Intern";

    ob_start();

?>

    <form method="post" action="index.php?action=store">

        <div class="mb-3">

            <label 
            
                for="exampleInputFirstName" 
                
                class="form-label"
            
            >First Name</label>

            <input 
                
                type="text" 
                
                class="form-control" 
                
                id="exampleInputFirstName" 

                name="first_name"
                
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
                
                aria-describedby="passwordHelp"
            
            >

        </div>

        <button type="submit" class="btn btn-primary">Add Intern</button>

    </form>

<?php 

    $content = ob_get_clean();

    include_once "views/layout.php"

?>

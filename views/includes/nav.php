<nav class="navbar navbar-expand-lg bg-body-tertiary">

  <div class="container-fluid">

    <a class="navbar-brand" href="index.php?action=list">Interns Manager</a>

    <button 
    
        class="navbar-toggler"
        
        type="button" 
        
        data-bs-toggle="collapse"
        
        data-bs-target="#navbarNavAltMarkup"
        
        aria-controls="navbarNavAltMarkup"
        
        aria-expanded="false" 
        
        aria-label="Toggle navigation"
    
    > <span class="navbar-toggler-icon"></span> </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">

          <a 
          
            class="nav-link <?= $title == "List Of Interns" ? "active" : null ?>" 
            
            aria-current="page" 
            
            href="index.php?action=list"
          
          >Interns List</a>

        </li>

        <li class="nav-item">

          <a 
          
            class="nav-link <?= $title == "Add Intern" ? "active" : null ?>" 
            
            href="index.php?action=create"
          
          >Add Intern</a>

        </li>

      </ul>

    </div>

  </div>

</nav>
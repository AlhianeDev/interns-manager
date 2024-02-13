<?php

  require_once "controllers/interns_controller.php";

  if (isset($_GET["action"])) {

    $action = $_GET["action"];

    switch ($action) {

      case 'list':
        
        internListAction();

        break;

      case 'create':
      
        internGetAction();

        break;

      case 'store':
      
        internCreateAction();

        break;

      case 'update':
      
        internUpdateViewAction($_GET["id"]);

        break;

      case 'edite':
    
        internUpdateAction();

        break;

      case 'delete':
  
        internConfirmDeleteAction();

        break;

      case 'destroy':

        internDestroyAction();

        break;
      
      default:
        
        echo "Ther is no action with that name!";

        break;

    }

  }

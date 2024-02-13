<?php

    require_once "models/interns_model.php";

    function internListAction() {

        $interns = findAllInterns();

        include_once "views/interns_list.php";

    }

    function internGetAction() {

        include_once "views/create_intern_view.php";

    }

    function internCreateAction() {

        saveIntern(

            $_POST["first_name"], $_POST["last_name"],
    
            $_POST["login"], $_POST["password"]

        );

        header("location: index.php?action=list");

    }


    function internUpdateViewAction($id) {

        $intern = getInternById($id);

        include_once "views/update_intern_view.php";

    }

    function internUpdateAction() {

        updateInternById(
            
            $_POST["first_name"], $_POST["last_name"],
    
            $_POST["login"], $_POST["password"], $_POST["id"]
        
        );

        header("location: index.php?action=list");

    }

    function internConfirmDeleteAction() {

        $id = $_GET["id"];

        include_once "views/delete_intern_view.php";

    }

    function internDestroyAction() {

        deleteInternById($_GET["id"]);

        header("location: index.php?action=list");
        
    }

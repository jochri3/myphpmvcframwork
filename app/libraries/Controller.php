<?php
/**
 * Base controller
 * This load the models and views
 */

 class Controller{
     //Load model
     public function model($model){
         //require model file
         require_once "../app/models/".$model.".php";

         //Instanciate the model
         return new $model();
     }

     //Load view
     //data sont les donnes que l'on donne ou passe a la vue,cela peut etre des objets du model ou nos propres donnees
     public function view($view,$data=[]){
        //Check  for theview file
        if(file_exists("../app/views/".$view.".php")){
            require_once "../app/views/".$view.".php";
        }
        else{
            //View does not exist
            die("View does not existe");
        }
     }
 }
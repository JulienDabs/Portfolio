<?php

namespace App\Controllers;




// Si j'ai besoin du Model Category
// use App\Models\Category;

class FormController extends CoreController
{
    

    public function contact()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
              
        $this->show('contact/contact_me', [
            'page_title' => 'Contact me',
                     ]);
    }

    
}
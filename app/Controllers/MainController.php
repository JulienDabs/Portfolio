<?php

namespace App\Controllers;


// Si j'ai besoin du Model Category
// use App\Models\Category;

class MainController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
              
        $this->show('main/home', [
            'page_title' => 'Home',
                     ]);
    }

    public function about()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
              
        $this->show('about/about_me', [
            'page_title' => 'About me',
                     ]);
    }

    public function testimonials()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
              
        $this->show('accolade/testimonials', [
            'page_title' => 'Testimonials & Accolades',
                     ]);
    }

    public function projects()
    {
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
              
        $this->show('projects/lastest_projects', [
            'page_title' => 'Lastest Projects',
                     ]);
    }
    
}

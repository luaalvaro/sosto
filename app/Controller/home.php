<?php

namespace App\controller;

use \App\utils\view;
use \App\models\Infos;

class home extends app{

    /* Responsável por retornar o conteúdo renderizado na home */
    public static function getHome(){
        //Retorna a view da home page
        $content = view::render('pages/home', [
            'GITHUB_URL' => Infos::GitHub(),
        ]);
        
        $title = 'Sostô';

        //Retorna a view home page contida na view global app
        return parent::getApp($title, $content);
    }
}
<?php

namespace App\controller\pages;

use \App\utils\view;

class home extends app{

    /* Responsável por retornar o conteúdo renderizado na home */
    public static function getHome(){
        //Retorna a view da home page
        $content = view::render('pages/home', [
            'author' => 'Luã Álvaro',
        ]);

        $title = 'Sostô';

        //Retorna a view home page contida na view global app
        return parent::getApp($title, $content);
    }
}
<?php

namespace App\controller\pages;

use \App\utils\view;

class app {
    /* Responsável por retornar o conteúdo renderizado na app */
    public static function getApp($title, $content){
    
        //Renderiza nossa aplicação
        return view::render('pages/app', [
            'content' => $content,
            'title' => $title,
        ]);
    }
}
<?php

namespace App\controller;

use \App\utils\view;
use \App\models\Infos;

class app {
    /* Responsável por retornar o conteúdo renderizado na app */
    public static function getApp($title, $content){
    
        //Renderiza nossa aplicação
        return view::render('pages/app', [
            'content' => $content,
            'title' => $title,
            //project_name deve ser o mesmo nome da pasta para poder linkar o css de forma correta...
            'project_name' => 'sosto',
        ]);
    }
}
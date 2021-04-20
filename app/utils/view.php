<?php

namespace App\Utils;

class view{

    /* Método repsonsável por retornar o conteúdo de uma view*/
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : 'Esta página não existe!!';
    }

    /* Método responsável por retornar o conteúdo de uma view */
    public static function render($view, $vars = []){
        
        //Pegar o conteúdo da view html
        $contentView = self::getContentView($view);
        
        //Identificar as variáveis
        $keys = array_keys(($vars));
        
        //transformas as keys das variáveis em {{}} ~ padrão de vars do sistema
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
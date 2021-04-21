<?php

class Router {

    /* Método repsonsável por verificar se a page existe, se sim, retorna o conteúdo da page */
    private static function getContentPage($namePage){
        $file = __DIR__.'/../../pages/'.$namePage.'.html';
        return file_exists($file) ? file_get_contents($file) : 'Esta page {{'.$namePage.'}} não existe!!';
    }

    private static function setGlobalHtml($contentPage){
        $globalHtml = __DIR__.'/../global.html';
        $contentGlobalHtml = file_exists($globalHtml) ? file_get_contents($globalHtml) : '';
 
        return str_replace("{{content}}", $contentPage, $contentGlobalHtml);
    }

    /* Método responsável por retornar o conteúdo renderizado de uma view */
    private static function getContentPageRendered($namePage, $vars = []){
        
        //Pegar o conteúdo da view html
        $contentView = self::getContentPage($namePage);
        
        //Identificar as variáveis
        $keys = array_keys(($vars));
        
        //transformas as keys das variáveis em {{}} ~ padrão de vars do sistema
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }

    /* Método responsável por receber o nome da rota desejada,
    e retornar, caso exista, a page renderizada
    caso a rota não exista, será devolvido um aviso*/
    public static function handleRouter($namePage) {
       $renderPage = self::getContentPageRendered($namePage);

       return self::setGlobalHtml($renderPage);
    }
}

<?php
class Template {
    /**Carregar o cabeçlho das páginas */
    function header(){
        require __DIR__. "/header.php";
    }
    
    /**Carrega o rodapé de todas as páginas*/
    function footer(){
        require __DIR__. "/footer.php";
    }
}
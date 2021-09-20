<?php


namespace app\views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    protected $twig;
    public function __construct()
    {  
        $this->twig = new Environment(
            new FilesystemLoader('views')
        );
    }

    public function render($view, array $data  = [])
    {
        return $this->twig->render($view, $data);
    }
   
}
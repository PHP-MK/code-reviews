<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 05/05/2017
 * Time: 15:08
 */

namespace app\utilities {

    use app\utilities\interfaces\ViewInterface;

    /**
     * Class View
     * @package app\utilities
     */
    class View implements ViewInterface
    {
        /**
         * @var \Twig_TemplateWrapper
         */
        public $view;
        /**
         * @var array
         */
        public $templateVars;
        /**
         * @var \Twig_Loader_Filesystem
         */
        private $twigLoader;
        /**
         * @var \Twig_Environment
         */
        private $twig;

        
        /**
         * Initiate Twig template engine
         * @param $template
         * @param array $arguments
         */
        public function setView($template, array $arguments)
        {
            $views = str_replace('app/utilities', 'views', __DIR__);
            $this->twigLoader = new \Twig_Loader_Filesystem($views);
            /** @noinspection PhpDeprecationInspection */
            $this->twig = new \Twig_Environment($this->twigLoader, array(
                'cache' => $views . '/cached',
                'auto_reload' => true
            ));

            $this->templateVars = $arguments;
            $this->view = $this->twig->load($template);
        }


        /**
         * Compile and display template
         */
        public function display()
        {
            $this->view->display($this->templateVars);
        }

        /**
         * Compile and return template
         * @return string
         */
        public function save()
        {
            return $this->view->render($this->templateVars);
        }


        /**
         * Display JSON from array
         * @param array $result
         */
        public function displayJSON(array $result)
        {
            header('Content-Type: application/json');
            echo json_encode($result);
            exit;
        }

    }
}
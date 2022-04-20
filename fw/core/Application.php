<?php

namespace Fw\Core;

use Fw\Core\Implements\SingletonTrait;

class Application
{
    use SingletonTrait;

    private $__components = [];
    private $pager = null;
    private $template = null;
    private $request = null;
    private $server = null;

    private const BASE_CLASS_URL = 'Fw\Core\Component\Base';

    private function __construct()
    {
        $this->pager = Pager::getInstance();
        $this->template = TEMPLATE_PATH . Config::get('views/id');
        $this->request = new Request;
        $this->server = new Server;
    }


    public function header() {
        $this->startBuffer();
        require $this->template . '/header.php';
    
    }

    public function footer() {
        require $this->template . '/footer.php';
        $this->endBuffer();
    }

    public function startBuffer() {
        ob_start();
    }

    public function endBuffer() {
        $pageBuffer = ob_get_contents();
        ob_end_clean();
        $replaceArray = $this->pager->getAllReplace();
        $replacedPage = str_replace(array_keys($replaceArray),array_values($replaceArray), $pageBuffer);
        echo $replacedPage;
    }

    public function restartBuffer() {
        ob_clean();
    }

    public function getRequest() : Request {
        return $this->request;
    }

    public function getServer() : Server {
        return $this->server;
    }

    public function includeComponent(string $component, string $template, array $params) {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace(':','/components/',$component) . '/.class.php';
        require_once $filePath;

        if (!isset($this->__components[$component])) {
            
            $declaredClasses = get_declared_classes();
            foreach ($declaredClasses as $class) {
                if (is_subclass_of($class, self::BASE_CLASS_URL)) {
                    $this->__components[$component] = $class;
                    break;
                }
            }
        }

        $class = $this->__components[$component];
        $componentName = str_replace('fw:','',$component);
        $comp = new $class($componentName,$template,$params);
        $comp->executeComponent();
    }
}

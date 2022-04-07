<?php

namespace Fw\Core;

use Fw\Core\Implements\SingletonTrait;

class Application
{
    use SingletonTrait;

    private $__components = [];
    private $pager = null;
    private $template = null;

    private function __construct()
    {
        $this->pager = Pager::getInstance();
        $this->template = TEMPLATE_PATH . Config::get('views/id');
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


}

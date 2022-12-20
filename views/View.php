<?php


namespace View;

class View
{
    public function __construct(
        protected string $view,
        protected array $params = []
    )
    {

    }
    public function render()
    {
        \ob_start();
        include(__DIR__ . '/' . $this->view . '.php');
        return (string) \ob_get_clean();
    }
}

?>
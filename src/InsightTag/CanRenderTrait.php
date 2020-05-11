<?php

namespace ByTIC\LinkedIn\InsightTag;

/**
 * Trait CanRenderTrait
 * @package ByTIC\LinkedIn\InsightTag
 */
trait CanRenderTrait
{
    protected $basePath = null;

    /**
     * @return string
     */
    public function render()
    {
        return $this->renderTemplate('basecode');
    }

    /**
     * @param string $name
     * @return string
     */
    protected function renderTemplate($name)
    {
        ob_start();
        include $this->getTemplateBasePath() . DIRECTORY_SEPARATOR . $name . '.php';
        return ob_get_clean();
    }

    /**
     * @return string|null
     */
    protected function getTemplateBasePath()
    {
        if ($this->basePath === null) {
            $this->basePath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'templates';
        }
        return $this->basePath;
    }
}

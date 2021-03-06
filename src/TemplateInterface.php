<?php

namespace PHPCraft\Template;

/**
 * Renders template
 *
 * @author vuk <info@vuk.bg.it>
 */
interface TemplateInterface
{
    /**
     * Gets engine
     **/
    public function getEngine();

    /**
     * Renders template
     *
     * @param string $template template identifier
     * @param array $templateParameters parameters to be passed to template
     **/
    public function render($template, $templateParameters = []);
}

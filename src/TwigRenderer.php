<?php

namespace PHPCraft\Template;

use Twig_Environment;

/**
 * Renders template using Twig (http://twig.sensiolabs.org/)
 *
 * @author vuk <info@vuk.bg.it>
 */
class TwigRenderer implements RendererInterface
{
    private $renderer;
    
    /**
     * Constructor.
     *
     * @param Twig_Environment $renderer
     **/
    public function __construct(Twig_Environment $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * Renders template
     *
     * @param string $template template path into Twig_Environment template directory
     * @param array $templateParameters parameters to be passed to template
     **/
    public function render($template, $templateParameters = [])
    {
        return $this->renderer->render($template.'.html', $templateParameters);
    }
}
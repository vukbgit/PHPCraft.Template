<?php

namespace PHPCraft\Template;

use Twig_Environment;

/**
 * Renders template using Twig (http://twig.sensiolabs.org/)
 *
 * @author vuk <info@vuk.bg.it>
 */
class TwigAdapter implements TemplateInterface
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
     * Get engine
     **/
    public function getEngine()
    {
        return $this->renderer;
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

    /**
     * adds a function
     *
     * @param string $template template path into Twig_Environment template directory
     * @param array $templateParameters parameters to be passed to template
     **/
    public function addFunction($name, $functionBody)
    {
        $function = new \Twig_SimpleFunction($name, $functionBody);
        $this->renderer->addFunction($function);
    }

    /**
     * adds a filter
     *
     * @param string $template template path into Twig_Environment template directory
     * @param array $templateParameters parameters to be passed to template
     **/
    public function addFilter($name, $functionBody, $options = array())
    {
        $filter = new \Twig_SimpleFilter($name, $functionBody, $options);
        $this->renderer->addFilter($filter);
    }
}

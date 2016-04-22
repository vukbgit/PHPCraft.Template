<?php

namespace PHPCraft\Template;

interface RendererInterface
{
    public function render($template, $data = []);
}
<?php

namespace PHPCraft\Template;

interface Renderer
{
    public function render($template, $data = []);
}
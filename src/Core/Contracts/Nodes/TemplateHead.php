<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

interface TemplateHead extends Node
{
    public function getTV(): string;
}

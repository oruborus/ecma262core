<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

interface TemplateMiddle extends Node
{
    public function getTV(): string;
}

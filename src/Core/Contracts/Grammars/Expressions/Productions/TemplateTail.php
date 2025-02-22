<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

interface TemplateTail extends TemplateSpans
{
    public function getTV(): string;
}

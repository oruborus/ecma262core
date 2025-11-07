<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPropertyList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ObjectBindingPattern;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ObjectBindingPatternFactory
{
    public function create(
        BindingPropertyList $bindingPropertyList,
        ?BindingRestProperty $bindingRestProperty,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectBindingPattern;

    public function createWithBindingRestProperty(
        BindingRestProperty $bindingRestProperty,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectBindingPattern;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectBindingPattern;
}

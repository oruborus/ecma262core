<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LexicalBinding;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingListFactory
{
    public function create(
        BindingList $bindingList,
        LexicalBinding $lexicalBinding,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingList;
}

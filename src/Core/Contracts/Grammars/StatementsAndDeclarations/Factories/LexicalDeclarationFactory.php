<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LetOrConst;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LexicalDeclaration;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LexicalDeclarationFactory
{
    public function create(
        LetOrConst $letOrConst,
        BindingList $bindingList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LexicalDeclaration;
}

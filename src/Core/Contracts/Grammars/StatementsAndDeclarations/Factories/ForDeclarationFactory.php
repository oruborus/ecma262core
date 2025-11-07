<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForBinding;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LetOrConst;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ForDeclarationFactory
{
    public function create(
        LetOrConst $letOrConst,
        ForBinding $forBinding,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForDeclaration;
}

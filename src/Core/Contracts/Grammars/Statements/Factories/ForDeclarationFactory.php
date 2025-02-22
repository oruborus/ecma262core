<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForBinding;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForDeclaration;

interface ForDeclarationFactory
{
    /** @param InputElementType::Let|InputElementType::Const $letOrConst */
    public function create(InputElementType $letOrConst, ForBinding $forBinding): ForDeclaration;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LexicalDeclaration;

interface LexicalDeclarationFactory
{
    /** @param InputElementType::Let|InputElementType::Const $letOrConst */
    public function create(InputElementType $letOrConst, BindingList $bindingList): LexicalDeclaration;
}

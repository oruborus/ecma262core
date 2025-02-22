<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LexicalBinding;

interface BindingListFactory
{
    public function create(BindingList $bindingList, LexicalBinding $lexicalBinding): BindingList;
}

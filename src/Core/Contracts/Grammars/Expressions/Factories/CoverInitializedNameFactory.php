<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CoverInitializedName;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\IdentifierReference;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;

interface CoverInitializedNameFactory
{
    public function create(IdentifierReference $identifierReference, Initializer $initializer): CoverInitializedName;
}

<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasLabelledEvaluation;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface Statement extends StatementListItem, HasLabelledEvaluation
{
    /**
     * @throws AbruptCompletion
     */
    public function evaluate(): LanguageValue;
}

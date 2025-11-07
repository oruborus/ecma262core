<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ArrayBindingPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingRestElement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ArrayBindingPatternFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithElision(
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithBindingRestElement(
        BindingRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithElisionAndBindingRestElement(
        Elision $elision,
        BindingRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithBindingElementList(
        BindingElementList $assignmentElementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithBindingElementListAndElision(
        BindingElementList $assignmentElementList,
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function createWithBindingElementListAndBindingRestElement(
        BindingElementList $assignmentElementList,
        BindingRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;

    public function create(
        BindingElementList $assignmentElementList,
        Elision $elision,
        BindingRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayBindingPattern;
}

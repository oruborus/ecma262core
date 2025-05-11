<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementDiv;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionNode;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface Lexer
{
    public function cursor(): int;

    /**
     * @return array<int, int>
     */
    public function codePoints(): array;

    public function goalSymbol(): GoalSymbol;

    /**
     * @template TSymbol of InputElement|Node|RegularExpressionNode
     * @param class-string<TSymbol> $goalSymbol
     * @param non-negative-int $offset
     * @return ?TSymbol
     */
    public function peek(string $goalSymbol = InputElementDiv::class, int $offset = 0): null|InputElement|Node|RegularExpressionNode;

    /**
     * @template TSymbol of InputElement|Node|RegularExpressionNode
     * @param class-string<TSymbol> $goalSymbol
     * @return ?TSymbol
     */
    public function consume(string $goalSymbol = InputElementDiv::class): null|InputElement|Node|RegularExpressionNode;

    public function consumeLT(): void;

    public function tryConsumeAfterLT(InputElementType ...$values): null|InputElement|Node|RegularExpressionNode;

    public function consumeAfterLTOrFail(InputElementType ...$values): InputElement|Node;

    /**
     * @template TSymbol of InputElement|Node|RegularExpressionNode
     * @param class-string<TSymbol> $goalSymbol
     * @param non-negative-int $offset
     * @return ?TSymbol
     */
    public function peekIgnoringLT(string $goalSymbol = InputElementDiv::class, int $offset = 0): null|InputElement|Node|RegularExpressionNode;

    /**
     * @param non-negative-int $offset
     */
    public function peekCodePoint(int $offset = 0): int;

    public function consumeCodePoint(): int;

    /**
     * @template TReturn
     * @param callable():TReturn $fn
     * @return ?TReturn
     */
    public function lookAhead(callable $fn): mixed;

    public function position(): Position;

    public function newLine(): void;

    /**
     * @param non-negative-int $offset
     */
    public function newColumn(int $offset): void;

    /**
     * @see https://tc39.es/ecma262/#sec-automatic-semicolon-insertion
     *
     * @throws ThrowCompletion
     */
    public function automaticSemicolonInsertion(): void;
}

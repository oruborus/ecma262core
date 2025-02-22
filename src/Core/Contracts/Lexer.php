<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElement;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementDiv;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
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
     * @template TInputElement of InputElement
     * @param class-string<TInputElement> $goalSymbol
     * @param non-negative-int $offset
     * @return ?TInputElement
     */
    public function peek(string $goalSymbol = InputElementDiv::class, int $offset = 0): ?InputElement;

    /**
     * @template TInputElement of InputElement
     * @param class-string<TInputElement> $goalSymbol
     * @return ?TInputElement
     */
    public function consume(string $goalSymbol = InputElementDiv::class): ?InputElement;

    public function consumeLT(): void;

    public function tryConsumeAfterLT(InputElementType ...$values): ?InputElement;

    public function consumeAfterLTOrFail(InputElementType ...$values): InputElement;

    /**
     * @template TInputElement of InputElement
     * @param class-string<TInputElement> $goalSymbol
     * @param non-negative-int $offset
     * @return ?TInputElement
     */
    public function peekIgnoringLT(string $goalSymbol = InputElementDiv::class, int $offset = 0): ?InputElement;

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

    public function positionalInformation(): PositionalInformation;

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
    public function automaticSemicolonInsertion(Agent $agent): void;
}

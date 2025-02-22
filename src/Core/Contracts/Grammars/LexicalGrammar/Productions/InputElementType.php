<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use RuntimeException;

enum InputElementType: string
{
    case BigIntLiteralSuffix                = BigIntLiteralSuffix::class;
    case BinaryDigit                        = BinaryDigit::class;
    case BinaryDigits                       = BinaryDigits::class;
    case BinaryIntegerLiteral               = BinaryIntegerLiteral::class;
    case CharacterEscapeSequence            = CharacterEscapeSequence::class;
    case CodePoint                          = CodePoint::class;
    case Comment                            = Comment::class;
    case CommonToken                        = CommonToken::class;
    case DecimalBigIntegerLiteral           = DecimalBigIntegerLiteral::class;
    case DecimalDigit                       = DecimalDigit::class;
    case DecimalDigits                      = DecimalDigits::class;
    case DecimalIntegerLiteral              = DecimalIntegerLiteral::class;
    case DecimalLiteral                     = DecimalLiteral::class;
    case DivPunctuator                      = DivPunctuator::class;
    case DoubleStringCharacter              = DoubleStringCharacter::class;
    case DoubleStringCharacters             = DoubleStringCharacters::class;
    case EscapeCharacter                    = EscapeCharacter::class;
    case EscapeSequence                     = EscapeSequence::class;
    case ExponentIndicator                  = ExponentIndicator::class;
    case ExponentPart                       = ExponentPart::class;
    case Hex4Digits                         = Hex4Digits::class;
    case HexDigit                           = HexDigit::class;
    case HexDigits                          = HexDigits::class;
    case HexEscapeSequence                  = HexEscapeSequence::class;
    case HexIntegerLiteral                  = HexIntegerLiteral::class;
    case IdentifierName                     = IdentifierName::class;
    case IdentifierPart                     = IdentifierPart::class;
    case IdentifierPartChar                 = IdentifierPartChar::class;
    case IdentifierStart                    = IdentifierStart::class;
    case IdentifierStartChar                = IdentifierStartChar::class;
    case InputElementDiv                    = InputElementDiv::class;
    case InputElementRegExp                 = InputElementRegExp::class;
    case InputElementRegExpOrTemplateTail   = InputElementRegExpOrTemplateTail::class;
    case InputElementTemplateTail           = InputElementTemplateTail::class;
    case LineContinuation                   = LineContinuation::class;
    case LineTerminator                     = LineTerminator::class;
    case LineTerminatorSequence             = LineTerminatorSequence::class;
    case MultiLineComment                   = MultiLineComment::class;
    case NonDecimalIntegerLiteral           = NonDecimalIntegerLiteral::class;
    case NonEscapeCharacter                 = NonEscapeCharacter::class;
    case NonZeroDigit                       = NonZeroDigit::class;
    case NoSubstitutionTemplate             = NoSubstitutionTemplate::class;
    case NotCodePoint                       = NotCodePoint::class;
    case NotEscapeSequence                  = NotEscapeSequence::class;
    case NumericLiteral                     = NumericLiteral::class;
    case NumericLiteralSeparator            = NumericLiteralSeparator::class;
    case OctalDigit                         = OctalDigit::class;
    case OctalDigits                        = OctalDigits::class;
    case OctalIntegerLiteral                = OctalIntegerLiteral::class;
    case OptionalChainingPunctuator         = OptionalChainingPunctuator::class;
    case OtherPunctuator                    = OtherPunctuator::class;
    case Punctuator                         = Punctuator::class;
    case RegularExpressionBackslashSequence = RegularExpressionBackslashSequence::class;
    case RegularExpressionBody              = RegularExpressionBody::class;
    case RegularExpressionChar              = RegularExpressionChar::class;
    case RegularExpressionChars             = RegularExpressionChars::class;
    case RegularExpressionClass             = RegularExpressionClass::class;
    case RegularExpressionClassChar         = RegularExpressionClassChar::class;
    case RegularExpressionClassChars        = RegularExpressionClassChars::class;
    case RegularExpressionFirstChar         = RegularExpressionFirstChar::class;
    case RegularExpressionFlags             = RegularExpressionFlags::class;
    case RegularExpressionLiteral           = RegularExpressionLiteral::class;
    case RegularExpressionNonTerminator     = RegularExpressionNonTerminator::class;
    case RightBracePunctuator               = RightBracePunctuator::class;
    case SignedInteger                      = SignedInteger::class;
    case SingleEscapeCharacter              = SingleEscapeCharacter::class;
    case SingleLineComment                  = SingleLineComment::class;
    case SingleStringCharacter              = SingleStringCharacter::class;
    case SingleStringCharacters             = SingleStringCharacters::class;
    case StringLiteral                      = StringLiteral::class;
    case Template                           = Template::class;
    case TemplateCharacter                  = TemplateCharacter::class;
    case TemplateCharacters                 = TemplateCharacters::class;
    case TemplateHead                       = TemplateHead::class;
    case TemplateMiddle                     = TemplateMiddle::class;
    case TemplateSubstitutionTail           = TemplateSubstitutionTail::class;
    case TemplateTail                       = TemplateTail::class;
    case UnicodeEscapeSequence              = UnicodeEscapeSequence::class;
    case UnicodeIDContinue                  = UnicodeIDContinue::class;
    case UnicodeIDStart                     = UnicodeIDStart::class;
    case WhiteSpace                         = WhiteSpace::class;

    case LeftBrace                   = '{';
    case RightBrace                  = '}';
    case LeftParenthesis             = '(';
    case RightParenthesis            = ')';
    case LeftBracket                 = '[';
    case RightBracket                = ']';
    case Dot                         = '.';
    case Ellipsis                    = '...';
    case Colon                       = ':';
    case Comma                       = ',';
    case Semicolon                   = ';';
    case LessThan                    = '<';
    case LessThanEquals              = '<=';
    case DoubleLessThan              = '<<';
    case DoubleLessThanEquals        = '<<=';
    case GreaterThan                 = '>';
    case GreaterThanEquals           = '>=';
    case DoubleGreaterThan           = '>>';
    case DoubleGreaterThanEquals     = '>>=';
    case TripleGreaterThan           = '>>>';
    case TripleGreaterThanEquals     = '>>>=';
    case Equals                      = '=';
    case DoubleArrow                 = '=>';
    case DoubleEquals                = '==';
    case TripleEquals                = '===';
    case ExclamationMark             = '!';
    case ExclamationMarkEquals       = '!=';
    case ExclamationMarkDoubleEquals = '!==';
    case Plus                        = '+';
    case DoublePlus                  = '++';
    case PlusEquals                  = '+=';
    case Minus                       = '-';
    case DoubleMinus                 = '--';
    case MinusEquals                 = '-=';
    case Asterisk                    = '*';
    case AsteriskEquals              = '*=';
    case DoubleAsterisk              = '**';
    case DoubleAsteriskEquals        = '**=';
    case Solidus                     = '/';
    case SolidusEquals               = '/=';
    case Percent                     = '%';
    case PercentEquals               = '%=';
    case Ampersand                   = '&';
    case AmpersandEquals             = '&=';
    case DoubleAmpersand             = '&&';
    case DoubleAmpersandEquals       = '&&=';
    case Pipe                        = '|';
    case PipeEquals                  = '|=';
    case DoublePipe                  = '||';
    case DoublePipeEquals            = '||=';
    case Circumflex                  = '^';
    case CircumflexEquals            = '^=';
    case Tilde                       = '~';
    case QuestionMark                = '?';
    case QuestionMarkDot             = '?.';
    case DoubleQuestionMark          = '??';
    case DoubleQuestionMarkEquals    = '??=';

    case Async      = 'async';
    case As         = 'as';
    case Await      = 'await';
    case Break      = 'break';
    case Case       = 'case';
    case Catch_     = 'catch';
    case Class_     = 'class';
    case Const      = 'const';
    case Continue   = 'continue';
    case Debugger   = 'debugger';
    case Default    = 'default';
    case Delete     = 'delete';
    case Do         = 'do';
    case Else       = 'else';
    case Enum       = 'enum';
    case Export     = 'export';
    case Extends    = 'extends';
    case False      = 'false';
    case Finally_   = 'finally';
    case For        = 'for';
    case From       = 'from';
    case Function   = 'function';
    case Get        = 'get';
    case If         = 'if';
    case Import     = 'import';
    case In         = 'in';
    case Instanceof = 'instanceof';
    case Interface  = 'interface';
    case Implements = 'implements';
    case Let        = 'let';
    case New        = 'new';
    case Null       = 'null';
    case Package    = 'package';
    case Private    = 'private';
    case Protected  = 'protected';
    case Public     = 'public';
    case Of         = 'of';
    case Return     = 'return';
    case Set        = 'set';
    case Static     = 'static';
    case Super      = 'super';
    case Switch     = 'switch';
    case Target     = 'target';
    case This       = 'this';
    case Throw      = 'throw';
    case True       = 'true';
    case Try        = 'try';
    case Typeof     = 'typeof';
    case Var        = 'var';
    case Void       = 'void';
    case While      = 'while';
    case With       = 'with';
    case Yield      = 'yield';

    case UNKNOWN = 'UNKNOWN';

    public function isTerminal(): bool
    {
        return match ($this) {
            static::Async,
            static::As,
            static::Await,
            static::Break,
            static::Case,
            static::Catch_,
            static::Class_,
            static::Const,
            static::Continue,
            static::Debugger,
            static::Default,
            static::Delete,
            static::Do,
            static::Else,
            static::Enum,
            static::Export,
            static::Extends,
            static::False,
            static::Finally_,
            static::For,
            static::From,
            static::Function,
            static::Get,
            static::If,
            static::Import,
            static::In,
            static::Instanceof,
            static::Interface,
            static::Implements,
            static::Let,
            static::New,
            static::Null,
            static::Package,
            static::Private,
            static::Protected,
            static::Public,
            static::Of,
            static::Return,
            static::Set,
            static::Static,
            static::Super,
            static::Switch,
            static::Target,
            static::This,
            static::Throw,
            static::True,
            static::Try,
            static::Typeof,
            static::Var,
            static::Void,
            static::While,
            static::With,
            static::Yield => true,
            default => false
        };
    }

    /**
     * @param array<int, int> $codePoints
     * @psalm-mutation-free
     */
    public static function fromCodePoints(array $codePoints): static
    {
        return match ($codePoints) {
            [0x007B]                                 => static::LeftBrace,
            [0x007D]                                 => static::RightBrace,
            [0x0028]                                 => static::LeftParenthesis,
            [0x0029]                                 => static::RightParenthesis,
            [0x005B]                                 => static::LeftBracket,
            [0x005D]                                 => static::RightBracket,
            [0x002E]                                 => static::Dot,
            [0x002E, 0x002E, 0x002E]                 => static::Ellipsis,
            [0x003A]                                 => static::Colon,
            [0x002C]                                 => static::Comma,
            [0x003B]                                 => static::Semicolon,
            [0x003C]                                 => static::LessThan,
            [0x003C, 0x003D]                         => static::LessThanEquals,
            [0x003C, 0x003C]                         => static::DoubleLessThan,
            [0x003C, 0x003C, 0x003D]                 => static::DoubleLessThanEquals,
            [0x003E]                                 => static::GreaterThan,
            [0x003E, 0x003D]                         => static::GreaterThanEquals,
            [0x003E, 0x003E]                         => static::DoubleGreaterThan,
            [0x003E, 0x003E, 0x003D]                 => static::DoubleGreaterThanEquals,
            [0x003E, 0x003E, 0x003E]                 => static::TripleGreaterThan,
            [0x003E, 0x003E, 0x003E, 0x003D]         => static::TripleGreaterThanEquals,
            [0x003D]                                 => static::Equals,
            [0x003D, 0x003E]                         => static::DoubleArrow,
            [0x003D, 0x003D]                         => static::DoubleEquals,
            [0x003D, 0x003D, 0x003D]                 => static::TripleEquals,
            [0x0021]                                 => static::ExclamationMark,
            [0x0021, 0x003D]                         => static::ExclamationMarkEquals,
            [0x0021, 0x003D, 0x003D]                 => static::ExclamationMarkDoubleEquals,
            [0x002B]                                 => static::Plus,
            [0x002B, 0x002B]                         => static::DoublePlus,
            [0x002B, 0x003D]                         => static::PlusEquals,
            [0x002D]                                 => static::Minus,
            [0x002D, 0x002D]                         => static::DoubleMinus,
            [0x002D, 0x003D]                         => static::MinusEquals,
            [0x002A]                                 => static::Asterisk,
            [0x002A, 0x003D]                         => static::AsteriskEquals,
            [0x002A, 0x002A]                         => static::DoubleAsterisk,
            [0x002A, 0x002A, 0x003D]                 => static::DoubleAsteriskEquals,
            [0x002F]                                 => static::Solidus,
            [0x002F, 0x003D]                         => static::SolidusEquals,
            [0x0025]                                 => static::Percent,
            [0x0025, 0x003D]                         => static::PercentEquals,
            [0x0026]                                 => static::Ampersand,
            [0x0026, 0x003D]                         => static::AmpersandEquals,
            [0x0026, 0x0026]                         => static::DoubleAmpersand,
            [0x0026, 0x0026, 0x003D]                 => static::DoubleAmpersandEquals,
            [0x007C]                                 => static::Pipe,
            [0x007C, 0x003D]                         => static::PipeEquals,
            [0x007C, 0x007C]                         => static::DoublePipe,
            [0x007C, 0x007C, 0x003D]                 => static::DoublePipeEquals,
            [0x005E]                                 => static::Circumflex,
            [0x005E, 0x003D]                         => static::CircumflexEquals,
            [0x007E]                                 => static::Tilde,
            [0x003F]                                 => static::QuestionMark,
            [0x003F, 0x002E]                         => static::QuestionMarkDot,
            [0x003F, 0x003F]                         => static::DoubleQuestionMark,
            [0x003F, 0x003F, 0x003D]                 => static::DoubleQuestionMarkEquals,

            [0x0061, 0x0073, 0x0079, 0x006E, 0x0063]                                         => static::Async,
            [0x0061, 0x0073]                                                                 => static::As,
            [0x0061, 0x0077, 0x0061, 0x0069, 0x0074]                                         => static::Await,
            [0x0062, 0x0072, 0x0065, 0x0061, 0x006B]                                         => static::Break,
            [0x0063, 0x0061, 0x0073, 0x0065]                                                 => static::Case,
            [0x0063, 0x0061, 0x0074, 0x0063, 0x0068]                                         => static::Catch_,
            [0x0063, 0x006C, 0x0061, 0x0073, 0x0073]                                         => static::Class_,
            [0x0063, 0x006F, 0x006E, 0x0073, 0x0074]                                         => static::Const,
            [0x0063, 0x006F, 0x006E, 0x0074, 0x0069, 0x006E, 0x0075, 0x0065]                 => static::Continue,
            [0x0064, 0x0065, 0x0062, 0x0075, 0x0067, 0x0067, 0x0065, 0x0072]                 => static::Debugger,
            [0x0064, 0x0065, 0x0066, 0x0061, 0x0075, 0x006C, 0x0074]                         => static::Default,
            [0x0064, 0x0065, 0x006C, 0x0065, 0x0074, 0x0065]                                 => static::Delete,
            [0x0064, 0x006F]                                                                 => static::Do,
            [0x0065, 0x006C, 0x0073, 0x0065]                                                 => static::Else,
            [0x0065, 0x006E, 0x0075, 0x006D]                                                 => static::Enum,
            [0x0065, 0x0078, 0x0070, 0x006F, 0x0072, 0x0074]                                 => static::Export,
            [0x0065, 0x0078, 0x0074, 0x0065, 0x006E, 0x0064, 0x0073]                         => static::Extends,
            [0x0066, 0x0061, 0x006C, 0x0073, 0x0065]                                         => static::False,
            [0x0066, 0x0069, 0x006E, 0x0061, 0x006C, 0x006C, 0x0079]                         => static::Finally_,
            [0x0066, 0x006F, 0x0072]                                                         => static::For,
            [0x0066, 0x0072, 0x006F, 0x006D]                                                 => static::From,
            [0x0066, 0x0075, 0x006E, 0x0063, 0x0074, 0x0069, 0x006F, 0x006E]                 => static::Function,
            [0x0067, 0x0065, 0x0074]                                                         => static::Get,
            [0x0069, 0x0066]                                                                 => static::If,
            [0x0069, 0x006D, 0x0070, 0x006C, 0x0065, 0x006D, 0x0065, 0x006E, 0x0074, 0x0073] => static::Interface,
            [0x0069, 0x006E, 0x0074, 0x0065, 0x0072, 0x0066, 0x0061, 0x0063, 0x0065]         => static::Implements,
            [0x0069, 0x006D, 0x0070, 0x006F, 0x0072, 0x0074]                                 => static::Import,
            [0x0069, 0x006E]                                                                 => static::In,
            [0x0069, 0x006E, 0x0073, 0x0074, 0x0061, 0x006E, 0x0063, 0x0065, 0x006F, 0x0066] => static::Instanceof,
            [0x006C, 0x0065, 0x0074]                                                         => static::Let,
            [0x006E, 0x0065, 0x0077]                                                         => static::New,
            [0x006E, 0x0075, 0x006C, 0x006C]                                                 => static::Null,
            [0x006F, 0x0066]                                                                 => static::Of,
            [0x0070, 0x0061, 0x0063, 0x006B, 0x0061, 0x0067, 0x0065]                         => static::Package,
            [0x0070, 0x0072, 0x0069, 0x0076, 0x0061, 0x0074, 0x0065]                         => static::Private,
            [0x0070, 0x0072, 0x006F, 0x0074, 0x0065, 0x0063, 0x0074, 0x0065, 0x0064]         => static::Protected,
            [0x0070, 0x0075, 0x0062, 0x006C, 0x0069, 0x0063]                                 => static::Public,
            [0x0072, 0x0065, 0x0074, 0x0075, 0x0072, 0x006E]                                 => static::Return,
            [0x0073, 0x0065, 0x0074]                                                         => static::Set,
            [0x0073, 0x0074, 0x0061, 0x0074, 0x0069, 0x0063]                                 => static::Static,
            [0x0073, 0x0075, 0x0070, 0x0065, 0x0072]                                         => static::Super,
            [0x0073, 0x0077, 0x0069, 0x0074, 0x0063, 0x0068]                                 => static::Switch,
            [0x0074, 0x0061, 0x0072, 0x0067, 0x0065, 0x0074]                                 => static::Target,
            [0x0074, 0x0068, 0x0069, 0x0073]                                                 => static::This,
            [0x0074, 0x0068, 0x0072, 0x006F, 0x0077]                                         => static::Throw,
            [0x0074, 0x0072, 0x0075, 0x0065]                                                 => static::True,
            [0x0074, 0x0072, 0x0079]                                                         => static::Try,
            [0x0074, 0x0079, 0x0070, 0x0065, 0x006F, 0x0066]                                 => static::Typeof,
            [0x0076, 0x0061, 0x0072]                                                         => static::Var,
            [0x0076, 0x006F, 0x0069, 0x0064]                                                 => static::Void,
            [0x0077, 0x0068, 0x0069, 0x006C, 0x0065]                                         => static::While,
            [0x0077, 0x0069, 0x0074, 0x0068]                                                 => static::With,
            [0x0079, 0x0069, 0x0065, 0x006C, 0x0064]                                         => static::Yield,

            default => static::UNKNOWN
        };
    }

    /**
     * @return array<int, int>
     */
    public function codePoints(): array
    {
        return match ($this) {
            static::LeftBrace                   => [0x007B],
            static::RightBrace                  => [0x007D],
            static::LeftParenthesis             => [0x0028],
            static::RightParenthesis            => [0x0029],
            static::LeftBracket                 => [0x005B],
            static::RightBracket                => [0x005D],
            static::Dot                         => [0x002E],
            static::Ellipsis                    => [0x002E, 0x002E, 0x002E],
            static::Colon                       => [0x003A],
            static::Comma                       => [0x002C],
            static::Semicolon                   => [0x003B],
            static::LessThan                    => [0x003C],
            static::LessThanEquals              => [0x003C, 0x003D],
            static::DoubleLessThan              => [0x003C, 0x003C],
            static::DoubleLessThanEquals        => [0x003C, 0x003C, 0x003D],
            static::GreaterThan                 => [0x003E],
            static::GreaterThanEquals           => [0x003E, 0x003D],
            static::DoubleGreaterThan           => [0x003E, 0x003E],
            static::DoubleGreaterThanEquals     => [0x003E, 0x003E, 0x003D],
            static::TripleGreaterThan           => [0x003E, 0x003E, 0x003E],
            static::TripleGreaterThanEquals     => [0x003E, 0x003E, 0x003E, 0x003D],
            static::Equals                      => [0x003D],
            static::DoubleArrow                 => [0x003D, 0x003E],
            static::DoubleEquals                => [0x003D, 0x003D],
            static::TripleEquals                => [0x003D, 0x003D, 0x003D],
            static::ExclamationMark             => [0x0021],
            static::ExclamationMarkEquals       => [0x0021, 0x003D],
            static::ExclamationMarkDoubleEquals => [0x0021, 0x003D, 0x003D],
            static::Plus                        => [0x002B],
            static::DoublePlus                  => [0x002B, 0x002B],
            static::PlusEquals                  => [0x002B, 0x003D],
            static::Minus                       => [0x002D],
            static::DoubleMinus                 => [0x002D, 0x002D],
            static::MinusEquals                 => [0x002D, 0x003D],
            static::Asterisk                    => [0x002A],
            static::AsteriskEquals              => [0x002A, 0x003D],
            static::DoubleAsterisk              => [0x002A, 0x002A],
            static::DoubleAsteriskEquals        => [0x002A, 0x002A, 0x003D],
            static::Solidus                     => [0x002F],
            static::SolidusEquals               => [0x002F, 0x003D],
            static::Percent                     => [0x0025],
            static::PercentEquals               => [0x0025, 0x003D],
            static::Ampersand                   => [0x0026],
            static::AmpersandEquals             => [0x0026, 0x003D],
            static::DoubleAmpersand             => [0x0026, 0x0026],
            static::DoubleAmpersandEquals       => [0x0026, 0x0026, 0x003D],
            static::Pipe                        => [0x007C],
            static::PipeEquals                  => [0x007C, 0x003D],
            static::DoublePipe                  => [0x007C, 0x007C],
            static::DoublePipeEquals            => [0x007C, 0x007C, 0x003D],
            static::Circumflex                  => [0x005E],
            static::CircumflexEquals            => [0x005E, 0x003D],
            static::Tilde                       => [0x007E],
            static::QuestionMark                => [0x003F],
            static::QuestionMarkDot             => [0x003F, 0x002E],
            static::DoubleQuestionMark          => [0x003F, 0x003F],
            static::DoubleQuestionMarkEquals    => [0x003F, 0x003F, 0x003D],

            static::As               => [0x0061, 0x0073],
            static::Async            => [0x0061, 0x0073, 0x0079, 0x006E, 0x0063],
            static::Await            => [0x0061, 0x0077, 0x0061, 0x0069, 0x0074],
            static::Break            => [0x0062, 0x0072, 0x0065, 0x0061, 0x006B],
            static::Case             => [0x0063, 0x0061, 0x0073, 0x0065],
            static::Catch_           => [0x0063, 0x0061, 0x0074, 0x0063, 0x0068],
            static::Class_           => [0x0063, 0x006C, 0x0061, 0x0073, 0x0073],
            static::Const            => [0x0063, 0x006F, 0x006E, 0x0073, 0x0074],
            static::Continue         => [0x0063, 0x006F, 0x006E, 0x0074, 0x0069, 0x006E, 0x0075, 0x0065],
            static::Debugger         => [0x0064, 0x0065, 0x0062, 0x0075, 0x0067, 0x0067, 0x0065, 0x0072],
            static::Default          => [0x0064, 0x0065, 0x0066, 0x0061, 0x0075, 0x006C, 0x0074],
            static::Delete           => [0x0064, 0x0065, 0x006C, 0x0065, 0x0074, 0x0065],
            static::Do               => [0x0064, 0x006F],
            static::Else             => [0x0065, 0x006C, 0x0073, 0x0065],
            static::Enum             => [0x0065, 0x006E, 0x0075, 0x006D],
            static::Export           => [0x0065, 0x0078, 0x0070, 0x006F, 0x0072, 0x0074],
            static::Extends          => [0x0065, 0x0078, 0x0074, 0x0065, 0x006E, 0x0064, 0x0073],
            static::False            => [0x0066, 0x0061, 0x006C, 0x0073, 0x0065],
            static::Finally_         => [0x0066, 0x0069, 0x006E, 0x0061, 0x006C, 0x006C, 0x0079],
            static::For              => [0x0066, 0x006F, 0x0072],
            static::From             => [0x0066, 0x0072, 0x006F, 0x006D],
            static::Function         => [0x0066, 0x0075, 0x006E, 0x0063, 0x0074, 0x0069, 0x006F, 0x006E],
            static::Get              => [0x0067, 0x0065, 0x0074],
            static::If               => [0x0069, 0x0066],
            static::Implements => [0x0069, 0x006D, 0x0070, 0x006C, 0x0065, 0x006D, 0x0065, 0x006E, 0x0074, 0x0073],
            static::Import           => [0x0069, 0x006D, 0x0070, 0x006F, 0x0072, 0x0074],
            static::In               => [0x0069, 0x006E],
            static::Instanceof       => [0x0069, 0x006E, 0x0073, 0x0074, 0x0061, 0x006E, 0x0063, 0x0065, 0x006F, 0x0066],
            static::Interface        => [0x0069, 0x006E, 0x0074, 0x0065, 0x0072, 0x0066, 0x0061, 0x0063, 0x0065],
            static::Let              => [0x006C, 0x0065, 0x0074],
            static::New              => [0x006E, 0x0065, 0x0077],
            static::Null             => [0x006E, 0x0075, 0x006C, 0x006C],
            static::Of               => [0x006F, 0x0066],
            static::Package          => [0x0070, 0x0061, 0x0063, 0x006B, 0x0061, 0x0067, 0x0065],
            static::Private          => [0x0070, 0x0072, 0x0069, 0x0076, 0x0061, 0x0074, 0x0065],
            static::Protected        => [0x0070, 0x0072, 0x006F, 0x0074, 0x0065, 0x0063, 0x0074, 0x0065, 0x0064],
            static::Public           => [0x0070, 0x0075, 0x0062, 0x006C, 0x0069, 0x0063],
            static::Return           => [0x0072, 0x0065, 0x0074, 0x0075, 0x0072, 0x006E],
            static::Set              => [0x0073, 0x0065, 0x0074],
            static::Static           => [0x0073, 0x0074, 0x0061, 0x0074, 0x0069, 0x0063],
            static::Super            => [0x0073, 0x0075, 0x0070, 0x0065, 0x0072],
            static::Switch           => [0x0073, 0x0077, 0x0069, 0x0074, 0x0063, 0x0068],
            static::Target           => [0x0074, 0x0061, 0x0072, 0x0067, 0x0065, 0x0074],
            static::This             => [0x0074, 0x0068, 0x0069, 0x0073],
            static::Throw            => [0x0074, 0x0068, 0x0072, 0x006F, 0x0077],
            static::True             => [0x0074, 0x0072, 0x0075, 0x0065],
            static::Try              => [0x0074, 0x0072, 0x0079],
            static::Typeof           => [0x0074, 0x0079, 0x0070, 0x0065, 0x006F, 0x0066],
            static::Var              => [0x0076, 0x0061, 0x0072],
            static::Void             => [0x0076, 0x006F, 0x0069, 0x0064],
            static::While            => [0x0077, 0x0068, 0x0069, 0x006C, 0x0065],
            static::With             => [0x0077, 0x0069, 0x0074, 0x0068],
            static::Yield            => [0x0079, 0x0069, 0x0065, 0x006C, 0x0064],

            default => throw new RuntimeException("Code points for `{$this->value}` are not available")
        };
    }
}

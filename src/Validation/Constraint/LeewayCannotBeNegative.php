<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Validation\Constraint;

use InvalidArgumentException;
use Airxyxy\JWT\Exception;

final class LeewayCannotBeNegative extends InvalidArgumentException implements Exception
{
    public static function create(): self
    {
        return new self('Leeway cannot be negative');
    }
}

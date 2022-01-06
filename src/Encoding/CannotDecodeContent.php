<?php
declare(strict_types=1);

namespace Airxyxy\JWT\Encoding;

use JsonException;
use Airxyxy\JWT\Exception;
use RuntimeException;

final class CannotDecodeContent extends RuntimeException implements Exception
{
    public static function jsonIssues(JsonException $previous): self
    {
        return new self('Error while decoding from JSON', 0, $previous);
    }

    public static function invalidBase64String(): self
    {
        return new self('Error while decoding from Base64Url, invalid base64 characters detected');
    }
}

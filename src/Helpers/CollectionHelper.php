<?php

namespace Llm1998\LaravelBase64ToFile\Helpers;

trait CollectionHelpers
{
    /**
     * @param string $mimeType
     * @return bool
     */
    public static function isMimeType(string $mimeType): bool
    {
        return in_array($mimeType, static::$mimeTypes);
    }
}
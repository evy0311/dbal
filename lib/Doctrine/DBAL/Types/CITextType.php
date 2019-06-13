<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use function is_resource;
use function stream_get_contents;

/**
 * Type that maps a PSQL CIText to a PHP string.
 */
class CITextType extends Type
{
    const CITEXT = 'citext';

    public function getName() {
        return static::CITEXT;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
        return $platform->getDoctrineTypeMapping(static::CITEXT);
    }
}
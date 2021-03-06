<?php declare(strict_types=1);

namespace Project\Module\Tag;

use Project\Module\GenericValueObject\Id;
use Project\Module\GenericValueObject\Name;
use Project\Module\GenericValueObject\Position;

/**
 * Class TagFactory
 * @package Project\Module\Tag
 */
class TagFactory
{
    /**
     * @param $object
     *
     * @return Tag
     */
    public function getTagFromObject($object): Tag
    {
        /** @var Id $tagId */
        $tagId = Id::fromString($object->tagId);

        /** @var Name $name */
        $name = Name::fromString($object->name);

        /** @var Position $position */
        $position = Position::fromValue((int)$object->position);

        return new Tag($tagId, $name, $position);
    }
}
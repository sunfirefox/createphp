<?php
/**
 * @copyright CONTENT CONTROL GbR, http://www.contentcontrol-berlin.de
 * @author CONTENT CONTROL GbR, http://www.contentcontrol-berlin.de
 * @license Dual licensed under the MIT (MIT-LICENSE.txt) and LGPL (LGPL-LICENSE.txt) licenses.
 * @package Midgard.CreatePHP
 */

namespace Midgard\CreatePHP\Type;

use Iterator;
use ArrayAccess;
use Midgard\CreatePHP\Node;
use Midgard\CreatePHP\Entity\EntityInterface;

/**
 * A collection is a special type of property that can hold a list of entities.
 *
 * @package Midgard.CreatePHP
 */
interface CollectionDefinitionInterface extends ArrayAccess, Iterator
{
    /**
     * Set the RDFa type for the items of this collection
     *
     * TODO: this limits the collection to one type - we should find a way to allow mixed collections
     *
     * @param TypeInterface $type
     */
    function setType(TypeInterface $type);

    /**
     * Get the RDFa type for the items of this collection
     *
     * same TODO as above
     *
     * @return TypeInterface
     */
    function getType();

    /**
     * Create a concrete collection from this definition with the children of the specified parent
     *
     * @param EntityInterface $parent
     *
     * @return \Midgard\CreatePHP\Entity\CollectionInterface
     */
    function createWithParent(EntityInterface $parent);
}
<?php declare(strict_types=1);
/**
 * This file is part of the BEAR.Resource package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Resource\Mock;

use BEAR\Resource\ResourceObject;

class Blog extends ResourceObject
{
    public function onGet(int $id)
    {
    }
}

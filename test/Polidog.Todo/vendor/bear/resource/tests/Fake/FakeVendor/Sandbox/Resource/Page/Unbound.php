<?php declare(strict_types=1);
/**
 * This file is part of the BEAR.Resource package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace FakeVendor\Sandbox\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Resource\UnboundInterface;

class Unbound extends ResourceObject
{
    public function __construct(UnboundInterface $missing)
    {
        unset($missing);
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of the KleijnWeb\PhpApi\Descriptions\Hydrator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KleijnWeb\PhpApi\Descriptions\Tests\Hydrator\Processors\Object;

use KleijnWeb\PhpApi\Descriptions\Description\Schema\ObjectSchema;

/**
 * @author John Kleijn <john@kleijnweb.nl>
 */
abstract class SimpleObjectProcessorTest extends ObjectProcessorTest
{
    abstract protected function factory(ObjectSchema $schema);
}

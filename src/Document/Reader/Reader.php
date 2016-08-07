<?php declare(strict_types = 1);
/*
 * This file is part of the KleijnWeb\ApiDescriptions package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace KleijnWeb\ApiDescriptions\Document\Reader;

/**
 * @author John Kleijn <john@kleijnweb.nl>
 */
interface Reader
{
    /**
     * @param string $uri
     *
     * @return Response
     */
    public function read(string $uri): Response;
}

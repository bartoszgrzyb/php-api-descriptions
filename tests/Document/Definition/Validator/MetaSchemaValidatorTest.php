<?php declare(strict_types = 1);
/*
 * This file is part of the KleijnWeb\ApiDescriptions package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KleijnWeb\ApiDescriptions\Tests\Document\Definition\Validator;

use KleijnWeb\ApiDescriptions\Description\Schema\Validator\SchemaValidator;
use KleijnWeb\ApiDescriptions\Description\Schema\Validator\ValidationResult;
use KleijnWeb\ApiDescriptions\Document\Definition\Validator\MetaSchemaValidator;

/**
 * @author John Kleijn <john@kleijnweb.nl>
 */
class MetaSchemaValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ValidationResult
     */
    private $expectedValidationResult;

    /**
     * @var MetaSchemaValidator
     */
    private $validator;

    protected function setUp()
    {
        $validator = $this->getMockForAbstractClass(SchemaValidator::class);
        $validator->expects($this->once())->method('validate')->willReturnCallback(function () {
            return $this->expectedValidationResult;
        });
        /** @var SchemaValidator $validator */
        $this->validator = new MetaSchemaValidator((object)[], $validator);
    }

    /**
     * @test
     */
    public function canValidate()
    {
        $this->expectedValidationResult = new ValidationResult(true, []);

        $this->validator->validate((object)[]);
    }

    /**
     * @test
     */
    public function canInvalidate()
    {
        $this->expectedValidationResult = new ValidationResult(false, []);

        $this->setExpectedException(\InvalidArgumentException::class);
        $this->validator->validate((object)[]);

    }
}

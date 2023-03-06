<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer;

use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidationException extends \RuntimeException
{
    /** @var ConstraintViolationListInterface */
    private $violationList;
    public function __construct(ConstraintViolationListInterface $violationList)
    {
        $this->violationList = $violationList;
        parent::__construct(sprintf('Model validation failed with %d errors.', $violationList->count()), 400);
    }
    public function getViolationList() : ConstraintViolationListInterface
    {
        return $this->violationList;
    }
}

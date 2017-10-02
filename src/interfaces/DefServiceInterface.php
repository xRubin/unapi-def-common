<?php

namespace unapi\def\common\interfaces;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\dto\PhoneInterface;

interface DefServiceInterface
{
    /**
     * @param PhoneInterface $phone
     * @return PromiseInterface
     */
    public function detectOperator(PhoneInterface $phone): PromiseInterface;
}
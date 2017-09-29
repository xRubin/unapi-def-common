<?php

namespace unapi\def\common\interfaces;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\dto\PhoneDto;

interface DefServiceInterface
{
    /**
     * @param PhoneDto $phone
     * @return PromiseInterface
     */
    public function detectOperator(PhoneDto $phone): PromiseInterface;
}
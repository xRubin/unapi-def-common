<?php

namespace unapi\def\common\interfaces;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\def\common\dto\PhoneInterface;
use unapi\interfaces\ServiceInterface;

interface DefServiceInterface extends ServiceInterface
{
    /**
     * @param PhoneInterface $phone
     * @return PromiseInterface
     */
    public function detectOperator(PhoneInterface $phone): PromiseInterface;
}
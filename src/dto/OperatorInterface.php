<?php

namespace unapi\def\common\dto;

use unapi\interfaces\DtoInterface;

interface OperatorInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getMnc(): int;
}
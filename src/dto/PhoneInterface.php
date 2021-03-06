<?php

namespace unapi\def\common\dto;

use unapi\interfaces\DtoInterface;

interface PhoneInterface extends DtoInterface
{
    /**
     * @param string $prepend
     * @return string
     */
    public function getNumber(string $prepend = ''): string;
}
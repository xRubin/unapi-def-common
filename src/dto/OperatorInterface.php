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
     * @param string $name
     * @return OperatorInterface
     */
    public function setName(string $name): OperatorInterface;

    /**
     * @return int
     */
    public function getMnc(): int;

    /**
     * @param int $mnc
     * @return OperatorInterface
     */
    public function setMnc(int $mnc): OperatorInterface;
}
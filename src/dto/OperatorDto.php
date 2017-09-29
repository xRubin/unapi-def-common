<?php

namespace unapi\def\common\dto;

class OperatorDto
{
    /** @var string */
    private $name;

    /** @var integer */
    private $mnc;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return OperatorDto
     */
    public function setName(string $name): OperatorDto
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getMnc(): int
    {
        return $this->mnc;
    }

    /**
     * @param int $mnc
     * @return OperatorDto
     */
    public function setMnc(int $mnc): OperatorDto
    {
        $this->mnc = $mnc;
        return $this;
    }
}
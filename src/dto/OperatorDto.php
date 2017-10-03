<?php

namespace unapi\def\common\dto;

use unapi\interfaces\DtoInterface;

class OperatorDto implements OperatorInterface
{
    /** @var string */
    private $name;
    /** @var int */
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
     * @return self
     */
    public function setName(string $name): self
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
     * @return self
     */
    public function setMnc(int $mnc): self
    {
        $this->mnc = $mnc;
        return $this;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new OperatorDto())
            ->setName($data['name'])
            ->setMnc($data['mnc']);
    }
}
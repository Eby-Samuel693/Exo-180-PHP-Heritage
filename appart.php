<?php

class appart extends Habitation
{


    private bool $garage;

    public function __construct(bool $garage)
    {
        $this->setgarage($garage);

    }
    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}

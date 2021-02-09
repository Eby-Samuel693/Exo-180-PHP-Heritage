<?php

class appart extends Habitation
{


    private bool $garage;

    public function __construct(string $pays, string $ville, string $codePostal, int $chambres, int $pieces,bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
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

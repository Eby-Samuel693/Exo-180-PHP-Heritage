<?php

class Habitation {

    private string $pays;
    private string $ville;
    private string $codePostal;
    private int $chambres;
    private int $pieces;

    public function __construct(string $pays,string $ville,string $codePostal,int $chambres,int $pieces){
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setChambres($chambres);
        $this->setPieces($pieces);
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return bool
     */
    public function isChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param bool $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return bool
     */
    public function isPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param bool $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }

}


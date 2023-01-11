<?php


class Country
{
    private $countryName;
    private $allClub;
    
    
    public function __construct($countryName)
    {
        $this->countryName = $countryName;
        $this->allClub = [];
    }
    
    
    public function getCountryName()
    {
        return $this->countryName;
    }
    
    public function setCountryName($countryName): self
    {
        $this->countryName = $countryName;
        
        return $this;
    }
    
    public function addClub($club)
    {
        $this->allClub[] = $club;
    }
    
    
    public function afficherCountryClub()
    {   
        $result = "le pays " . $this->countryName . " contient la ou les équipes suivantes : <br>";
        foreach($this->allClub as $club)
        {
            $result .= $club . "<br>";
        }
        return $result . "<br>";
    }
    
    
    public function __toString()
    {
        return $this->countryName; // pour que le countryName et la allClub passent en string et soit afficher.
    }
    
    
}

?>
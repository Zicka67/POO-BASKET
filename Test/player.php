<?php

class Player
{
    
    private $name;
    private $firstName;
    private $height;
    private $listClub;
    
    public function __construct($name, $firstName, $height)
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->height = $height;
        $this->listClub = [];
    }
    
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function setHeight($height): self
    {
        $this->height = $height;
        
        return $this;
    }
    
    public function addClub($club)
    {
        $this->listClub[] = $club;
    }
    
    public function afficherClubDuJoueur()
    {   
        $result = "le Joueur " . $this . " fait parti du ou des clubs suivants :" . "<br>";
        foreach($this->listClub as $club)
        {
            $result .= " - " . $club . "<br>";
        }
        return $result . "<br>";
    }
    
    
    public function __toString()
    {
        return $this->firstName . " " . $this->name; 
    }
    
}

?>






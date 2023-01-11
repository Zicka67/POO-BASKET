<?php

class Club
{
    private $clubName;
    private $country;
    public $listPlayer;
    // public $career;
    
    public function __construct($clubName, $country)
    {
        $this->clubName = $clubName;
        $this->listPlayer = [];
        $this->country = $country;
        $this->country = $this->country->addClub($this);
        // $this->career = [];
        
    }
    
    
    public function getClubName()
    {
        return $this->clubName;
    }
    
    public function setClubName($clubName): self
    {
        $this->clubName = $clubName;
        
        return $this;
    }
    
    public function addPlayer($listPlayer)
    {
        $this->listPlayer[] = $listPlayer;
    }
    
    // public function addCareer($career)
    // {
        //     // $this->career[] = $career;
        // }
        
        
        public function afficherJoueurDuClub()
        {   
            $result = "le club des " . $this->clubName . " contient le ou les joueurs suivants : <br>";
            foreach($this->listPlayer as $player)
            {
                $result .= "- " . $player . "<br>";
            }
            return $result . "<br>";
        }
        
        public function getCountry() //Test
        {
            return $this->country;
        }
        
        public function __toString()
        {
            return $this->clubName; // pour que le clubName passe en string et soit afficher.
        }
        
        
        
        
        
    }
    
    ?>
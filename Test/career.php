<?php

class Career
{
    private $club;
    private $player;
    private $country;
    
    public function __construct($club, $player, $country)
    {
        $this->club = $club;
        $this->club->addPlayer($this);
        
        
        $this->player = $player;
        $this->player->addClub($this);
        
        $this->country = $country;
        
        
    }
    
    public function getCountry()
    {
        return $this->country;
    }
    
    public function setCountry($country): self
    {
        $this->country = $country;
        
        return $this;
    }
    
    
    public function getPlayer()
    {
        return $this->player;
    }
    
    public function setPlayer($player): self
    {
        $this->player = $player;
        
        return $this;
    }
    
    
    public function getClub()
    {
        return $this->club;
    }
    
    
    public function setClub($club): self
    {
        $this->club = $club;
        
        return $this;
    }
    
    
    public function __toString()
    {
        return $this->player . " est dans le club : " . $this->club->getClubName() . " du pays : "  . $this->country; // pour que le player et le club passent en string et soit afficher.
    }
    
    
    
    
    
    
}

?>
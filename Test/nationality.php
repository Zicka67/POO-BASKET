<?php

class Nationality
{
    
    private $natName;
    
    public function __construct($natName)
    {
        $this->$natName = $natName;
    }
    
    
    public function getNatName()
    {
        return $this->natName;
    }
    
    public function setNatName($natName): self
    {
        $this->natName = $natName;
        
        return $this;
    }
    
    
     
    public function __toString()
    {
        return $this->natName;
    }
    
    
}
?>
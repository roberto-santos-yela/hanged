<?php

class Config 
{
    private $words = [
            
            'mascota', 
            'carlino',
            'aguacate', 
            'indio',
            'hamburguesa',
            'nintendo',
            'videoconsola',
                    
        ];

    public function get_words()
    {
        return $this->words;
    }    

    private $letters = ['a','b','c','d','e','f','g','h','i','j','k','l',
    'm','n','o','p','q','r','s','t','u','v','w','x','y','z'];

    public function get_letters()
    {
        return $this->letters;
    } 

    private $lifes = 100;

    public function get_lifes()
    {
        return $this->lifes;
    }






}
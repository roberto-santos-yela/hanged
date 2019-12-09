<?php

class Admin
{
    public function print_welcome()
    {
        echo("Hanged by Roberto Santos Yela");
        echo '<br/>';
    }

    public function print_chosen_word($chosen_word)
    {
        echo '<br/>';
        echo("Chosen word: $chosen_word");
        echo '<br/>';
    }

    public function print_hidden_chosen_word($word_to_find)
    {
        $hidden_chosen_word = implode($word_to_find);  
        echo '<br/>';
        echo("Hidden word: $hidden_chosen_word");
        echo '<br/>';
    }

    public function print_error()
    {
        echo '<br/>';
        echo("¡YOU FAIL! ¡YOU LOSE A LIFE!");
        echo '<br/>';
    }

    public function print_revealed_word($word_to_find)
    {
        $revealed_word = implode($word_to_find);
        echo '<br/>';
        echo("Result: $revealed_word");
        echo '<br/>';
    } 
    
    public function print_game_over($lifes)
    {
        echo '<br/>';
        echo("Number of lifes: $lifes");
        echo '<br/>';
        echo '<br/>';
        echo("¡GAME OVER!");
        echo '<br/>';
    }

    public function print_lifes($lifes)
    {
        echo '<br/>';
        echo("Number of lifes: $lifes");
        echo '<br/>';
    }
  
    public function print_chosen_letter($chosen_letter)
    {
        echo '<br/>';
        echo("Chosen letter: $chosen_letter");
        echo '<br/>';
    }

    public function get_chosen_word($words)
    {
        $words_number = count($words);
        $random_word_index = rand( 0, $words_number -1);
        $chosen_word = $words[$random_word_index];
        
        return $chosen_word;
    }

    public function set_word_to_find($chosen_word)
    {
        $chosen_word_lenght = strlen($chosen_word);

        $word_to_find = [];
        for ($i = 0; $i <= $chosen_word_lenght - 1; $i++) {
            
            $word_to_find[$i] = "_ ";
                
        }

        return $word_to_find;
    }

    public function get_letters_of_chosen_word($chosen_word)
    {

        $letters_of_chosen_word = str_split($chosen_word);
        
        return $letters_of_chosen_word;
    }

    public function get_number_of_letters($letters)
    {
        $number_of_letters = count($letters);

        return $number_of_letters;
    }
  
    public function is_letter_found($letters_of_chosen_word, $chosen_letter) 
    {
        foreach ($letters_of_chosen_word as $key => $letter)
        {            
            if($chosen_letter == $letter)
            {
                return true;
                
            }

        }  

        return false;
    }

    public function replace_letter($letters_of_chosen_word, $chosen_letter, $word_to_find) 
    {
        foreach ($letters_of_chosen_word as $key => $letter)
        {            
            if($chosen_letter == $letter)
            {
                $word_to_find[$key] = $letter;
                
            }

        }  

        return $word_to_find;
    }

    public function is_word_found($word_to_find)
    {
        foreach ($word_to_find as $letter)
            {   
                if( $letter == "_ ")
                {

                    return false;
                    
                }      

            }

        return true;

    }

    public function is_game_over($lifes, $is_word_found)
    {
        if($lifes == 0 || $is_word_found)
        {
            return true;
        }

        return false;
    }

}
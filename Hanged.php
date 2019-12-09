<?php

class Hanged
{
    private $config;
    private $admin;
    private $player;

    public function __construct($config)
    {
        $this->config = $config;
        $this->admin = new Admin();
        $this->player = new Player();

    }

    public function start()
    {         

        $this->admin->print_welcome();       
        $lifes = $this->config->get_lifes();       
        $chosen_word = $this->admin->get_chosen_word($this->config->get_words());     
        $this->admin->print_chosen_word($chosen_word);       
        $word_to_find = $this->admin->set_word_to_find($chosen_word);          
        $letters_of_chosen_word = $this->admin->get_letters_of_chosen_word($chosen_word);
        $this->admin->print_hidden_chosen_word($word_to_find);       
        $number_of_letters = $this->admin->get_number_of_letters($this->config->get_letters());
        $is_game_over = false;

        do{

            $this->admin->print_lifes($lifes);
            $chosen_letter = $this->player->get_chosen_letter($number_of_letters, $this->config->get_letters());
            $this->admin->print_chosen_letter($chosen_letter);
            $is_letter_found = $this->admin->is_letter_found($letters_of_chosen_word, $chosen_letter);
            if($is_letter_found){

                $word_to_find = $this->admin->replace_letter($letters_of_chosen_word, $chosen_letter,$word_to_find);

            }else{
                
                $lifes--;
                $this->admin->print_error();
                
            }
            
            $is_word_found = $this->admin->is_word_found($word_to_find);         
            $this->admin->print_revealed_word($word_to_find);
            $is_game_over = $this->admin->is_game_over($lifes, $is_word_found);
            if($is_game_over)
            {

                $this->admin->print_game_over($lifes);

            } 

        }while(!$is_game_over);

    }

}







<?php

class Player {

    public function get_chosen_letter($letters_number, $letters)
    {
        $random_letter_index = rand(0, $letters_number -1);
        $chosen_letter = $letters[$random_letter_index];
        return $chosen_letter;

    }

}

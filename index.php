<?php

echo("Hanged by Roberto Santos Yela");
echo '<br/>';

$letters = range('a', 'z');
$words = ['perro', 'bazoka', 'plebeyo', 'guarro', 'pepe'];
$lifes = 100;

$words_number = count($words);
$random_word_index = rand( 0, $words_number -1);
$chosen_word = $words[$random_word_index];

echo '<br/>';
echo("Chosen word: $chosen_word");
echo '<br/>';

$chosen_word_lenght = strlen($chosen_word);

$coded_word = [];
for ($i = 0; $i <= $chosen_word_lenght - 1; $i++) {
    
    $coded_word[$i] = "_ ";
        
}

$hidden_chosen_word = implode($coded_word);

$word_to_guess = str_split($chosen_word);

echo '<br/>';
echo("Word to guess: $hidden_chosen_word");
echo '<br/>';

$letters_number = count($letters);

$is_game_over = false;

do{

    echo '<br/>';
    echo("Number of lifes: $lifes");
    echo '<br/>';

    $random_letter_index = rand(0, $letters_number -1);
    $chosen_letter = $letters[$random_letter_index];

    echo '<br/>';
    echo("Chosen letter: $chosen_letter");
    echo '<br/>';

    $is_letter_found = false;

    foreach ($word_to_guess as $key => $letter)
    {
       
        if($chosen_letter == $letter)
        {
            $coded_word[$key] = $letter;
            $is_letter_found = true;
        
        }

    }   

    $is_word_found = true;

    foreach ($coded_word as $letter)
    {   
        if( $letter == "_ ")
        {
            
            $is_word_found = false;
            
        }      

    }

    $revealed_word = implode($coded_word);
    
    echo '<br/>';
    echo("Result: $revealed_word");
    echo '<br/>';

    if($is_word_found)
    {
        $is_game_over = true;

        echo '<br/>';
        echo("Number of lifes: $lifes");
        echo '<br/>';
        echo '<br/>';
        echo("¡YOU WIN!");
        echo '<br/>';

    } 

    if($is_letter_found == false)
    {

        $lifes--;
        echo '<br/>';
        echo("¡YOU FAIL! ¡YOU LOSE A LIFE!");
        echo '<br/>';
    
    }

    if($lifes <= 0)
    {

        $is_game_over = true;
        
        echo '<br/>';
        echo("Number of lifes: $lifes");
        echo '<br/>';
        echo '<br/>';
        echo("GAME OVER");
        echo '<br/>';
    
    }

}while(!$is_game_over);

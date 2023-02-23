<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count += 1;
  $number_to_guess = rand(1, 10);
  echo "\nMake your guess...\n";
  $player_guess = intval(readline(">> "));
  echo "Round: $play_count\nMy Number: $number_to_guess\nYour guess: $player_guess";

  if($player_guess === $number_to_guess){
    $correct_guesses += 1;
  }
  if($player_guess > $number_to_guess){
    $guess_high += 1;
  }  
  if($player_guess < $number_to_guess){
    $guess_low += 1;
  }
}


guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_correct = ($correct_guesses / $play_count) * 100;
echo "\nYou guessed {$percent_correct}% correctly\n";
if ($guess_high > $guess_low){
    echo "When you guessed wrong, you tended to guess high";
} else if ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low";
}
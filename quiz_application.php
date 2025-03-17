<?php

function askQuestion(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

$questions = [
    ['question' => 'What does PHP stand for?', 'correct' => 'PHP: Hypertext Preprocessor'],
    ['question' => 'Which function is used to read a line of input from the user in PHP?', 'correct' => 'fgets()'],
    ['question' => 'What symbol is used to denote a variable in PHP?', 'correct' => '$'],
    ['question' => 'Which of the following is NOT a valid PHP data type?', 'correct' => 'Character'],
];

$answers = [];

foreach ($questions as $index => $question) {
    echo($index + 1) . ". " . $question['question'] . "\n";
    $answers[$index] = trim(readline("Your answer: "));
}

$score = askQuestion($questions, $answers);
// $score = 4;

echo "Quiz completed! Your score is: $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Congratulations! You passed the quiz.";
} elseif ($score >= 3) {
    echo "You did well! You passed the quiz.";
} else {
    echo "Sorry, you did not pass the quiz. Better luck next time!";
}

<?php
$wallet = 1000;
$bet = (float)readline('Place your bet (0.10, 0.20, 0.30): ') . PHP_EOL;
$symbols = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j >= $i; $j++)
    $random = array_rand($symbols, 2);
    array_push($board[$i][$j], $random);
}

function displayBoard(array $board): void
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
    echo " {$board[3][0]} | {$board[3][1]} | {$board[3][2]} \n";
    echo " {$board[4][0]} | {$board[4][1]} | {$board[4][2]} \n";
}
displayBoard($board);
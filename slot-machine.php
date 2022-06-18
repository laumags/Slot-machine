<?php
$wallet = 1000.00;
while($wallet > 0) {
    $choice = readline('Spin (yes/no)?: ');
    if ($choice == "yes") {
        $bet = (float)readline('Place your bet (0.10, 0.20, 0.30, 0.40, 0.50): ');
        $symbols = ['A', 'B', 'C', 'D', 'E', 'F',
            'A', 'B', 'C', 'D', 'E',
            'A', 'B', 'C', 'D',
            'A', 'B', 'C',
            'A', 'B',
            'A'];
        $board = [];

        for ($i = 0; $i < 15; $i++) {
            $random = array_rand($symbols);
            $board[$i] = array_fill($i, 1, $symbols[$random]);
        }
            echo implode("", $board[0]) . " | " . implode("", $board[1]) . " | " . implode("", $board[2]) . " | " . implode("", $board[3]) . " | " . implode("", $board[4]) . "\n";
            echo implode("", $board[5]) . " | " . implode("", $board[6]) . " | " . implode("", $board[7]) . " | " . implode("", $board[8]) . " | " . implode("", $board[9]) . "\n";
            echo implode("", $board[10]) . " | " . implode("", $board[11]) . " | " . implode("", $board[12]) . " | " . implode("", $board[13]) . " | " . implode("", $board[14]) . "\n";
            $wallet -= $bet;
    } else {
        echo "Your wallet balance is $wallet" . PHP_EOL;
        break;
    }
}
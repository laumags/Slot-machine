<?php
$wallet = 2;
$reward = 0;
while ($wallet >= 0.10) {
    $choice = readline('Spin (yes/no)?: ');
    if ($choice == "yes") {
        $bet = (float)readline('Place your bet (0.10, 0.20, 0.30, 0.40, 0.50): ');
        $wallet -= $bet;
        $symbols = ['A', 'B', 'C', 'D', 'E', 'F',
            'A', 'B', 'C', 'D', 'E',
            'A', 'B', 'C', 'D',
            'A', 'B', 'C',
            'A', 'B',
            'A'];
        $symbolPrice = [
            "A" => 0.01,
            "B" => 0.02,
            "C" => 0.03,
            "D" => 0.04,
            "E" => 0.05,
            "F" => 0.06
        ];
        $board = [];

        for ($i = 0; $i < 15; $i++) {
            $random = array_rand($symbols);
            $board[$i] = array_fill($i, 1, $symbols[$random]);
        }
        $zero = implode("", $board[0]);
        $one = implode("", $board[1]);
        $two = implode("", $board[2]);
        $three = implode("", $board[3]);
        $four = implode("", $board[4]);
        $five = implode("", $board[5]);
        $six = implode("", $board[6]);
        $seven = implode("", $board[7]);
        $eight = implode("", $board[8]);
        $nine = implode("", $board[9]);
        $ten = implode("", $board[10]);
        $eleven = implode("", $board[11]);
        $twelve = implode("", $board[12]);
        $thirteen = implode("", $board[13]);
        $fourteen = implode("", $board[14]);

        echo $zero . " | " . $one . " | " . $two . " | " . $three . " | " . $four . "\n";
        echo $five . " | " . $six . " | " . $seven . " | " . $eight. " | " . $nine . "\n";
        echo $ten . " | " . $eleven . " | " . $twelve . " | " . $thirteen . " | " . $fourteen . "\n";
        echo "Your wallet balance is " . round($wallet, 2) . PHP_EOL;

        if ($zero == $one && $zero == $two) {
            $reward = ($symbolPrice[$zero] * 3) * 1 * ($bet * 10);
            echo "reward in 1 line, 3 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($five == $six && $five == $seven) {
            $reward = ($symbolPrice[$five] * 3) * 2 * ($bet * 10);
            echo "reward in 2 line, 3 x $five: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $eleven && $ten == $twelve) {
            $reward = ($symbolPrice[$ten] * 3) * 3 * ($bet * 10);
            echo "reward in 3 line, 3 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($zero == $six && $zero == $twelve) {
            $reward = ($symbolPrice[$zero] * 3) * 4 * ($bet * 10);
            echo "reward in 4 line, 3 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $six && $ten == $two) {
            $reward = ($symbolPrice[$ten] * 3) * 5 * ($bet * 10);
            echo "reward in 5 line, 3 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($zero == $one && $zero == $two && $zero == $three) {
            $reward = ($symbolPrice[$zero] * 4) * 1 * ($bet * 10);
            echo "reward in 1 line, 4 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($five == $six && $five == $seven && $five == $eight) {
            $reward = ($symbolPrice[$five] * 4) * 2 * ($bet * 10);
            echo "reward in 2 line, 4 x $five: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $eleven && $ten == $twelve && $ten == $thirteen) {
            $reward = ($symbolPrice[$ten] * 4) * 3 * ($bet * 10);
            echo "reward in 3 line, 4 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($zero == $six && $zero == $twelve && $zero == $eight) {
            $reward = ($symbolPrice[$zero] * 4) * 4 * ($bet * 10);
            echo "reward in 4 line, 4 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $six && $ten == $two && $ten == $eight) {
            $reward = ($symbolPrice[$ten] * 4) * 5 * ($bet * 10);
            echo "reward in 5 line, 4 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($zero == $one && $zero == $two && $zero == $three && $zero == $four) {
            $reward = ($symbolPrice[$zero] * 5) * 1 * ($bet * 10);
            echo "reward in 1 line, 5 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($five == $six && $five == $seven && $five == $eight && $five == $nine) {
            $reward = ($symbolPrice[$five] * 5) * 2 * ($bet * 10);
            echo "reward in 2 line, 5 x $five: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $eleven && $ten == $twelve && $ten == $thirteen && $ten == $fourteen) {
            $reward = ($symbolPrice[$ten] * 5) * 3 * ($bet * 10);
            echo "reward in 3 line, 5 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($zero == $six && $zero == $twelve && $zero == $eight && $zero == $four) {
            $reward = ($symbolPrice[$zero] * 5) * 4 * ($bet * 10);
            echo "reward in 4 line, 5 x $zero: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
        if ($ten == $six && $ten == $two && $ten == $eight && $ten == $fourteen) {
            $reward = ($symbolPrice[$ten] * 5) * 5 * ($bet * 10);
            echo "reward in 5 line, 5 x $ten: $reward" . PHP_EOL;
            $wallet += $reward;
            echo "Your wallet balance is $wallet" . PHP_EOL;
        }
    } else {
        echo "Your wallet balance is " . round($wallet, 2) . PHP_EOL;
        break;
    }
}
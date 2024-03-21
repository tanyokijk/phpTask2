<?php
declare(strict_types=1);
$a = 15;
$b = 5;
echo "Перше число: $a";
echo "<br>Друге число: $b";
$result = match ($a % $b) {
    0 => "<br>$a кратне $b<br>",
    default => "<br>$a не кратне $b<br>",
};

echo $result;


if($a>$b)
{
    echo "$a^2 = " . $a**2;
}
else
{
    echo "$b^2 = " .$b**2;
}

$months = array
(
    '1' => 31,
    '2' => 28,
    '3' => 31,
    '4' => 30,
    '5' => 31,
    '6' => 30,
    '7' => 31,
    '8' => 31,
    '9' => 30,
    '10' => 31,
    '11' => 30,
    '12'=> 31
);

$numberOfMonth = 3;
$numberOfDaysInMonth = $months[$numberOfMonth];
echo  "<br>Номер місяця: " . $numberOfMonth;
echo  "<br>Кількість днів: " . $numberOfDaysInMonth;

$year = 2024;
$result = match ($year % 4) {
    0 => "$year високосний",
    default => "$year не високосний",
};

echo "<br>" . $result;

echo "<br>Перше число: $a";
echo "<br>Друге число: $b<br>";

if($a % 3 == 0 && $b % 3 == 0)
{
    echo "$a+$b= ".$a+$b;
}
elseif ($b != 0)
{
    echo "$a/$b = ".$a/$b;
}
else
{
    echo "Некоректний ввід";
}

function check (int $session_id)
{
    if($session_id==0)
    {
        $s = <<<LABEL
<h1>Будь ласка, зараєструйтеся!</h1>
Session id = $session_id
<br>
<input type = "text" name = "login" placeholder="Логін">
<br>
<input type = "text" name = "password" placeholder="Пароль">
<br>
LABEL;
        echo $s;
    }
    elseif ($session_id==1)
    {
        $s = <<<LABEL
<h1>Ви вже зареєстровані!</h1>
Session id = $session_id
LABEL;
        echo $s;
    }
    else
    {
        echo "Некоректний ввід";
    }
}
function drawSquare (int $xcoord, int $ycoord, string $color)
{
    echo "<p>X: {$xcoord}</p>
          <p>Y: {$ycoord}</p>
          <p>Колір: {$color}</p>";
    if($xcoord<=1600 && $ycoord<=800)
    {
        echo "<div style='
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: {$color};
    left: {$xcoord}px;
    top: {$ycoord}px;'></div>";
    }
    else
    {
        echo "Виходить за межі екрану";
    }

}

$session_id=0;
check($session_id);
$session_id=1;
check($session_id);
drawSquare(1600,800,"pink");

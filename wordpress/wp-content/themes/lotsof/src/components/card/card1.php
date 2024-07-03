<?php

// namespace Components\Card;

$card = new \Components\Card\Card();
$card->image = new \Lotsof\Types\Image();

print \Components\Blade\render('card', $card);



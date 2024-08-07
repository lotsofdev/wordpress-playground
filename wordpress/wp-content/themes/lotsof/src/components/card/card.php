<?php

// namespace Components\Card;


$link = new \Lotsof\Types\Link(text: 'EFEFEF');
$button = new \Lotsof\Types\Button(link: $link);

$button = \Lotsof\Types\Button::mock();

$image = new \Lotsof\Types\Image(src: 'https://picsum.photos/200/300');
$body = new \Lotsof\Types\Body(title: 'Hello', lead: 'World', buttons: [$button]);
$body = \Lotsof\Types\Body::mock();
$card = new \Components\Card\Card($body, $image);


print \Components\Renderer\render('card.card', $card->toObject());



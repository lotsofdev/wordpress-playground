<?php

namespace Components\Card;

class Card extends \Lotsof\Types\Base
{
    protected \Lotsof\Types\Body $body;
    protected \Lotsof\Types\Image $image;

    public function __construct(\Lotsof\Types\Body $body = null, \Lotsof\Types\Image $image = null)
    {
        $this->body = $body;
        $this->image = $image;
    }
}
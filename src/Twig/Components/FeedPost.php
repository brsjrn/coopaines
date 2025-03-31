<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class FeedPost
{
    public bool $hasMeta = true;
    public int $type = 0; // 0 = defaut / 1 = Covoiturage / 2 = Agenda / 3 = Annonce / 4 = Autopartage
}

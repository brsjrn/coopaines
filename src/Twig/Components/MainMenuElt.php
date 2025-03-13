<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class MainMenuElt
{
    public string $link = "#";
    public string $title = "";
    public string $icon = "";
}

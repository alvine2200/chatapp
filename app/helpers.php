<?php

function generateName($name)
{
    $userImage = "";
    $shortName = "";
    $names = explode('', $name);
    foreach ($names as $nem) {
        $shortName = $nem[0];
    }
    $userImage = '<div class="name-image g-primary>' . $shortName . '</div>';
    return $userImage;
}

<?php

namespace Eskiell\Gf;

class Gf
{
    public static function flatten(array $element, string $key): array
    {
        $flatArray = array();
        foreach ($element as $node) {
            if (array_key_exists($key, $node)) {
                $flatArray = array_merge($flatArray, self::flatten($node[$key], $key));
                unset($node[$key]);
            }
            $flatArray[] = $node;
        }
        usort($flatArray, function ($a, $b) {
            return $a['id'] <=> $b['id'];
        });
        return $flatArray;
    }

}

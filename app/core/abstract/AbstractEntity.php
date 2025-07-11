<?php

namespace App\Core;

abstract class AbstractEntity
{
    private array $tableau;
    private Object $object;

    abstract public static function toObject(array $tableau): self;

    abstract public function toArray(Object $object): array;

    //convert objet to json
     public static function toJson(Object $object): string
     {
         return json_encode(toArray($object));
     }

}



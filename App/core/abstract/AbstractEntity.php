<?php
namespace App\Core\Abstract;

abstract class AbstractEntity
{


    abstract public static function toObject(array $tableau): static;
    abstract public function toArray(Object $object): array;

  
    // public static function toJson(Object $object): string
    // {
    //     $instance = new static();
    //     return json_encode($instance->toArray($object));
    // }
}
//faire de cette classe une interface
<?php
namespace MKennedy\NameService;

class NameService
{
    private $names = [
        18329 => "Mark Kennedy"
    ];

    public function getName(int $id)
    {
        if(array_key_exists($id, $this->names)) {
            return $this->names[$id];
        }
        return null;
    }
}
<?php

namespace OOPChess;

class Piece implements PieceInterface
{
    private $id;
    private $name;
    private $color;

    static private $lastID = 0;

    public function __construct(string $name, string $color)
    {
        $this->id = ++self::$lastID;
        $this->name = $name;
        $this->color = $color;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

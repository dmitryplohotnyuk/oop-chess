<?php

namespace OOPChess;

interface GameInterface
{
    public static function makeBoard(): BoardInterface;
    public static function makePiece(String $name, String $color): Piece;
}

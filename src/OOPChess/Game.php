<?php

namespace OOPChess;

class Game implements GameInterface
{
    public static function makeBoard(): BoardInterface
    {
        $board = new ClassicBoard();
        return $board;
    }

    public static function makePiece(String $name, String $color): Piece
    {
        $piece = new Piece($name, $color);
        return $piece;
    }
}

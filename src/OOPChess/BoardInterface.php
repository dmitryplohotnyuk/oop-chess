<?php

namespace OOPChess;

interface BoardInterface
{
    public function setPiecePosition(Piece $piece, string $postion): void;
    public function movePiece(string $fromPosition, string $toPosition): void;
    public function showBoard(): array;
    public function clearBoard(): void;
}

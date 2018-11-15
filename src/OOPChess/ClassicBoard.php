<?php

namespace OOPChess;

class ClassicBoard implements BoardInterface
{
    private const X_POSITIONS = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
    private const Y_POSITIONS = ['1', '2', '3', '4', '5', '6', '7', '8'];
    
    private $positions = [];

    public function __CONSTRUCT()
    {
        $this->clearBoard();
    }

    public function clearBoard(): void
    {
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $xPosition = self::X_POSITIONS[$i];
                $yPosition = self::Y_POSITIONS[$j];
                $position = $xPosition . $yPosition;
                
                $this->positions[$position] = null;
            }
        }
    }

    public function showBoard(): array
    {
        return $this->positions;
    }

    public function setPiecePosition(Piece $piece, string $position): void
    {
        if (!array_key_exists($position, $this->positions)) {
            throw new \Exception('Can\'t set piece. Unknown position!');
        } else {
            $this->positions[$position] = $piece;
        }
    }

    public function movePiece(string $fromPosition, string $toPosition): void
    {
        if (!array_key_exists($fromPosition, $this->positions)) {
            throw new \Exception('Can\'t move piece. Unknown \'from\' position!');
        } elseif ($this->positions[$fromPosition] === null) {
            throw new \Exception('Can\'t move piece. Position \'from\' is empty!');
        } elseif (!array_key_exists($toPosition, $this->positions)) {
            throw new \Exception('Can\'t move piece. Unknown \'to\' position!');
        } elseif ($this->positions[$toPosition] !== null) {
            throw new \Exception('Can\'t move piece. Position \'to\' isn\'t empty!');
        } else {
            $this->positions[$toPosition] = $this->positions[$fromPosition];
            $this->positions[$fromPosition] = null;
        }
    }
}

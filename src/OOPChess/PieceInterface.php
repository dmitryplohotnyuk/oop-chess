<?php

namespace OOPChess;

interface PieceInterface
{
    public function getId(): int;
    public function getName(): string;
    public function getColor(): string;
}

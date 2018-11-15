<?php

namespace OOPChess;

spl_autoload_register(function ($class) {
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $classFilename;
});

$board = Game::makeBoard();
$piece = Game::makePiece('Pawn', 'White');

print_r($board->showBoard());

try {
    $board->setPiecePosition($piece, 'E2');
} catch (\Exception $e) {
    echo $e->getMessage(), "\n";
}

print_r($board->showBoard());

try {
    $board->movePiece('E2', 'E4');
} catch (\Exception $e) {
    echo $e->getMessage(), "\n";
}

print_r($board->showBoard());

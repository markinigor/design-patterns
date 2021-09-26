<?php

namespace App\Command\DP;

interface UndoableCommand extends Command
{
    public function undo();
}
<?php

namespace LDL\Console\Helper;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;

class ProgressBarFactory
{
    public static function build(OutputInterface $output, int $total=0): ProgressBar
    {
        $progressBar = new ProgressBar($output, $total);
        $progressBar->setBarCharacter("▩");
        $progressBar->setEmptyBarCharacter("▢");
        $progressBar->setProgressCharacter("▶");
        $progressBar->setOverwrite(true);

        return $progressBar;
    }
}
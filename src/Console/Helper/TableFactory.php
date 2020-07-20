<?php

namespace LDL\Console\Helper;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableStyle;
use Symfony\Component\Console\Output\OutputInterface;

class TableFactory
{
    public static function build(
        OutputInterface $output,
        string $title,
        array $headers = []
    ): Table
    {
        $tableStyle = new TableStyle();
        $tableStyle->setHeaderTitleFormat('<fg=white;bg=blue;options=bold;> %s </>');
        $tableStyle->setHorizontalBorderChars('─');
        $tableStyle->setCrossingChars(
            '─',
            '┌',
            '┬',
            '┐',
            '┤',
            '┘',
            '┴',
            '└',
            '├',
            '├',
            '┼',
            '┤'
        );

        $table = new Table($output);

        $table->setHeaderTitle($title);

        if (count($headers) > 0) {
            $table->setHeaders($headers);
        }

        $table->setStyle($tableStyle);

        return $table;
    }

}
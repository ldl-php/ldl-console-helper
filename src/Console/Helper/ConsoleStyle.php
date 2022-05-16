<?php

namespace LDL\Console\Helper;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\OutputInterface;

class ConsoleStyle
{
    public function apply(OutputInterface $output)
    {
        $outputStyle = new OutputFormatterStyle('red', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('emergency', $outputStyle);

        $outputStyle = new OutputFormatterStyle('#db592a', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('alert', $outputStyle);

        $outputStyle = new OutputFormatterStyle('red', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('critical', $outputStyle);

        $outputStyle = new OutputFormatterStyle('red', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('error', $outputStyle);

        $outputStyle = new OutputFormatterStyle('yellow', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('warning', $outputStyle);

        $outputStyle = new OutputFormatterStyle('#db592a', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('notice', $outputStyle);

        $outputStyle = new OutputFormatterStyle('blue', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('info', $outputStyle);

        $outputStyle = new OutputFormatterStyle('magenta', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('debug', $outputStyle);

        $outputStyle = new OutputFormatterStyle('green', 'white', ['bold', 'blink']);
        $output->getFormatter()->setStyle('log', $outputStyle);

    }
}
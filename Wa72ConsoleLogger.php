<?php
use Psr\Log\AbstractLogger;
use Symfony\Component\Console\Output\OutputInterface;

class Wa72ConsoleLogger extends AbstractLogger {
    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    protected $out;

    function __construct(OutputInterface $out) {
        $this->out = $out;
    }
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {

        $message = '<'. $level . '>' . $message . '</'. $level . '>';
        $this->out->writeln($message);
    }

}

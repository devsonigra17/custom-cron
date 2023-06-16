<?php
Namespace Dev\CustomCron\Cron;
use Dev\Showproduct\Logger\Logger;
class SampleCron {
    protected $customLogger;
    public function __construct(Logger $customLogger) {
        $this->customLogger = $customLogger;
    }
    public function execute() {
        $this->customLogger->info('Custom Cron Job Works');
    }
    public function group() {
        $this->customLogger->info('Custom Cron Group Works');
    }
}
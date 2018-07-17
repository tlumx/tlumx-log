<?php
/**
 * Tlumx (https://tlumx.com/)
 *
 * @author    Yaroslav Kharitonchuk <yarik.proger@gmail.com>
 * @link      https://github.com/tlumx/tlumx-servicecontainer
 * @copyright Copyright (c) 2016-2018 Yaroslav Kharitonchuk
 * @license   https://github.com/tlumx/tlumx-servicecontainer/blob/master/LICENSE  (MIT License)
 */
namespace Tlumx\Tests\Log;

use Psr\Log\Test\LoggerInterfaceTest;
use Tlumx\Log\Logger;

class LoggerTest extends LoggerInterfaceTest
{
    private $logHandler;

    public function getLogger()
    {
        $logger = new Logger();
        $this->logHandler = $logger;

        return $logger;
    }

    public function getLogs()
    {
        $logger = $this->logHandler;

        $messages = $logger->getLogMessages();

        $return = [];
        foreach ($messages as $message) {
            $return[] = $message[1] . ' ' . $message[3];
        }

        return $return;
    }
}

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

use Tlumx\Log\Writer\Syslog as SyslogWrite;

class SyslogTest extends \PHPUnit\Framework\TestCase
{
    public function testImplements()
    {
        $writer = new SyslogWrite();
        $this->assertInstanceOf('Tlumx\Log\Writer\WriterInterface', $writer);
    }

    public function testLogSyslogWrite()
    {
        $writer = new SyslogWrite();

        $datetime = new \DateTime();
        $writer->write([
            [$datetime, 'error', 500, 'some message']
        ]);
    }
}

<?php
/**
 * Tlumx (https://tlumx.com/)
 *
 * @author    Yaroslav Kharitonchuk <yarik.proger@gmail.com>
 * @link      https://github.com/tlumx/tlumx-servicecontainer
 * @copyright Copyright (c) 2016-2018 Yaroslav Kharitonchuk
 * @license   https://github.com/tlumx/tlumx-servicecontainer/blob/master/LICENSE  (MIT License)
 */
namespace Tlumx\Log\Writer;

/**
 * Logger writer interface.
 */
interface WriterInterface
{
    /**
     * Write a message to the log storage.
     *
     * @param array $messages
     */
    public function write(array $messages);
}

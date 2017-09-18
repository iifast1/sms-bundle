<?php
declare(strict_types=1);

namespace Headsnet\Sms;

use Headsnet\Sms\Exception\SmsException;
use Headsnet\Sms\Exception\SmsSenderException;
use Headsnet\Sms\Model\Interfaces\SmsMessageInterface;
use Headsnet\Sms\Model\Interfaces\TransformedSmsMessageInterface;
use Headsnet\Sms\Model\SmsMessage;

/**
 * Interface SmsSenderInterface
 */
interface SmsSenderInterface
{

    /**
     * Send message directly without adding it to queue first
     * 
     * @param SmsMessage $smsMessage
     *
     * @return SmsSenderInterface
     * @throws SmsException
     */
    public function send(SmsMessage $smsMessage);

    /**
     * Send a DispatchMessage
     * 
     * Useful when you have created DispatchMessage already by yourself
     * 
     * @param TransformedSmsMessageInterface $message
     *
     * @return SmsMessageInterface
     * @throws SmsSenderException
     */
    public function sendDispatchMessage(TransformedSmsMessageInterface $message);

}

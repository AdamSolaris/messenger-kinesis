<?php

declare(strict_types=1);

namespace Cvek\Kinesis\Messenger;

use RdKafka\Message;
use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;

final class KinesisMessageStamp implements NonSendableStampInterface
{
    /** @var Message */
    private $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}

<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Kafka\Event;

use Hyperf\Kafka\AbstractConsumer;
use Throwable;

class FailConsume extends Consume
{
    public function __construct(AbstractConsumer $consumer, $data, protected Throwable $throwable)
    {
        parent::__construct($consumer, $data);
    }

    public function getThrowable(): Throwable
    {
        return $this->throwable;
    }
}

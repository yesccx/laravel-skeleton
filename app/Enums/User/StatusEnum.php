<?php

declare(strict_types = 1);

namespace App\Enums\User;

use Yesccx\Enum\Traits\AnnotationScan;
use Yesccx\Enum\Supports\Message;
use Yesccx\Enum\AbstractEnum;

final class StatusEnum extends AbstractEnum
{
    use AnnotationScan;

    #[Message('禁用')]
    const OFF = 0;

    #[Message('启用')]
    const ON = 1;
}
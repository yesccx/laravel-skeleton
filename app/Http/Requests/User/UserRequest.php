<?php

declare(strict_types = 1);

namespace App\Http\Requests\User;

use App\Enums\User\StatusEnum;
use Yesccx\BetterLaravel\Rules\PhoneRule;
use Yesccx\BetterLaravel\Validation\BaseRequest;
use Yesccx\Enum\Rules\EnumRule;

final class UserRequest extends BaseRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['bail', 'required', 'string', new PhoneRule, 'min:2'],
            'status' => ['bail', 'required', 'numeric', new EnumRule(StatusEnum::class)]
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'username' => '用户名',
            'status' => '状态'
        ];
    }
}

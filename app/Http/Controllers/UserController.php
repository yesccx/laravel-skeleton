<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Enums\User\StatusEnum;
use App\Http\Requests\User\UserRequest;
use Yesccx\BetterLaravel\Http\BaseController;

final class UserController extends BaseController
{
    public function info(UserRequest $request) {
        return $this->responseError('13');
    }
}
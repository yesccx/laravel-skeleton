# Laravel-Skeleton

## Laravel9.3.1

以下为基于官方版本做的变更调整

### 新增 helpers.php

- 新增 `app/Support/helpers.php` 文件
- 调整 `composer.json` 文件，加载 `helpers.php` 文件

### 移除 `laravel/sanctum` 依赖包

- `composer remove laravel/sanctum`
- 移除 `config/sanctum.php`

### 移除默认的 `App\Models\User` 模型文件及相关迁移

- 移除 `app/Models/User.php` 文件
- 移除 `database/factories/UserFactory.php` 文件
- 移除 `database/migrations/2014_10_12_000000_create_users_table.php` 文件
- 移除 `database/migrations/2014_10_12_100000_create_password_resets_table.php` 文件
- 移除 `database/migrations/2019_08_19_000000_create_failed_jobs_table.php` 文件
- 移除 `database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php` 文件
- 移除 `database/seeders/DatabaseSeeder.php` 文件
- 调整 `routes/api.php` 文件，移除 `User` 模型相关内容
- 调整 `routes/channels.php` 件，移除 `User` 模型相关内容
- 调整 `app/Providers/EventServiceProvider.php` 文件，移除注册事件监听
- 调整 `app/Http/Middleware/TrimStrings` 文件，去除 `except` 中用户密码相关配置
- 调整 `app/Exceptions/Handler` 文件，去除 `dontFlash` 中用户密码相关配置

### 移除多余中间件

- 调整 `app/Http/Kernel` 文件，禁用 `HandleCors` 中间件
- 调整 `app/Http/Kernel` 文件，禁用 `TrustProxies` 中间件
- 调整 `app/Http/Kernel` 文件，移除 `middlewareGroups.api` 中的 `throttle:api` 中间件
- 调整 `app/Http/Kernel` 文件，移除 `middlewareGroups.api` 中的 `SubstituteBindings` 中间件
- 调整 `app/Http/Kernel` 文件，移除 `middlewareGroups.api` 中的 `EnsureFrontendRequestsAreStateful` 中间件

### 移除默认控制器

- 移除 `app/Http/Controllers/Controller.php` 文件

### 移除默认api限流器

- 调整 `app/Providers/RouteServiceProvider.php` 文件， 移除 `configureRateLimiting` 方法

### 移除默认定义的web路由

- 调整 `app/routes/web.php` 文件，移除 `web` 路由

### 调整时区及语言

- 调整 `config/app.php`文件，配置 `app.timezone` 为 `PRC`
- 调整 `config/app.php`文件，配置 `app.locale` 为 `zh_CN`
- 调整 `config/app.php`文件，配置 `app.faker_locale` 为 `zh_CN`

### 调整事件自动发现默认开启

- 调整 `app/Providers/EventServiceProvider.php`文件，配置 `shouldDiscoverEvents` 方法返回 `true`

### 调整默认日志配置

- 调整 `app/config/logging.php`文件，配置 `channels.stack.channels` 为 `daily`
- 调整 `app/config/logging.php`文件，配置 `channels.daily.days` 为 `30`
<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'باید این فیلد پذیرفته شود.',
    'accepted_if'          => 'باید این فیلد پذیرفته شود وقتی :other برابر :value باشد.',
    'active_url'           => 'این فیلد یک URL معتبر نیست.',
    'after'                => 'باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => 'باید تاریخی بعد یا برابر با :date باشد.',
    'alpha'                => 'فقط باید شامل حروف باشد.',
    'alpha_dash'           => 'فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num'            => 'فقط باید شامل حروف و اعداد باشد.',
    'array'                => 'باید یک آرایه باشد.',
    'attached'             => 'این فیلد قبلاً پیوست شده است.',
    'before'               => 'باید تاریخی قبل از :date باشد.',
    'before_or_equal'      => 'باید تاریخی قبل یا برابر با :date باشد.',
    'between'              => [
        'array'   => 'باید بین :min و :max آیتم داشته باشد.',
        'file'    => 'باید بین :min و :max کیلوبایت باشد.',
        'numeric' => 'باید بین :min و :max باشد.',
        'string'  => 'باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean'              => 'باید صحیح یا غلط باشد.',
    'confirmed'            => 'تأییدیه مطابقت ندارد.',
    'current_password'     => 'رمز عبور نادرست است.',
    'date'                 => 'یک تاریخ معتبر نیست.',
    'date_equals'          => 'باید تاریخی برابر با :date باشد.',
    'date_format'          => 'با فرمت :format مطابقت ندارد.',
    'different'            => 'باید متفاوت باشد از :other.',
    'digits'               => 'باید :digits رقم باشد.',
    'digits_between'       => 'باید بین :min و :max رقم باشد.',
    'dimensions'           => 'ابعاد تصویر نامعتبر دارد.',
    'distinct'             => 'مقدار تکراری دارد.',
    'email'                => 'باید یک آدرس ایمیل معتبر باشد.',
    'ends_with'            => 'باید با یکی از مقادیر زیر خاتمه یابد: :values',
    'exists'               => 'مقدار انتخاب شده نامعتبر است.',
    'file'                 => 'باید یک فایل باشد.',
    'filled'               => 'این فیلد الزامی است.',
    'gt'                   => [
        'array'   => 'باید بیشتر از :value آیتم داشته باشد.',
        'file'    => 'باید بزرگتر از :value کیلوبایت باشد.',
        'numeric' => 'باید بزرگتر از :value باشد.',
        'string'  => 'باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte'                  => [
        'array'   => 'باید حداقل :value آیتم داشته باشد.',
        'file'    => 'باید حداقل :value کیلوبایت باشد.',
        'numeric' => 'باید بزرگتر یا برابر با :value باشد.',
        'string'  => 'باید حداقل :value کاراکتر باشد.',
    ],
    'image'                => 'باید یک تصویر باشد.',
    'in'                   => 'مقدار انتخاب شده نامعتبر است.',
    'in_array'             => 'در :other وجود ندارد.',
    'integer'              => 'باید یک عدد صحیح باشد.',
    'ip'                   => 'باید یک آدرس IP معتبر باشد.',
    'ipv4'                 => 'باید یک آدرس IPv4 معتبر باشد.',
    'ipv6'                 => 'باید یک آدرس IPv6 معتبر باشد.',
    'json'                 => 'باید یک رشته JSON معتبر باشد.',
    'lt'                   => [
        'array'   => 'باید کمتر از :value آیتم داشته باشد.',
        'file'    => 'باید کمتر از :value کیلوبایت باشد.',
        'numeric' => 'باید کمتر از :value باشد.',
        'string'  => 'باید کمتر از :value کاراکتر باشد.',
    ],
    'lte'                  => [
        'array'   => 'نباید بیشتر از :value آیتم داشته باشد.',
        'file'    => 'نباید بیشتر از :value کیلوبایت باشد.',
        'numeric' => 'باید کمتر یا برابر با :value باشد.',
        'string'  => 'نباید بیشتر از :value کاراکتر باشد.',
    ],
    'max'                  => [
        'array'   => 'نباید بیشتر از :max آیتم داشته باشد.',
        'file'    => 'نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'نباید بیشتر از :max باشد.',
        'string'  => 'نباید بیشتر از :max کاراکتر باشد.',
    ],
    'mimes'                => 'باید یک فایل از نوع: :values باشد.',
    'mimetypes'            => 'باید یک فایل از نوع: :values باشد.',
    'min'                  => [
        'array'   => 'باید حداقل :min آیتم داشته باشد.',
        'file'    => 'باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'باید حداقل :min باشد.',
        'string'  => 'باید حداقل :min کاراکتر باشد.',
    ],
    'multiple_of'          => 'باید مضربی از :value باشد.',
    'not_in'               => 'مقدار انتخاب شده نامعتبر است.',
    'not_regex'            => 'فرمت نامعتبر است.',
    'numeric'              => 'باید یک عدد باشد.',
    'password'             => 'رمز عبور نادرست است.',
    'present'              => 'باید موجود باشد.',
    'prohibited'           => 'این فیلد ممنوع است.',
    'prohibited_if'        => 'این فیلد ممنوع است وقتی :other برابر :value باشد.',
    'prohibited_unless'    => 'این فیلد ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits'            => 'این فیلد حضور :other را ممنوع می‌کند.',
    'regex'                => 'فرمت نامعتبر است.',
    'relatable'            => 'ممکن است با این منبع مرتبط نباشد.',
    'required'             => 'این فیلد الزامی است.',
    'required_if'          => 'این فیلد الزامی است وقتی :other برابر :value باشد.',
    'required_unless'      => 'این فیلد الزامی است مگر اینکه :other در :values باشد.',
    'required_with'        => 'این فیلد الزامی است وقتی :values موجود باشد.',
    'required_with_all'    => 'این فیلد الزامی است وقتی :values موجود باشد.',
    'required_without'     => 'این فیلد الزامی است وقتی :values موجود نباشد.',
    'required_without_all' => 'این فیلد الزامی است وقتی هیچ یک از :values موجود نباشد.',
    'same'                 => 'باید مطابقت داشته باشد با :other.',
    'size'                 => [
        'array'   => 'باید شامل :size آیتم باشد.',
        'file'    => 'باید :size کیلوبایت باشد.',
        'numeric' => 'باید برابر با :size باشد.',
        'string'  => 'باید شامل :size کاراکتر باشد.',
    ],
    'starts_with'          => 'باید با یکی از مقادیر زیر شروع شود: :values',
    'string'               => 'باید یک رشته باشد.',
    'timezone'             => 'باید یک منطقه زمانی معتبر باشد.',
    'unique'               => 'قبلاً استفاده شده است.',
    'uploaded'             => 'بارگذاری با شکست مواجه شد.',
    'url'                  => 'فرمت نامعتبر است.',
    'uuid'                 => 'باید یک UUID معتبر باشد.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'پیام سفارشی',
        ],
    ],
];

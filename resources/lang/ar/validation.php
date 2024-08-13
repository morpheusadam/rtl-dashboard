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
    'accepted'             => 'باید :attribute پذیرفته شود.',
    'accepted_if'          => ':attribute باید پذیرفته شود وقتی :other برابر :value باشد.',
    'active_url'           => ':attribute یک URL معتبر نیست.',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => ':attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha'                => ':attribute فقط باید شامل حروف باشد.',
    'alpha_dash'           => ':attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num'            => ':attribute فقط باید شامل حروف و اعداد باشد.',
    'array'                => ':attribute باید یک آرایه باشد.',
    'attached'             => ':attribute قبلاً پیوست شده است.',
    'before'               => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal'      => ':attribute باید تاریخی قبل یا برابر با :date باشد.',
    'between'              => [
        'array'   => ':attribute باید بین :min و :max آیتم داشته باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean'              => 'فیلد :attribute باید صحیح یا غلط باشد.',
    'confirmed'            => 'تأییدیه :attribute مطابقت ندارد.',
    'current_password'     => 'رمز عبور نادرست است.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_equals'          => ':attribute باید تاریخی برابر با :date باشد.',
    'date_format'          => ':attribute با فرمت :format مطابقت ندارد.',
    'different'            => ':attribute و :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions'           => ':attribute ابعاد تصویر نامعتبر دارد.',
    'distinct'             => ':attribute مقدار تکراری دارد.',
    'email'                => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with'            => ':attribute باید با یکی از مقادیر زیر خاتمه یابد: :values',
    'exists'               => ':attribute انتخاب شده نامعتبر است.',
    'file'                 => ':attribute باید یک فایل باشد.',
    'filled'               => 'فیلد :attribute باید مقدار داشته باشد.',
    'gt'                   => [
        'array'   => ':attribute باید بیشتر از :value آیتم داشته باشد.',
        'file'    => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'string'  => ':attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte'                  => [
        'array'   => ':attribute باید حداقل :value آیتم داشته باشد.',
        'file'    => ':attribute باید حداقل :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر یا برابر با :value باشد.',
        'string'  => ':attribute باید حداقل :value کاراکتر باشد.',
    ],
    'image'                => ':attribute باید یک تصویر باشد.',
    'in'                   => ':attribute انتخاب شده نامعتبر است.',
    'in_array'             => ':attribute در :other وجود ندارد.',
    'integer'              => ':attribute باید یک عدد صحیح باشد.',
    'ip'                   => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4'                 => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6'                 => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json'                 => ':attribute باید یک رشته JSON معتبر باشد.',
    'lt'                   => [
        'array'   => ':attribute باید کمتر از :value آیتم داشته باشد.',
        'file'    => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'string'  => ':attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte'                  => [
        'array'   => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file'    => ':attribute نباید بیشتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر یا برابر با :value باشد.',
        'string'  => ':attribute نباید بیشتر از :value کاراکتر باشد.',
    ],
    'max'                  => [
        'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file'    => ':attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => ':attribute نباید بیشتر از :max باشد.',
        'string'  => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'mimes'                => ':attribute باید یک فایل از نوع: :values باشد.',
    'mimetypes'            => ':attribute باید یک فایل از نوع: :values باشد.',
    'min'                  => [
        'array'   => ':attribute باید حداقل :min آیتم داشته باشد.',
        'file'    => ':attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => ':attribute باید حداقل :min باشد.',
        'string'  => ':attribute باید حداقل :min کاراکتر باشد.',
    ],
    'multiple_of'          => ':attribute باید مضربی از :value باشد.',
    'not_in'               => ':attribute انتخاب شده نامعتبر است.',
    'not_regex'            => 'فرمت :attribute نامعتبر است.',
    'numeric'              => ':attribute باید یک عدد باشد.',
    'password'             => 'رمز عبور نادرست است.',
    'present'              => 'فیلد :attribute باید موجود باشد.',
    'prohibited'           => 'فیلد :attribute ممنوع است.',
    'prohibited_if'        => 'فیلد :attribute ممنوع است وقتی :other برابر :value باشد.',
    'prohibited_unless'    => 'فیلد :attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits'            => 'فیلد :attribute حضور :other را ممنوع می‌کند.',
    'regex'                => 'فرمت :attribute نامعتبر است.',
    'relatable'            => ':attribute ممکن است با این منبع مرتبط نباشد.',
    'required'             => 'فیلد :attribute الزامی است.',
    'required_if'          => 'فیلد :attribute الزامی است وقتی :other برابر :value باشد.',
    'required_unless'      => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with'        => 'فیلد :attribute الزامی است وقتی :values موجود باشد.',
    'required_with_all'    => 'فیلد :attribute الزامی است وقتی :values موجود باشد.',
    'required_without'     => 'فیلد :attribute الزامی است وقتی :values موجود نباشد.',
    'required_without_all' => 'فیلد :attribute الزامی است وقتی هیچ یک از :values موجود نباشد.',
    'same'                 => ':attribute و :other باید مطابقت داشته باشند.',
    'size'                 => [
        'array'   => ':attribute باید شامل :size آیتم باشد.',
        'file'    => ':attribute باید :size کیلوبایت باشد.',
        'numeric' => ':attribute باید برابر با :size باشد.',
        'string'  => ':attribute باید شامل :size کاراکتر باشد.',
    ],
    'starts_with'          => ':attribute باید با یکی از مقادیر زیر شروع شود: :values',
    'string'               => ':attribute باید یک رشته باشد.',
    'timezone'             => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique'               => ':attribute قبلاً استفاده شده است.',
    'uploaded'             => 'بارگذاری :attribute با شکست مواجه شد.',
    'url'                  => 'فرمت :attribute نامعتبر است.',
    'uuid'                 => ':attribute باید یک UUID معتبر باشد.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'پیام سفارشی',
        ],
    ],
];
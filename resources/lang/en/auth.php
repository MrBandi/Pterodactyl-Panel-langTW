<?php

return [
    'sign_in' => '登入',
    'go_to_login' => '前往登入',
    'failed' => '找不到符合這些資訊的帳戶。',

    'forgot_password' => [
        'label' => '忘記密碼？',
        'label_help' => '輸入您的帳戶電子郵件來接收有關重設密碼的說明。',
        'button' => '恢復帳戶',
    ],

    'reset_password' => [
        'button' => '重置並登入',
    ],

    'two_factor' => [
        'label' => '雙重驗證碼',
        'label_help' => '該帳戶需要第二層身份驗證(2FA)才能繼續。請輸入您的裝置產生的代碼來完成登入。',
        'checkpoint_failed' => '雙重身分驗證碼無效。',
    ],

    'throttle' => '嘗試登入次數過多。請等待 :seconds 秒後再重試一次。',
    'password_requirements' => '密碼長度必須至少為 8 個字符，並且對於本面板來說是唯一的。',
    '2fa_must_be_enabled' => '管理員要求您的帳戶啟用雙重身分認證(2FA)，才能使用面板。',
];

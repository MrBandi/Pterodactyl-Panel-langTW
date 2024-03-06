<?php

return [
    'location' => [
        'no_location_found' => '無法找到與所提供的短代碼相符的記錄。',
        'ask_short' => '位置短代碼',
        'ask_long' => '位置描述',
        'created' => '成功創建新的位置 (:name) ，ID 為 :id 。',
        'deleted' => '成功刪除請求的位置。',
    ],
    'user' => [
        'search_users' => '輸入使用者名稱、使用者 ID 或電子郵件地址',
        'select_search_user' => '要刪除的用戶ID（輸入 "0" 重新搜尋）',
        'deleted' => '用戶已成功從面板中刪除。',
        'confirm_delete' => '您確定要從面板中刪除該使用者嗎？',
        'no_users_found' => '未找到所提供的搜尋字詞的使用者。',
        'multiple_found' => '為所提供的使用者找到了多個帳戶，由於 --no-interaction 標誌而無法刪除使用者。',
        'ask_admin' => '該用戶是管理員嗎？',
        'ask_email' => '電子郵件地址',
        'ask_username' => '使用者名稱',
        'ask_name_first' => '名字',
        'ask_name_last' => '姓氏',
        'ask_password' => '密碼',
        'ask_password_tip' => '如果您想建立帳戶，並使用透過電子郵件傳送給使用者的隨機密碼，請重新執行此命令 (CTRL+C) 並傳遞 `--no-password` 標誌。',
        'ask_password_help' => '密碼長度必須至少為 8 個字符，並且至少包含 1 個大寫字母和數字。',
        '2fa_help_text' => [
            '此命令將停用使用者帳戶的雙重認證（如果已啟用）。只有當使用者的帳戶被鎖定時，才應將其用作帳戶恢復命令。',
            '如果這不是您想要執行的操作，請按 CTRL+C 退出此程序。',
        ],
        '2fa_disabled' => '已為 :email 禁用 2 因素驗證已停用。',
    ],
    'schedule' => [
        'output_line' => '正在調度 `:schedule` (:hash) 中的第一個任務。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '正在刪除服務備份文件：file。',
    ],
    'server' => [
        'rebuild_failed' => '在節點 ":node" 上重建 ":name" (#:id) 的請求失敗，錯誤訊息為: :message',
        'reinstall' => [
            'failed' => '在節點 ":node" 上重新安裝 ":name"(#:id) 的請求失敗，錯誤訊息: :message',
            'confirm' => '您將針對一組伺服器重新安裝。你想繼續嗎？',
        ],
        'power' => [
            'confirm' => '你將對 :count 台服務器執行 :action。 您是否要繼續?',
            'action_failed' => '在節點 ":node" 上的 ":name" (#:id) 的電源操作失敗，錯誤訊息為: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主機（例如 smtp.gmail.com）',
            'ask_smtp_port' => 'SMTP 連接埠',
            'ask_smtp_username' => 'SMTP 使用者名稱',
            'ask_smtp_password' => 'SMTP 密碼',
            'ask_mailgun_domain' => 'Mailgun 域',
            'ask_mailgun_endpoint' => 'Mailgun 端點',
            'ask_mailgun_secret' => 'Mailgun 密鑰',
            'ask_mandrill_secret' => 'Mandrill 密鑰',
            'ask_postmark_username' => 'Postmark API 密鑰',
            'ask_driver' => '發送電子郵件時應使用哪個驅動程式？',
            'ask_mail_from' => '電子郵件地址的發件人',
            'ask_mail_name' => '電子郵件應顯示的名稱',
            'ask_encryption' => '要使用的加密方法',
        ],
    ],
];

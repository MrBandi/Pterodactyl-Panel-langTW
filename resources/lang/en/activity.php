<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => '登入失敗',
        'success' => '登入',
        'password-reset' => '重新設密碼',
        'reset-password' => '請求重設密碼',
        'checkpoint' => '請求雙重認證',
        'recovery-token' => '使用雙重驗證恢復代碼',
        'token' => '解決雙重因素要求',
        'ip-blocked' => '封鎖來自未列出的 IP 位址的請求，標識 :identifier',
        'sftp' => [
            'fail' => 'SFTP 登入失敗',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '更改的電子郵件從 :old 變更為 :new',
            'password-changed' => '變更密碼',
        ],
        'api-key' => [
            'create' => '創建了新的 API 金鑰 :identifier',
            'delete' => '刪除了 API 金鑰 :identifier',
        ],
        'ssh-key' => [
            'create' => '新增 SSH 金鑰 :fingerprint 至帳戶中',
            'delete' => '從帳戶中刪除 SSH 金鑰 :fingerprint',
        ],
        'two-factor' => [
            'create' => '啟用雙重認證',
            'delete' => '停用雙重認證',
        ],
    ],
    'server' => [
        'reinstall' => '重新安裝伺服器',
        'console' => [
            'command' => '在伺服器上執行 ":command"',
        ],
        'power' => [
            'start' => '啟動伺服器',
            'stop' => '停止伺服器',
            'restart' => '重啟伺服器',
            'kill' => '終止伺服器進程',
        ],
        'backup' => [
            'download' => '下載 :name 備份',
            'delete' => '刪除 :name 備份',
            'restore' => '還原 :name 備份（刪除的檔案: :truncate)',
            'restore-complete' => '完成還原 :name 備份',
            'restore-failed' => '無法完成還原 :name 備份',
            'start' => '開始新的備份 :name',
            'complete' => '標記 :name 備份完成',
            'fail' => '標記 :name 備份失敗',
            'lock' => '鎖定 :name 備份',
            'unlock' => '解鎖 :name 備份',
        ],
        'database' => [
            'create' => '創建新資料庫 :name',
            'rotate-password' => '為資料庫 :name 輪換密碼',
            'delete' => '刪除資料庫 :name',
        ],
        'file' => [
            'compress_one' => '壓縮 :directory:file',
            'compress_other' => '在 :directory 壓縮 :count 個檔案',
            'read' => '檢視 :file 內容',
            'copy' => '創建 :file 的副本',
            'create-directory' => '創建目錄 :directory:name',
            'decompress' => '在 :directory 中解壓縮 :files',
            'delete_one' => '刪除 :directory:files.0',
            'delete_other' => '在 :directory 中刪除 :count 個檔案',
            'download' => '下載 :file',
            'pull' => '從 :url 下載遠端檔案到 :directory',
            'rename_one' => '將 :directory:files.0.from 重新命名 :directory:files.0.to',
            'rename_other' => '在 :directory 中重新命名或移動 :count 個檔案',
            'write' => '將寫入新內容 :file',
            'upload' => '開始上傳檔案',
            'uploaded' => '上傳 :directory:file',
        ],
        'sftp' => [
            'denied' => '由於權限問題，阻止存取 SFTP',
            'create_one' => '創建 :files.0',
            'create_other' => '創建 :count 個新檔案',
            'write_one' => '修改 :files.0 內容',
            'write_other' => '修改 :count 個檔案的內容',
            'delete_one' => '刪除 :files.0',
            'delete_other' => '刪除 :count 個檔案',
            'create-directory_one' => '創建 :files.0 目錄',
            'create-directory_other' => '創建 :count 個目錄',
            'rename_one' => '將 :files.0.from 重新命名為 :files.0.to',
            'rename_other' => '重新命名或移動 :count 個檔案',
        ],
        'allocation' => [
            'create' => '將 :allocation 新增至伺服器',
            'notes' => '將 :allocation 的註釋從 ":old" 更新為 ":new"',
            'primary' => '將 :allocation 設為主要伺服器分配',
            'delete' => '刪除 :allocation 分配',
        ],
        'schedule' => [
            'create' => '創建 :name 排程',
            'update' => '更新 :name 排程',
            'execute' => '手動執行 :name 行程',
            'delete' => '刪除 :name 行程',
        ],
        'task' => [
            'create' => '創建新的 ":action" 任務給 :name 排程',
            'update' => '更新 ":action" 任務給 :name 排程',
            'delete' => '刪除 :name 排程中的任務',
        ],
        'settings' => [
            'rename' => '將伺服器從 :old 重新命名為 :new',
            'description' => '將伺服器描述從 :old 修改為 :new',
        ],
        'startup' => [
            'edit' => '將 :variable 變數從 ":old" 變更為 ":new"',
            'image' => '將更新了伺服器的 Docker 映像從 :old 更新為 :new',
        ],
        'subuser' => [
            'create' => '將 :email 新增為子使用者',
            'update' => '更新 :email 的子用戶權限',
            'delete' => '將 :email 從子使用者名單中移除',
        ],
    ],
];

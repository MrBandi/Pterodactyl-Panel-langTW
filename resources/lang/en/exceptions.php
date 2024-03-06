<?php

return [
    'daemon_connection_failed' => '在嘗試與Daemon通訊時出現異常，導致 HTTP/:code 響應代碼。該異常已被記錄。',
    'node' => [
        'servers_attached' => '刪除節點前，必須先取消連結到它的伺服器。',
        'daemon_off_config_updated' => '守護程式配置 <strong>已更新</strong>, 但在嘗試自動更新Daemon上的設定文件（config.yml）時遇到錯誤。您需要手動更新Daemon的設定檔 (config.yml) 來套用這些變更。',
    ],
    'allocations' => [
        'server_using' => '目前已有伺服器指派給此分配上。只有在未分配伺服器時才能刪除分配。',
        'too_many_ports' => '不支持在單一範圍內一次新增超過 1000 個連接埠。',
        'invalid_mapping' => '提供給 :port 的映射無效且無法處理。',
        'cidr_out_of_range' => 'CIDR 表示法僅允許掩碼介於 /25 和 /32 之間。',
        'port_out_of_range' => '分配中的連接埠必須大於 1024 且小於或等於 65535。',
    ],
    'nest' => [
        'delete_has_servers' => '無法從控制面板中刪除已連接到有活動伺服器的 Nest。',
        'egg' => [
            'delete_has_servers' => '無法從面板中刪除已連接到有活動伺服器的 Egg。',
            'invalid_copy_id' => '用於複製腳本的 Egg 不存在，或是正在複製腳本本身。',
            'must_be_child' => '該 Egg 的 "從中複製設置" 指令必須是所選 Nest 的子選項。',
            'has_children' => '該 Egg 是一個或多個其他 Egg 的父 Egg。請先刪除那些 Egg，然後再刪除此Egg。',
        ],
        'variables' => [
            'env_not_unique' => '環境變數 :name 必須在此 Egg 中唯一。',
            'reserved_name' => '環境變數 :name 受保護，不能指派給變數。',
            'bad_validation_rule' => '":rule" 驗證規則對此應用程式無效。',
        ],
        'importer' => [
            'json_error' => '嘗試解析 JSON 檔案時出錯：:error。',
            'file_error' => '提供的 JSON 檔案無效。',
            'invalid_json_provided' => '提供的 JSON 檔案不是可識別的格式。',
        ],
    ],
    'subusers' => [
        'editing_self' => '不允許編輯自己的子使用者帳戶。',
        'user_is_owner' => '您無法將伺服器擁有者新增為該伺服器的子使用者。',
        'subuser_exists' => '具有該電子郵件地址的使用者已被指定為此伺服器的子用戶。',
    ],
    'databases' => [
        'delete_has_databases' => '無法刪除已連接到有活動資料庫的資料庫主機伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連鎖任務的最大間隔時間為 15 分鐘。',
    ],
    'locations' => [
        'has_nodes' => '無法刪除已連接有活動節點的位置。',
    ],
    'users' => [
        'node_revocation_failed' => '無法在 <a href=":link">節點 #:node</a> 上策消金鑰。 :error',
    ],
    'deployment' => [
        'no_viable_nodes' => '未找到滿足自動部署要求的節點。',
        'no_viable_allocations' => '找不到滿足自動部署要求的分配。',
    ],
    'api' => [
        'resource_not_found' => '在此伺服器上找不到請求的資源。',
    ],
];

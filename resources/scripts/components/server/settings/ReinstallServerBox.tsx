import React, { useEffect, useState } from 'react';
import { ServerContext } from '@/state/server';
import TitledGreyBox from '@/components/elements/TitledGreyBox';
import reinstallServer from '@/api/server/reinstallServer';
import { Actions, useStoreActions } from 'easy-peasy';
import { ApplicationStore } from '@/state';
import { httpErrorToHuman } from '@/api/http';
import tw from 'twin.macro';
import { Button } from '@/components/elements/button/index';
import { Dialog } from '@/components/elements/dialog';

export default () => {
    const uuid = ServerContext.useStoreState((state) => state.server.data!.uuid);
    const [modalVisible, setModalVisible] = useState(false);
    const { addFlash, clearFlashes } = useStoreActions((actions: Actions<ApplicationStore>) => actions.flashes);

    const reinstall = () => {
        clearFlashes('settings');
        reinstallServer(uuid)
            .then(() => {
                addFlash({
                    key: 'settings',
                    type: 'success',
                    message: '您的伺服器已開始重新安裝程序。',
                });
            })
            .catch((error) => {
                console.error(error);

                addFlash({ key: 'settings', type: 'error', message: httpErrorToHuman(error) });
            })
            .then(() => setModalVisible(false));
    };

    useEffect(() => {
        clearFlashes();
    }, []);

    return (
        <TitledGreyBox title={'重新安裝伺服器'} css={tw`relative`}>
            <Dialog.Confirm
                open={modalVisible}
                title={'確認是否要重新安裝伺服器？'}
                confirm={'是的，重新安裝伺服器'}
                onClose={() => setModalVisible(false)}
                onConfirmed={reinstall}
            >
                在此過程中您的伺服器將被停止，並且某些檔案可能會被刪除或修改，您確定嗎你想繼續嗎？
            </Dialog.Confirm>
            <p css={tw`text-sm`}>
                重新安裝伺服器將停止它，然後重新執行最初設定它的安裝腳本向上。&nbsp;
                <strong css={tw`font-medium`}>
                    在此過程中可能會刪除或修改部分文件，請先備份數據繼續。
                </strong>
            </p>
            <div css={tw`mt-6 text-right`}>
                <Button.Danger variant={Button.Variants.Secondary} onClick={() => setModalVisible(true)}>
                    重新安裝
                </Button.Danger>
            </div>
        </TitledGreyBox>
    );
};

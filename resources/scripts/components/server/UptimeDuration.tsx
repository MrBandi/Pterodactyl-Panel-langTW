import React from 'react';

export default ({ uptime }: { uptime: number }) => {
    const days = Math.floor(uptime / (24 * 60 * 60));
    const hours = Math.floor((Math.floor(uptime) / 60 / 60) % 24);
    const remainder = Math.floor(uptime - hours * 60 * 60);
    const minutes = Math.floor((remainder / 60) % 60);
    const seconds = remainder % 60;

    if (days > 0) {
        return (
            <>
                {days} 日 {hours} 時 {minutes} 分
            </>
        );
    }

    if (hours > 0) {
        <>
            {hours} 時 {minutes} 分 {seconds} 秒
        </>
    }

    return (
        <>
            {minutes} 分 {seconds} 秒
        </>
    );
};

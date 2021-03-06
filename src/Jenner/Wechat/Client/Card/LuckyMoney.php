<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 14-12-16
 * Time: 下午3:24
 */

namespace Jenner\Wechat\Client\Card;


use Jenner\Wechat\Config\URI;

class LuckyMoney extends AbstractCard
{
    /**
     * 更新红包金额
     * @param $card
     * @return bool|mixed
     */
    public function updateUserBalance($card)
    {
        $uri = $this->card_uri_prefix . URI::CARD_LUCKY_MONEY_UPDATE_USER_BALANCE;
        return $this->request_post($uri, $card);
    }
} 
<?php
declare(strict_types=1);
namespace GiocoPlus\WE\Contract;

interface WEServiceInterface
{
    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $vendor_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @return mixed
     */
    function gameLaunch(string $op_code, string $vendor_code, string $account, string $game_code, string $language);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @param string $vendor_code
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id, string $vendor_code, string $language, string $odd_type);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $player_name
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $player_name);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);

}
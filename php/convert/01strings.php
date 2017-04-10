<?php
/**
 * 01文字列をテキストに変換するサンプル
 */

function convert (string $string) :string {
    $length = 8;
    // 01文字列の形式チェック
    if (strlen($string) % $length > 0) {
        throw new Exception('01文字列の形式が不正です');
    }

    $converted = '';
    while (strlen($string) > 0) {
        $from = substr($string, 0, 8);

        // 変換対象文字を切り取り
        $string = substr($string, strlen($from));
        // 2進数から10進数に変換
        $to = bindec($from);

        // asciiから文字列取得
        $converted .= chr($to);
    }

    return $converted;
}

$string = '011010010010000000111101001000000101001101010100010001000100100101001110001011100110011001101001011100100111001101110100001011100111010001101111010111110110100100001010011100000111010101110100011100110010100000100010111100001001111110001101100101100010001000101001001000000110100101100110001000000110100100100000001111010011110100100000001100000000101001110000011101010111010001110011001010000010001011110000100111111001010010100101001000100010100100100000011010010110011000100000011010010010000000111101001111010010000000110001';

echo convert($string);
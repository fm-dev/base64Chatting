<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enkripsi extends Controller
{
    //
    public function textToBase64($text) {
        $asciiValues = [];
        
        // Mengonversi setiap karakter dalam teks ke nilai ASCII
        for ($i = 0; $i < strlen($text); $i++) {
            $asciiValues[] = ord($text[$i]);
        }
    
        // Mengonversi nilai ASCII ke representasi biner 8-bit
        $binaryStrings = [];
        foreach ($asciiValues as $asciiValue) {
            $binaryStrings[] = str_pad(decbin($asciiValue), 8, '0', STR_PAD_LEFT);
        }
    
        // Menggabungkan bit 6-bit
        $mergedBinary = implode('', $binaryStrings);
        $mergedBinary = str_pad($mergedBinary, ceil(strlen($mergedBinary) / 6) * 6, '0', STR_PAD_RIGHT);
    
        // Mengonversi ke desimal
        $decimalValues = [];
        for ($i = 0; $i < strlen($mergedBinary); $i += 6) {
            $decimalValues[] = bindec(substr($mergedBinary, $i, 6));
        }
    
        // Mengonversi ke basis 64
        $base64Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $base64String = '';
        foreach ($decimalValues as $decimalValue) {
            $base64String .= $base64Chars[$decimalValue];
        }
    
        return $base64String;
    }
}

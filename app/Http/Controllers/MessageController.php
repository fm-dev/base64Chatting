<?php

namespace App\Http\Controllers;

use App\Models\pesanChatting;
use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class MessageController extends Controller
{
   
    //
    public function __construct(){
        session_start();
    }
    public function index()
    {
        function base64ToText($base64String) {
            $base64Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
            
            // Mengonversi karakter basis 64 ke nilai desimal
            $decimalValues = [];
            for ($i = 0; $i < strlen($base64String); $i++) {
                $decimalValues[] = strpos($base64Chars, $base64String[$i]);
            }
        
            // Mengonversi nilai desimal ke representasi biner 6-bit
            $binaryStrings = [];
            foreach ($decimalValues as $decimalValue) {
                $binaryStrings[] = str_pad(decbin($decimalValue), 6, '0', STR_PAD_LEFT);
            }
        
            // Menggabungkan bit 6-bit
            $mergedBinary = implode('', $binaryStrings);
        
            // Mengonversi ke representasi biner 8-bit
            $binaryChunks = str_split($mergedBinary, 8);
        
            // Mengonversi representasi biner 8-bit ke nilai ASCII
            $asciiValues = [];
            foreach ($binaryChunks as $binaryChunk) {
                $asciiValues[] = bindec($binaryChunk);
            }
        
            // Mengonversi nilai ASCII ke teks
            $text = '';
            foreach ($asciiValues as $asciiValue) {
                $text .= chr($asciiValue);
            }
        
            return $text;
        }
        $messages = pesanChatting::with('sender')->get();
        foreach ($messages as $message) {
            $message->pesan = base64ToText($message->pesan);
        }
        return response()->json($messages,200);
    }
    public function registrasiPengguna(Request $request){
        function textToBase64($text) {
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
        $nama = $request->input('nama');
        $password = textToBase64($request->input('password'));
        $pengguna = new pengguna();
        $pengguna->nama = $nama;
        $pengguna->password= $password;
        $pengguna->save();
        $pengguna->refresh();
        return response()->json($pengguna, 201);
    }
    public function login (Request $request){
        function textToBase64($text) {
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
        $nama = $request->input('nama');
        $password = textToBase64($request->input('password'));
        $pengguna = pengguna::where('nama',$nama)->where('password',$password)->first();
        if($pengguna){
            // $value = session(['id_penggun' => $pengguna->id]);
            // Session::put('id_pengguna', "testimg");

            // Mengatur nilai sesi
            $_SESSION['key'] = $pengguna->id;
            $_SESSION['nama'] = $pengguna->nama;
            $data = [
                'data' => $pengguna,
                'status' => "200"
            ];
            return response()->json($data, 200);
        }
        else{
            $data = [
                'data' => $pengguna,
                'status' => "404"
            ];
            return response()->json($data, 404);
        }
    }
    public function storePesan(Request $request){
        function textToBase64($text) {
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
        $id_pengguna = $request->input('pengguna_id');
        $pesan = textToBase64($request ->input('pesan'));
        $pengguna = new pesanChatting();
        $pengguna->pengguna_id = $id_pengguna;
        $pengguna->pesan = $pesan;
        $pengguna->save();
        $pengguna->refresh();
        $data = [
            'data' => $pengguna,
            'status' => '200'
        ];
        return response()->json($data, 201);
    }
    public function enkripsiText(Request $request){
        function textToBase64($text) {
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
        $text = textToBase64($request->input('text'));
        $data = [
            'text' => $text,
            'status' => 'berhasil'
        ];
        return response()->json($data,200);
    }
    public function dekripsiText(Request $request){
        function base64ToText($base64String) {
            $base64Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
            
            // Mengonversi karakter basis 64 ke nilai desimal
            $decimalValues = [];
            for ($i = 0; $i < strlen($base64String); $i++) {
                $decimalValues[] = strpos($base64Chars, $base64String[$i]);
            }
        
            // Mengonversi nilai desimal ke representasi biner 6-bit
            $binaryStrings = [];
            foreach ($decimalValues as $decimalValue) {
                $binaryStrings[] = str_pad(decbin($decimalValue), 6, '0', STR_PAD_LEFT);
            }
        
            // Menggabungkan bit 6-bit
            $mergedBinary = implode('', $binaryStrings);
        
            // Mengonversi ke representasi biner 8-bit
            $binaryChunks = str_split($mergedBinary, 8);
        
            // Mengonversi representasi biner 8-bit ke nilai ASCII
            $asciiValues = [];
            foreach ($binaryChunks as $binaryChunk) {
                $asciiValues[] = bindec($binaryChunk);
            }
        
            // Mengonversi nilai ASCII ke teks
            $text = '';
            foreach ($asciiValues as $asciiValue) {
                $text .= chr($asciiValue);
            }
        
            return $text;
        }
        $text = base64ToText($request->input('text'));
        $data = [
            'text' => $text,
            'status' => 'berhasil'
        ];
        return response()->json($data,200);
    }
    public function Dashboard(Request $request ){

        // Mendapatkan nilai sesi
        $value = $_SESSION['key'];
        
        if($value != null){
            $data['data_pengguna'] = pengguna::all();
            return view('/page/dashboard',$data);
        }else{
            return redirect('/');
        }
    }
}

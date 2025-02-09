<?php

namespace App\Http\Controllers\DeepSeek;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;

class DetectContentSaraController extends Controller
{
    public function index($id)
    {
        try {

            $client = new Client();
            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . env("API_KEY_DEEPSEEK")
            ];

            $artikel = Artikel::find($id);

            $plainText = strip_tags($artikel->content);
            // dd($plainText);
            $body = [
                "messages" => [
                    [
                        "content" => "Apakah teks berikut mengandung konten kata kasar, kebencian atau SARA (Suku, Agama, Ras, dan Antar golongan) ? Berikan jawaban ya atau tidak. response yang kamu berikan ya atau tidak saja jangan ada penjelasan.",
                        "role" => "system"
                    ],
                    [
                        "content" => $plainText,
                        "role" => "user"
                    ],
                ],
                "model" => "qwen/qwen-2-7b-instruct:free",
            ];

            $response = $client->post("https://openrouter.ai/api/v1/chat/completions", [
                "headers" => $headers,
                "json" => $body
            ]);

            $result = json_decode($response->getBody());

            $is_success = isset($result->choices[0]->message->content) ? true : false;

            return [
                'success' => $is_success,
                'is_sara' => strtoupper($result->choices[0]->message->content) ?? null,
                "result" => $result
            ];
        } catch (BadResponseException $e) {
            $errorBody = $e->getResponse()->getBody()->getContents();

            return [
                'success' => false,
                'is_sara' => null,
                "message" => $errorBody
            ];
        }
    }
}

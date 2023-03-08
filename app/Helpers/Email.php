<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Email
{
    public static function send($subject, $content, $recipent, $reply): array
    {
        $account = env('EMAIL_API_ACCOUNT');
        $password = env('EMAIL_API_PASSWORD');
        $email_api_endpoint = 'http://120.105.144.15/~api/mail/sendmail.php';

        $recipent = json_encode(array($recipent));

        $response = Http::post($email_api_endpoint, [
            'subject' => $subject,
            'content' => $content,
            'recipent' => $recipent,
            'account' => $account,
            'password' => $password,
            'reply' => $reply,
        ]);

        return $response->json();
    }
}

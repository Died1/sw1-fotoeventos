<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait NotificationTrait
{
    /**
     * Este método envia notificacion usando servicio de firebase messaging
     *@param string $token required
     *@param string $title
     *@param string $body
     *@param string $icon
     */
    public function sendNotification($token, $title = '', $body = '', $icon = 'https://salgadoeventos.com/wp-content/uploads/2021/04/MG_4393-1536x1024.jpg.webp', $link = 'evento/ver/2')
    {
        $Http = new Client();
        $response = $Http->post('https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => 'key=' . env('FIREBASE_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' =>  [
                'to' => $token,
                'notification' => [
                    'title' => $title,
                    'body' => $body,
                    'icon' => $icon,
                    'click_action' => $link
                ],
            ],
        ]);
        return $response->getBody()->getContents();
    }

}

<?php

namespace App\Http\Controllers;
use Webklex\IMAP\Facades\Client;


class receiveController extends Controller

{
    public function index()
    {
        $client = Client::account('default');
        $client->connect();


        $folders = $client->getFolders();
        $emails = [];

        foreach ($folders as $folder) {
            $messages = $folder->messages()->get();
            foreach ($messages as $message) {
                $emails[] = [
                    'subject' => $message->getSubject(),
                    'from' => $message->getFrom()[0]->mail,
                    'date' => $message->getDate(),
                    'body' => $message->getTextBody(),
                ];
            }
        }

        return view('emails.index', compact('emails'));
    }
}


<?php
namespace App\Services;

use Appwrite\Client;
use Appwrite\Services\Databases;
use Appwrite\Services\Storage;

class AppwriteService {
    private $client;
    private $databases;
    private $storage;

    public function __construct() {
        $this->client = new Client();
        $this->client
            ->setEndpoint($_ENV['APPWRITE_ENDPOINT'])
            ->setProject($_ENV['APPWRITE_PROJECT_ID'])
            ->setKey($_ENV['APPWRITE_API_KEY']);

        $this->databases = new Databases($this->client);
        $this->storage = new Storage($this->client);
    }

    public function subscribeToDatabaseChanges($databaseId) {
        return $this->client->subscribe('databases.' . $databaseId . '.documents', function($response) {
            // Handle realtime updates
            error_log('Database update received: ' . json_encode($response));
        });
    }
}

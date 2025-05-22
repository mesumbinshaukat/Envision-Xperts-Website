<?php
namespace App\Utils;

class RateLimiter {
    private $redis = null;
    private $enabled = false;
    private $maxRequests = 60;
    private $timeWindow = 60;

    public function __construct() {
        $this->enabled = isset($_ENV['REDIS_ENABLED']) && $_ENV['REDIS_ENABLED'] === 'true';
        
        if ($this->enabled) {
            try {
                $this->redis = new \Redis();
                $host = $_ENV['REDIS_HOST'] ?? '127.0.0.1';
                $port = $_ENV['REDIS_PORT'] ?? 6379;
                $this->redis->connect($host, $port);
            } catch (\Exception $e) {
                error_log('Redis connection failed: ' . $e->getMessage());
                $this->enabled = false;
            }
        }
    }

    public function isAllowed($ip) {
        // If Redis is not enabled, always allow requests
        if (!$this->enabled || !$this->redis) {
            return true;
        }

        try {
            $key = 'rate_limit:' . $ip;
            $current = $this->redis->get($key);
            
            // First request
            if (!$current) {
                $this->redis->setex($key, $this->timeWindow, 1);
                return true;
            }
            
            // Rate limit exceeded
            if ($current >= $this->maxRequests) {
                return false;
            }
            
            // Increment counter and allow request
            $this->redis->incr($key);
            return true;
        } catch (\Exception $e) {
            error_log('Rate limiting error: ' . $e->getMessage());
            return true; // On error, allow request
        }
    }
}

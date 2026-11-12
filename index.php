<?php
// No Dockerfile: Wadiup detects index.php and serves it with Apache on PORT.
header('Content-Type: text/plain; charset=utf-8');
echo "Hello from Wadiup · PHP " . PHP_VERSION . " · " . gethostname() . "\n";

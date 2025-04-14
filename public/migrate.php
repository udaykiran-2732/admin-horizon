<?php

// Set a secret token to protect this file from unauthorized access
$secret_token = "horizon_setup_token";

// Check if the token is provided
if (!isset($_GET['token']) || $_GET['token'] !== $secret_token) {
    die("Unauthorized access");
}

// Load the Laravel application
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Handle different command actions
$action = isset($_GET['action']) ? $_GET['action'] : '';

echo "<h1>Laravel Setup Helper</h1>";
echo "<pre>";

switch ($action) {
    case 'migrate':
        echo "Running migrations...\n";
        $kernel->call('migrate', ['--force' => true]);
        echo "Migrations complete.\n";
        break;
    
    case 'storage-link':
        echo "Creating storage link...\n";
        $kernel->call('storage:link');
        echo "Storage link created.\n";
        break;
    
    case 'cache-clear':
        echo "Clearing cache...\n";
        $kernel->call('cache:clear');
        echo "Cache cleared.\n";
        break;
    
    case 'config-clear':
        echo "Clearing config cache...\n";
        $kernel->call('config:clear');
        echo "Config cache cleared.\n";
        break;
    
    case 'view-clear':
        echo "Clearing view cache...\n";
        $kernel->call('view:clear');
        echo "View cache cleared.\n";
        break;
    
    case 'key-generate':
        echo "Generating application key...\n";
        $kernel->call('key:generate', ['--force' => true]);
        echo "Application key generated.\n";
        break;
    
    case 'all':
        echo "Running all setup commands...\n\n";
        
        echo "Clearing cache...\n";
        $kernel->call('cache:clear');
        echo "Cache cleared.\n\n";
        
        echo "Clearing config cache...\n";
        $kernel->call('config:clear');
        echo "Config cache cleared.\n\n";
        
        echo "Clearing view cache...\n";
        $kernel->call('view:clear');
        echo "View cache cleared.\n\n";
        
        echo "Running migrations...\n";
        $kernel->call('migrate', ['--force' => true]);
        echo "Migrations complete.\n\n";
        
        echo "Creating storage link...\n";
        $kernel->call('storage:link');
        echo "Storage link created.\n\n";
        
        echo "Setup complete!\n";
        break;
    
    default:
        echo "Available actions:\n";
        echo "- <a href='?token=$secret_token&action=migrate'>Run migrations</a>\n";
        echo "- <a href='?token=$secret_token&action=storage-link'>Create storage link</a>\n";
        echo "- <a href='?token=$secret_token&action=cache-clear'>Clear cache</a>\n";
        echo "- <a href='?token=$secret_token&action=config-clear'>Clear config cache</a>\n";
        echo "- <a href='?token=$secret_token&action=view-clear'>Clear view cache</a>\n";
        echo "- <a href='?token=$secret_token&action=key-generate'>Generate application key</a>\n";
        echo "- <a href='?token=$secret_token&action=all'>Run all commands</a>\n";
}

echo "</pre>";
echo "<p><a href='?token=$secret_token'>Back to commands</a></p>";
echo "<p style='color:red;'><strong>IMPORTANT:</strong> Delete this file after setup is complete for security reasons!</p>";

// Terminate the application
$kernel->terminate(
    Illuminate\Http\Request::capture(),
    new Illuminate\Http\Response()
); 
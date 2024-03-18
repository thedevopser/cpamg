<?php

use Castor\Attribute\AsTask;

use function Castor\input;
use function Castor\io;
use function Castor\capture;
use function Castor\run;

#[AsTask(description: '🛠 Initialize New Symfony Project')]
function init(string $path, string $name, string $version): void
{
    io()->title('🛠️  Initializing Symfony Project...');
    $path = input()->getArgument('path');
    $name = input()->getArgument('name');
    $version = input()->getArgument('version');
    run('composer create-project symfony/skeleton ' . $name . ' ' . $version, path: $path);
    io()->success(sprintf('Symfony project %s has been created at %s.', $name, $path));
}

#[AsTask(description: '🌐 Create Full Symfony Web Application')]
function initWebApp(string $path, string $name, string $version): void
{
    io()->title('🌐 Creating Full Symfony Webapp...');
    $path = input()->getArgument('path');
    $name = input()->getArgument('name');
    $version = input()->getArgument('version');
    run('composer create-project symfony/skeleton ' . $name . ' ' . $version, path: $path);
    run('composer require symfony/webapp-pack', path: $path . '/' . $name);
    io()->success(sprintf('Full Symfony webapp %s has been created at %s.', $name, $path));
}

#[AsTask(description: '🌐 Create Symfony Webapp with Webpack Encore and Tailwind CSS')]
function tailwind(string $path, string $name, string $version): void {
    io()->title('🌐 Creating Symfony Webapp with Webpack Encore and Tailwind CSS...');
    $path = input()->getArgument('path');
    $name = input()->getArgument('name');
    $version = input()->getArgument('version');
    run('composer create-project symfony/skeleton ' . $name . ' ' . $version, path: $path);
    run('composer require symfony/webapp-pack', path: $path . '/' . $name);
    run('composer require symfony/webpack-encore-bundle', path: $path . '/' . $name);
    run('npm install tailwindcss postcss autoprefixer', path: $path . '/' . $name);
    run('npx tailwindcss init', path: $path . '/' . $name);
    io()->success(sprintf('Symfony webapp with Webpack Encore and Tailwind CSS %s has been created at %s.', $name, $path));
}
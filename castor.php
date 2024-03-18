<?php

use Castor\Attribute\AsTask;

use function Castor\input;
use function Castor\io;
use function Castor\capture;
use function Castor\run;

#[AsTask(description: 'Welcome to Castor!')]
function hello(): void
{
    $currentUser = capture('whoami');

    io()->title(sprintf('Hello %s!', $currentUser));
}

#[AsTask(description: 'Create Symfony Project with Skeleton')]
function init(string $path, string $name): void
{
    $path = input()->getArgument('path');
    $name = input()->getArgument('name');
    run('composer create-project symfony/skeleton ' . $name, path: $path);
}
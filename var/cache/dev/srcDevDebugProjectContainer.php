<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJxabbdt\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJxabbdt/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJxabbdt.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJxabbdt\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerJxabbdt\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Jxabbdt',
    'container.build_id' => '3aa4faae',
    'container.build_time' => 1534180830,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJxabbdt');

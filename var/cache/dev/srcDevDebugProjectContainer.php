<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHb5vjf7\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHb5vjf7/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHb5vjf7.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHb5vjf7\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerHb5vjf7\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Hb5vjf7',
    'container.build_id' => '651d60e2',
    'container.build_time' => 1547575093,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHb5vjf7');

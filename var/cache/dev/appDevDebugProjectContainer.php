<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRkrscgd\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRkrscgd/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRkrscgd.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRkrscgd\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRkrscgd\appDevDebugProjectContainer([
    'container.build_hash' => 'Rkrscgd',
    'container.build_id' => '60399cc6',
    'container.build_time' => 1574891682,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRkrscgd');

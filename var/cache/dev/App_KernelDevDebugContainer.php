<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIsUTb3K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIsUTb3K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIsUTb3K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIsUTb3K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIsUTb3K\App_KernelDevDebugContainer([
    'container.build_hash' => 'IsUTb3K',
    'container.build_id' => '120bb153',
    'container.build_time' => 1663837700,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIsUTb3K');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGkA87H8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGkA87H8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGkA87H8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGkA87H8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGkA87H8\App_KernelDevDebugContainer([
    'container.build_hash' => 'GkA87H8',
    'container.build_id' => '53753568',
    'container.build_time' => 1634285659,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGkA87H8');

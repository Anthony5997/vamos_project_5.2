<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJpL3HjI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJpL3HjI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJpL3HjI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJpL3HjI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJpL3HjI\App_KernelDevDebugContainer([
    'container.build_hash' => 'JpL3HjI',
    'container.build_id' => '587d6720',
    'container.build_time' => 1635068109,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJpL3HjI');

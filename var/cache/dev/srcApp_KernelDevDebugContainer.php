<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9Qb9own\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9Qb9own/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9Qb9own.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9Qb9own\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9Qb9own\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9Qb9own',
    'container.build_id' => '7bddfc5f',
    'container.build_time' => 1565175922,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9Qb9own');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBogZZHh\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBogZZHh/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBogZZHh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBogZZHh\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerBogZZHh\srcApp_KernelProdContainer([
    'container.build_hash' => 'BogZZHh',
    'container.build_id' => '602c5b9a',
    'container.build_time' => 1608472854,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBogZZHh');

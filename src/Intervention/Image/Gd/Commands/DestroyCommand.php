<?php

namespace Intervention\Image\Gd\Commands;

use Intervention\Image\Commands\AbstractCommand;

class DestroyCommand extends AbstractCommand
{
    /**
     * Destroys current image core and frees up memory
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        // destroy image core
        if (PHP_VERSION_ID < 80000) { // no-op since PHP 8.0, deprecated in PHP 8.5
            imagedestroy($image->getCore());
        }

        // destroy backups
        foreach ($image->getBackups() as $backup) {
            if (PHP_VERSION_ID < 80000) { // no-op since PHP 8.0, deprecated in PHP 8.5
                imagedestroy($backup);
            }
        }

        return true;
    }
}

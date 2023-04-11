<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{

    const PACKAGE = "clubdeuce/php-fpm";

    // define public methods as commands

    /**
     * build a container
     */
    public function build($version) {
        if (file_exists($version)) {
            $config = json_decode(file_get_contents('./' . $version . '/config.json'));
            $build = $this->taskDockerBuild();
            
            $build->dir($version);

            foreach ($config->tags as $tag) {
                $build->tag(sprintf('%1$s:%2$s', self::PACKAGE, $tag));
            }
            return $build->run();
        }

        return null;
    }
}
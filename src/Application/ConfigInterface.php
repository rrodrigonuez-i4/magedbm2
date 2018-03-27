<?php

namespace Meanbee\Magedbm2\Application;

use Meanbee\Magedbm2\Application\Config\DatabaseCredentials;
use Meanbee\Magedbm2\Application\Config\TableGroup;
use Psr\Log\LoggerAwareInterface;

interface ConfigInterface extends LoggerAwareInterface
{

    /**
     * Get a config option value.
     *
     * @param string $option
     *
     * @return mixed
     */
    public function get($option);

    /**
     * Get the path to the temporary directory.
     *
     * @return string
     */
    public function getTmpDir();

    /**
     * Get the working directory.
     *
     * @return string
     */
    public function getWorkingDir();

    /**
     * Get the root directory of Magento.
     *
     * @return string|null
     */
    public function getRootDir();

    /**
     * Get the path to the configuration file.
     *
     * @return string
     */
    public function getConfigFile();
    
    /**
     * Get the defined table groups.
     *
     * @return TableGroup[]
     */
    public function getTableGroups();

    /**
     * @return DatabaseCredentials
     */
    public function getDatabaseCredentials();

    /**
     * Set a config option value.
     *
     * @param string $option
     * @param mixed  $value
     *
     * @return void
     */
    public function set($option, $value);

    /**
     * Returns which service preference we should use for a given service, e.g.
     *
     * getServicePreference('storage') could return 's3' or 'local'.
     *
     * @return string
     */
    public function getServicePreference($service);
}

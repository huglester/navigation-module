<?php namespace Anomaly\NavigationModule\Link\Contract;

use Anomaly\NavigationModule\Link\LinkType;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface LinkInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\NavigationModule\Link\Contract
 */
interface LinkInterface
{

    /**
     * Get the URL.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Get the type.
     *
     * @return LinkType
     */
    public function getType();

    /**
     * Get the related entry.
     *
     * @return EntryInterface
     */
    public function getEntry();

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle();
}
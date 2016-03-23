<?php

namespace Textmaster\Api;

use Textmaster\Api\Expertise\SubExpertise;

/**
 * Listing expertises.
 *
 * @author Christian Daguerre <christian@daguer.re>
 */
class Expertise extends AbstractApi
{
    /**
     * List all languages.
     *
     * @link https://fr.textmaster.com/documentation#public-listing-languages
     *
     * @param string $activity
     * @param null|string $locale
     *
     * @return array
     */
    public function all($activity, $locale = null)
    {
        $params = array('activity' => $activity);

        if (null !== $locale) {
            $params['locale'] = $locale;
        }

        return $this->get('public/expertises', $params);
    }

    /**
     * Sub expertise Api.
     *
     * @return SubExpertise
     */
    public function subExpertises()
    {
        return new SubExpertise($this->client);
    }
}

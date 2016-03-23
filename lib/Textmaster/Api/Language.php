<?php

namespace Textmaster\Api;

/**
 * Listing languages and levels.
 *
 * @author Christian Daguerre <christian@daguer.re>
 */
class Language extends AbstractApi
{
    /**
     * List all languages.
     *
     * @link https://fr.textmaster.com/documentation#public-listing-languages
     *
     * @return array
     */
    public function all()
    {
        return $this->get('public/languages');
    }

    /**
     * List all language levels.
     *
     * @link https://fr.textmaster.com/documentation#language-levels-get-all-language-levels
     *
     * @return array
     */
    public function levels()
    {
        return $this->get('clients/language_levels');
    }
}
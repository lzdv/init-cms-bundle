<?php

namespace Networking\InitCmsBundle\Validator;

use Behat\Transliterator\Transliterator as BaseTransliterator;

/**
 * Transliteration utility
 */
class Transliterator extends BaseTransliterator
{

    /**
     * Cleans up the text and adds separator
     *
     * @param string $text
     * @param string $separator
     *
     * @return string
     */
    public static function postProcessParametricUrl($text, $separator)
    {
        if (function_exists('mb_strtolower')) {
            $text = mb_strtolower($text);
        } else {
            $text = strtolower($text);
        }

        // Remove all none word characters
        $text = preg_replace('/\W\{\}/', ' ', $text);
        // More stripping. Replace spaces with dashes
        $text = strtolower(preg_replace('/[^A-Za-z0-9\/\{\}]+/', $separator,
            preg_replace('/([a-z\d])([A-Z])/', '\1_\2',
                preg_replace('/([A-Z]+)([A-Z][a-z])/', '\1_\2',
                    preg_replace('/::/', '/', $text)))));
        return trim($text, $separator);
    }

}


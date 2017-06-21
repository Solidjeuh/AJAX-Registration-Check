<?php

/**
 * @author    MarkusWME <markuswme@pcgamingfreaks.at>
 * @copyright 2017 MarkusWME
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
 * @license   http://opensource.org/gpl-2.0.php GNU General Public License v2
 * @version   1.0.0
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// Merge AJAX Registration Check language data to the existing language data
$lang = array_merge($lang, array(
    'PCGF_AJAXREGISTRATIONCHECK_INVALID_QUERY'        => 'De opdracht is ongeldig!',
    'PCGF_AJAXREGISTRATIONCHECK_USERNAME_OK'          => 'De opgegeven gebruikersnaam kan gebruikt worden.',
    'PCGF_AJAXREGISTRATIONCHECK_EMAIL_INVALID'        => 'De opgave is geen geldig Email adres!',
    'PCGF_AJAXREGISTRATIONCHECK_EMAIL_OK'             => 'Het opgegeven Email adres kan gebruikt worden.',
    'PCGF_AJAXREGISTRATIONCHECK_CONFIRM_PASSWORD_OK'  => 'De opgegeven wachtwoorden zijn identiek.',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_STRENGTH'    => 'Wachtwoord sterkte',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_VERY_WEAK'   => 'Zeer zwak',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_WEAK'        => 'Zwak',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_NORMAL'      => 'Normaal',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_STRONG'      => 'Sterk',
    'PCGF_AJAXREGISTRATIONCHECK_PASSWORD_VERY_STRONG' => 'Zeer sterk',
));

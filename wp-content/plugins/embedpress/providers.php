<?php
(defined('ABSPATH') && defined('EMBEDPRESS_IS_LOADED')) or die("No direct script access allowed.");

/**
 * Declare an associative array that is responsible for mapping additional service providers to its urls.
 * The key must match the class placed in ./EmbedPress/Providers/ folder, and the values must be a string or
 * another array listing all url patterns in which the key (a.k.a. the service provider you're adding)
 * should be triggered.
 *
 * @package     EmbedPress
 * @author      EmbedPress <help@embedpress.com>
 * @copyright   Copyright (C) 2020 WPDeveloper. All rights reserved.
 * @license     GPLv3 or later
 * @since       1.0.0
 */

$additionalServiceProviders = [
	EMBEDPRESS_NAMESPACE . "\\Providers\\GoogleMaps" => ["google.com", "google.com.*", "maps.google.com", "goo.gl", "google.co.*"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\GoogleDrive" => ["drive.google.com"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\GoogleDocs" => ["docs.google.com"],
    EMBEDPRESS_NAMESPACE . "\\Providers\\Twitch"     => ["twitch.tv", "clips.twitch.tv"],
    EMBEDPRESS_NAMESPACE . "\\Providers\\Giphy"      => ["giphy.com", "i.giphy.com"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\Boomplay"   => ["boomplay.com"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\Youtube"    => ["youtube.com"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\OpenSea"    => ["opensea.io"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\NRKRadio"    => ["radio.nrk.no", "nrk.no"],
	EMBEDPRESS_NAMESPACE . "\\Providers\\GitHub"    => ["gist.github.com", "github.com"],
];

<?php

/** @var  \Herbert\Framework\Application $container */

use AgreableSponsoredPostsPlugin\Hooks\BasicDetailsAcf;
use AgreableSponsoredPostsPlugin\Hooks\SocialMediaAcf;
use AgreableSponsoredPostsPlugin\Hooks\HtmlOverridesAcf;
use AgreableSponsoredPostsPlugin\Hooks\RelatedContentAcf;


(new BasicDetailsAcf)->init();
(new SocialMediaAcf)->init();
(new HtmlOverridesAcf)->init();
(new RelatedContentAcf)->init();


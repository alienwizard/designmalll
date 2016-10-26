<?php
/**
 * Setup environments
 *
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 *
 * You can define the current environment via:
 *     define('WP_ENV', 'production');
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/*
 * Set environment based on hostname
 *
 * If you just use localhost for your local test environment then in place of:
 *   case 'domain.dev':
 *
 * Just use:
 *   case 'localhost':
 *
 */
switch ($hostname) {
    case 'localhost:8080':
        define('WP_ENV', 'development');
		break;

    case 'design.mediahelpcrm.se':
        define('WP_ENV', 'staging');
        break;

    case 'design1.mediahelpcrm.se':
        define('WP_ENV', 'staging1');
        break;

    case 'design2.mediahelpcrm.se':
        define('WP_ENV', 'staging2');
        break;
    case 'design3.mediahelpcrm.se':
        define('WP_ENV', 'staging3');
        break;
    case 'design4.mediahelpcrm.se':
        define('WP_ENV', 'staging4');
        break;

    case 'design5.mediahelpcrm.se':
        define('WP_ENV', 'staging5');
        break;

    case 'design6.mediahelpcrm.se':
        define('WP_ENV', 'staging6');
        break;

    case 'design6.mediahelpcrm.se':
        define('WP_ENV', 'staging6');
        break;
        
    case 'design6.mediahelpcrm.se':
        define('WP_ENV', 'staging6');
        break;

    case 'www.domain.com':
    default:
        define('WP_ENV', 'production');
}

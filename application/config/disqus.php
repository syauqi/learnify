<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
|--------------------------------------------------------------------------
| Disqus Shortname
|--------------------------------------------------------------------------
|
| Tells the Disqus service your forum's shortname, which is the unique
| identifier for your website as registered on Disqus.
| If undefined, the Disqus embed script will make a best-guess
| based on the URL of the Disqus embed script.
|
| Usage: Specify your forum shortname as string.
|
 */
$config['disqus_shortname'] = 'learnify-1'; // sesuaikan dengan url disqus kalian.

/*
|--------------------------------------------------------------------------
| Disqus Developer Mode
|--------------------------------------------------------------------------
|
| Tells the Disqus service that you are testing the system on an
| inaccessible website, e.g. secured staging server or  a local environment.
| If disqus_developer is off or undefined, Disqus' default behavior will
| be to attempt to read the location of your page and validate the URL.
| If unsuccessful, Disqus will not load.
|
| Use this variable to get around this restriction while you
| are testing on an inaccessible website.
| Usage: Specify 1 for on and 0 for off. If undefined, disqus_developer is off.
|
 */
$config['disqus_developer'] = 1;

/* End of file disqus.php */
/* Location: ./application/config/disqus.php */
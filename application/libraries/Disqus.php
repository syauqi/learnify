<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Disqus
{
    /*
     *  Local CI instance
     */
    private $CI;
    /*
     *  Disqus shortname config item
     */
    private $disqus_shortname;
    /*
     *  Disqus developer setting
     */
    private $disqus_developer;

    /*
     * Init Disqus library
     */
    public function __construct()
    {
        $this->CI = &get_instance();

        $this->CI->config->load('disqus');

        $this->disqus_shortname = $this->CI->config->item('disqus_shortname');
        $this->disqus_developer = $this->CI->config->item('disqus_developer');

        log_message('debug', 'Disqus library loaded');
    }

    /*
     * Get Diqsus html
     */
    public function get_html()
    {
        // Validate config items
        if (!in_array($this->disqus_developer, array(0, 1)) || strlen($this->disqus_shortname) == 0) {
            return "Disqus config items not setup correctly, please check library config settings";
        }

        return "<div id='disqus_thread'></div>
                <script type='text/javascript'>

                var disqus_developer = $this->disqus_developer;
                var disqus_shortname = '$this->disqus_shortname';

                var disqus_url = '" . current_url() . "';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href='http://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>
                <a href='http://disqus.com' class='dsq-brlink'>blog comments powered by <span class='logo-disqus'>Disqus</span></a>";
    }
}
<?php $str='Dear God, please make it stop.'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $str ?></title>
        <meta http-equiv="Content-Type" content="text/html;UTF-8" />
        <link rel="stylesheet" media="all" type="text/css" href="css/site.css" />
    </head>
    <body>
    <div id="container">
        <div id="content">
            <img src="images/praying-child-by-drew-bennet-flickr.jpg" alt="<?php echo $str ?>" title="<?php echo $str ?>" width="640" height="512"/>
            <img src="images/note2_350x169.jpg" alt="Note to God" title="Note to God" width="350" height="169"/>
            <p>
                site by <a href="http://about.me/jeremykendall">jeremy</a> | 
                photo by <a href="https://flic.kr/p/7pM78v">drew bennett</a>
            </p>
        </div>
    </div>
    <?php if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== 'deargodpleasemakeitstop.dev'): ?>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
            </script>
            <script type="text/javascript">
            var pageTracker = _gat._getTracker("UA-1611748-2");
            pageTracker._initData();
            pageTracker._trackPageview();
        </script>
    <?php endif; ?>
    </body>
</html>

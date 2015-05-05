<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="firstapp">

<head ng-controller="headerctrl">
    <title ng-bind="'Ziba - '+template.title">Ziba</title>
    <meta name="name" content="Ziba">
    <meta name="description" content="Bring your Outfit to Life with Fashion Jewelry by lyla loves! Shop Statement Necklaces, Cuff Bracelets, and Midi Rings! Find the Best Fashion Jewelry at Ziba.">
    <meta name="keywords" content="Jewelry, Fashion Jewelry, Statement Necklaces, Earrings, Rings, Cuff Bracelets.">
    <script>
        var hostname = window.location.hostname;
        if (hostname == "zibacollection.co.uk") {
            console.log(hostname);
            window.location.replace("http://www.zibacollection.co.uk/");
        } else {
            console.log("other " + hostname);
        }
    </script>
    <script>
        var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function () {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function () {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        if (isMobile.any()) {
            window.location = "http://mobile.zibacollection.co.uk" + window.location.hash;
        }
    </script>
    <script type="text/javascript">
        var _clt = _clt || [];
        _clt["custId"] = "{{email}}";
        _clt["siteId"] = "40606bc583";
        _clt["ref"] = encodeURIComponent(document.referrer);
        (function () {
            var cl = document.createElement('script');
            cl.type = 'text/javascript';
            cl.async = true;
            cl.src = 'https:' == document.location.protocol ? 'https://lib.canopylabs.com:8889/js/cl_ga4.js' : 'http://lib.canopylabs.com:8888/js/cl_ga4.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(cl, s);
        })();
    </script>


    <link rel="shortcut icon" href="img/logo.jpg" />
    <link href="lib/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="lib/css/animate.css" rel="stylesheet" type="text/css">
    <link href="lib/css/image-zoom.min.css" rel="stylesheet">
    <link href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/css/main1.css" rel="stylesheet">
    <link href="lib/range/angular.rangeSlider.css" rel="stylesheet">
    <link href="https://checkout.stripe.com/v3/checkout/button.css" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="lib/js/jquery-1.11.1.min.js"></script>
    <script src="lib/js/angular.min.js"></script>
    <script src="lib/js/angular-animate.js"></script>
    <script src="lib/js/angular-route.min.js"></script>
    <script src="lib/js/angular-resource.min.js"></script>
    <script src="lib/js/zoom.js"></script>
    <!--<script src="lib/js/bootstrap.min.js"></script>-->
    <script src="lib/js/ui-bootstrap-tpls-0.11.0.min.js"></script>
    <script src="lib/js/jquery.bxslider.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/templateservice.js"></script>
    <script src="js/services.js"></script>
    <script src="lib/js/wow.min.js"></script>
    <script src="lib/js/isotope.js"></script>
    <script src="lib/js/main.js"></script>
    <script src="lib/js/image-zoom.js"></script>
    <script src="lib/js/jquery.elevatezoom.min.js"></script>
    <script src="lib/js/skrollr.js"></script>
    <script src="lib/js/skrollr.dir.js"></script>
    <script src="lib/range/angular.rangeSlider.js"></script>
    <script src="lib/js/ng-infinite-scroll.min.js"></script>
    <script src="lib/js/jstorage.js"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-55688126-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        var switchTo5x = true;
    </script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
        stLight.options({
            publisher: "151ada81-ab2d-4bdb-bae6-c1762cc0f2bb",
            doNotHash: false,
            doNotCopy: false,
            hashAddressBar: false
        });
    </script>


</head>

<body>

    <header>
        <div class="top-bar barheight">
            <div class="row">
                <div class="col-xs-3"><span class="bold spacer"><a href="#/iheartziba">Join the IHEARTZIBA Club</a></span>
                </div>
                <div class="col-xs-6 text-center"><span class="bold spacer">{{msgg}}</span>
                </div>
                <div class="col-xs-3">
                    <div class="pull-right">
                        <a href="#/Login"><span class="thin">MY ACCOUNT</span></a>

                        <a href="#" class="badge newbadge" ng-show="template.totalproducts">{{template.totalproducts}}</a>
                        <a href="#/cart" class="topicon {{template.cartclicked}}">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </a>
                        <div class="input-group headsearch" ng-controller="search">
                            <span class="input-group-addon icon"><span class="glyphicon glyphicon-search"></span></span>
                            <input type="text" class="form-control inputbox" ng-model="searchpro" placeholder="Search" ng-change="search(searchpro)">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="barheight"></div>
    <div class="container-fluid-non-responsive">
        <div ng-view skrollr-tag></div>
        <!--        <div ng-view></div>-->
    </div>

    <script>
        var issearch = false;

        $(document).ready(function () {


            $(".headsearch .icon").click(function () {

                if (issearch) {
                    issearch = false;
                    $(".headsearch .inputbox").removeClass("showit");
                    $(".headsearch .icon").removeClass("showit");
                } else {
                    issearch = true;
                    $(".headsearch .inputbox").addClass("showit");
                    $(".headsearch .icon").addClass("showit");
                }
            });
        });
    </script>

    <script type="text/javascript">
        (function (d, t) {
            if (window.location.hash != '#gleam' && ('' + document.cookie).match(/(^|;)\s*GleamaaA2s=X($|;)/)) {
                return;
            }
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.src = "https://js.gleam.io/aaA2s/ol.js";
            s.parentNode.insertBefore(g, s);
        }(document, "script"));
    </script>


</body>

</html>
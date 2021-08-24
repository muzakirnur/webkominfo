<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Kominfo | {{ $page }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="https://kominfo.go.id/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://kominfo.go.id/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://kominfo.go.id/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://kominfo.go.id/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://kominfo.go.id/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://kominfo.go.id/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://kominfo.go.id/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://kominfo.go.id/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://kominfo.go.id/favicon/apple-touch-icon-152x152.png" />
    <!-- Styles -->
    <link href="Semantic/dist/semantic.min.css" rel="stylesheet">
    <link href="Semantic/dist/components/icon.min.css" rel="stylesheet">
    <link href="https://layanan.kominfo.go.id/css/app.css?id=931f20a5812b52186cb7" rel="stylesheet">
    <link href="https://layanan.kominfo.go.id/css/calendar.min.css" rel="stylesheet">
    <link href="https://layanan.kominfo.go.id/css/jquery-ui.css" rel="stylesheet">
    <link href="stylesheet" href="fontawesome/css/all.css">
    <link href="stylesheet" href="fontawesome/css/fontawesome.css">
    <link href="stylesheet" href="fontawesome/css/solid.css">
    <link href="https://layanan.kominfo.go.id/css/landing-page.css" rel="stylesheet">
    <!--[if IE]>
    <link href="https://layanan.kominfo.go.id/css/ie10.css" rel="stylesheet">
    <![endif]-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        .se-action i {
            color: white !important;
        }

        .se-action:hover i {
            color: grey !important;
        }

        .ui.table.se>tbody>tr>td {
            border-top: 1px solid rgba(34, 36, 38, .1);
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container .select2-selection--single {
            height: 40px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-left: 13px;
            padding-top: 4px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 7px;
            right: 9px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__rendered li input {
            width: 9.75em !important;
            margin-top: 5px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            padding: 8px 5px;
        }

        .ui.segment>div.sixteen.wide.column {
            margin-bottom: 20px
        }

        body.pushable,
        body.pushable>.pusher {
            background: linear-gradient(180deg, rgba(100, 192, 239, 0.32) 0%, rgba(20, 111, 165, 0.59) 53.6%, #1474AE 100%), url('img/bg.jpg') !important;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover !important;
            position: relative !important;
            margin: 0 !important;
            /*height: auto !important;*/
            min-height: 100% !important;
            padding-top: 150px;
        }

    </style>
</head>

<body id="">

    @include('layouts.partials.sidebar')
    <!-- Page Contents -->
    <div id="app" class="pusher">
        <div class="logo">
            <img src="img/logo-kominfo.jpg" class="compact">
        </div>
        <div class="ui left floated button landing-sidebar">
            <i class="sidebar icon"></i>
        </div>
        <div class="ui container">
            <div class="search-box row">
                <div class="ui left icon input">
                    <input type="text" placeholder="Cari" class="search" id="search">
                    <i class="search icon"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-bar row">
                <ul id="menu">
                    <li class="menubar parent">
                        <a class="" data-parent="#menu" href="#1" data-toggle="collapse">
                            <img src="img/globe.png" alt=""></a>
                        <span class="title">INTERNET</span>
                    </li>
                    <li class="menubar parent">
                        <a class="" data-parent="#menu" href="#2" data-toggle="collapse"><img
                                src="img/intranet.png" alt=""></a>
                        <span class="title">INTRANET</span>
                    </li>
                    <li class="menubar parent">
                        <a class="" data-parent="#menu" href="#27" data-toggle="collapse"><img
                                src="https://layanan.kominfo.go.id/images/icon/landing/perijinan.png" alt=""></a>
                        <span class="title">LOCALHOST</span>
                    </li>
                    <li class="menubar parent">
                        <a class="" data-parent="#menu" href="#12" data-toggle="collapse"><img
                                src="https://layanan.kominfo.go.id/images/icon/landing/sertifikasi.png" alt=""></a>
                        <span class="title">MENARA TRIANGLE</span>
                    </li>
                    <li class="menubar">
                        <a class="" href="login"><img
                                src="https://layanan.kominfo.go.id/images/icon/landing/aduan-konten.png" alt=""></a>
                        <span class="title">VPN</span>
                    </li>
                    <li class="menubar">
                        <a class="" href="https://layanan.kominfo.go.id/microsite/aduan-brti"><img
                                src="https://layanan.kominfo.go.id/images/icon/landing/helpdesk.png" alt=""></a>
                        <span class="title">VPS</span>
                    </li>
                </ul>
            </div>
        </div>
        <p class="clear"></p>
        <br>
        <div class="ui container center aligned">
            <a href="https://kominfo.go.id" class="huge ui white basic button very padded" target="_blank">Laman
                KOMINFO</a>
        </div>
        <br>
        <p class="clear"></p><br>
        <p class="clear"></p><br>
        <div class="ui divider hidden"></div>
        <div class="ui divider hidden"></div>
        <div class="ui divider hidden"></div>
        <div class="ui divider hidden"></div>
        <div class="ui divider hidden"></div>

        <div id="NotifikasiBox" style="display: none">
            <span class="button b-close">
                <span>X</span>
            </span>
            <h3><img src="https://layanan.kominfo.go.id/images/logo-kominfo.jpg" class="compact"
                    height="150"><br>Pemberitahuan</h3>
            <p>Sehubungan dengan adanya pengembangan teknis Layanan Aptika Terintegrasi, <br />Layanan Pendaftaran PSE
                Non Penyelenggara Negara di non-aktifkan hingga tanggal <b>18 Juli 2018</b></p>
        </div>


        <div class="ui modal">
            <div class="content">
                <img src="https://layanan.kominfo.go.id/images/logo-kominfo-transparent.png"
                    style=" display: block;margin-left: auto;margin-right: auto;width: 6%;">
                <div style="text-align: center">
                    <h3><strong>Pemberitahuan</strong></h3>
                </div>
                <br>

            </div>
        </div>

        <div class="footer">
            <div class="ui vertical footer top segment">
                <div class="ui container center aligned">
                    KEMENTERIAN KOMUNIKASI DAN INFORMATIKA 2021
                    <br>
                    <p>HUBUNGI KAMI : 159</p>
                </div>
            </div>

            <div class="ui vertical footer bottom segment">
                <div class="ui container center aligned">
                    <a href="https://www.kominfo.go.id/"><i class="icon open world"></i> www.kominfo.go.id </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="mailto:kontak@kominfo.go.id"><i class="icon open envelope outline"></i>
                        kontak@kominfo.go.id </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/kemkominfo"><i class="icon facebook"></i> kemkominfo </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://youtube.com/kominfotv"><i class="icon youtube"></i> kominfotv </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com/kemkominfo"><i class="icon twitter"></i> kemkominfo </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/kemenkominfo"> <i class="icon instagram"></i> kemenkominfo </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://layanan.kominfo.go.id/js/jquery-ui.js"></script>
    <script src="https://layanan.kominfo.go.id/semantic/semantic.min.js"></script>
    <script src="https://layanan.kominfo.go.id/js/libs.js?id=0c59281098d639f507c8"></script>
    <script src="https://layanan.kominfo.go.id/js/visibility.js"></script>
    <script src="https://layanan.kominfo.go.id/js/sidebar.min.js"></script>
    <script src="https://layanan.kominfo.go.id/js/calendar.min.js"></script>
    <script>
        window.baseURL = 'https://layanan.kominfo.go.id';
    </script>
    <script src="https://layanan.kominfo.go.id/js/pdf.min.js"></script>
    <script src="https://layanan.kominfo.go.id/js/jquery.zoom.min.js"></script>
    <script src="https://layanan.kominfo.go.id/js/app.js?id=752d7b64ead23e946b92"></script>
    <script src="https://layanan.kominfo.go.id/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('.ui.dropdown').dropdown();
        $(".zoom").zoom();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-44646703-12"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-44646703-12');
        $('.btn-oss').on('click', function() {
            // $('#modal-se').modal('show');
        });
    </script>
    <script type="text/javascript" src="https://layanan.kominfo.go.id/js/collapse.js"></script>
    <script type="text/javascript" src="https://layanan.kominfo.go.id/js/jquery.bpopup.min.js"></script>
    <script type="text/javascript">
        $('ul[id="submenu"] a').on('click', function() {
            if ($(this).attr('href') === '#maintenancePSE') {
                $('#NotifikasiBox').bPopup();
            }
        });

        $('.ui.sidebar').sidebar('attach events', '.landing-sidebar');

        $('.menubar.parent').click(function() {

            if (!$(this).next().hasClass('in')) {
                $('.content.column-full').removeClass('in');
                $('.content.column-full').prop('aria-expanded', false);
            }

            // const mq = window.;
            if (matchMedia("(max-width: 500px)").matches) {
                a = parseInt($(this).position().left);
            } else {
                a = parseInt($(this).position().left) - 30;
            }
            addRule(".well#callouts--top:after", "left: " + a + "px;")

        });
        $(window).scroll(function() {
            $(".menubar.shrink").show();
            if (matchMedia("(max-width: 500px)").matches) {
                if ($(window).scrollTop() >= 80) {
                    $(".menubar.shrink").hide();
                }
            } else {
                if ($(window).scrollTop() >= 100) {
                    $(".menubar.shrink").hide();
                }
            }
        });

        $(document).ready(function() {
            $("#search").autocomplete({
                source: "https://layanan.kominfo.go.id/landing-menus/search",
                focus: function(event, ui) {
                    $(this).val(ui.item.title);
                    return false;
                },
                minLength: 2,
                select: function(event, ui) {
                    url = (ui.item.url == '#' || ui.item.url == '') ? 'login' : ui.item.url;
                    window.location.href = url;
                }
            }).data("ui-autocomplete")._renderItem = function(ul, item) {
                icon = (item.is_parent == 1) ? item.icon_parent : item.icon;
                parent_title = (item.parent_title != null) ? item.parent_title + ' - ' : '';
                var inner_html = '<a href="' + item.url +
                    '" ><div class="list_item_container"><div class="image"><img src="https://layanan.kominfo.go.id/images/icon/landing/' +
                    icon + '" ></div><div class="label"><h4><b>' + parent_title + item.title +
                    '</b></h4></div></div></a>';
                return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
            };
        });
    </script>
</body>

</html>

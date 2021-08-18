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
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="fontawesom/css/all.css" rel="stylesheet">
    <link href="fontawesom/css/fontawesome.css" rel="stylesheet">
    <link href="template/css/sb-admin-2.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">


    <link href="https://layanan.kominfo.go.id/css/faq.css" rel="stylesheet">
    <link href="https://layanan.kominfo.go.id/css/custom.css" rel="stylesheet">
    <link href="https://layanan.kominfo.go.id/css/sidebar.min.css" rel="stylesheet">

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

    </style>
</head>

<body id="">

    <!-- Sidebar Menu -->
    <div class="ui vertical sidebar menu right">
        <a href="/" class="item">Beranda</a>
        <a href="/tentang" class="item">Tentang Kami</a>
        <a href="/faq" class="item">FAQ</a>
        <a href="/login" class="item login">Masuk</a>
        <a href="/register" class="item register">Daftar</a>
    </div>
    <!-- Page Contents -->
    @include('layouts.partials.navbar1')
    @yield('body')
    <div class="ui divider hidden"></div>
    <div class="ui divider hidden"></div>
    <div class="ui divider hidden"></div>
    <div class="ui divider hidden"></div>
    <div class="ui divider hidden"></div>
    <div class="ui divider hidden"></div>
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
                <a href="https://www.instagram.com/kemenkominfo"> <i class="icon instagram"></i> kemenkominfo
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
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
    <script>
        $(function() {
            $('.ui.accordion').accordion();
        });
    </script>
    <script type="text/javascript">
        $(document)
            .ready(function() {
                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item.nav');

            });
    </script>
</body>

</html>

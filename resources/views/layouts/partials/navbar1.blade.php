<div id="app" class="pusher">
    <div class="pusher">
        <div class="ui menu custom">
            <div class="ui container">
                <div class="header item">
                    <img src="https://layanan.kominfo.go.id/images/logo-kominfo-header.jpg">
                </div>
                <a href="/" class="item link menu {{ ($page === "Home") ? 'active' : ''}}">Beranda</a>
                <a href="/tentang" class="item link menu {{ ($page === "tentang") ? 'active' : ''}}">Tentang Kami</a>
                <a href="/faq" class="item link menu {{ ($page === "faq") ? 'active' : ''}}">FAQ</a>
                <div class="right menu">
                    <a class="toc item nav right">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="/login" class="item menu login">Masuk</a>
                    <a href="/register" class="item menu register">Daftar</a>
                </div>
            </div>
        </div>

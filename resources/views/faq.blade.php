@extends('layouts.main')


@section('body')
    
<div class="m-b-1">
    <div class="wrap">
        <div class="back-color">
            Halo, ada yang bisa kami bantu?
        </div>
        <img src="https://layanan.kominfo.go.id/images/bg-faq-new.png" />
    </div>
</div>
<div class="p-1 faqs">
    <div class="m-b-1">
        <div class="ui two column centered grid very padded">
            <div class="fifteen wide column">
                <div class="ui labeled input search-faq">
                    <div class="ui label">
                        <i class="ui search icon"></i>
                    </div>
                    <input type="text" id="searchFaq" placeholder="Cari Halaman Bantuan">
                </div>
            </div>
        </div>
    </div>
    <div class="ui grid">
        <div class="doubling two column row">
            <div class="four wide column">
                <div class="ui secondary vertical menu faqs">
                    <a class="item active" href="/faq">
                        <i class="chevron right icon"></i>
                        Umum
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/55678191159e571d7a35567030311291">
                        <i class="chevron right icon"></i>
                        Aduan Konten
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/96500162259acbe1356f5f4097510965">
                        <i class="chevron right icon"></i>
                        Domain
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/60973334459d45d45025e19075096098">
                        <i class="chevron right icon"></i>
                        IGRS
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/6603292825a28d2189b0180023633260">
                        <i class="chevron right icon"></i>
                        Kategorisasi Sistem Elektronik
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/12689933259dc8ff573e4f3080045260">
                        <i class="chevron right icon"></i>
                        MANTRA
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/38002806459d45d33d59a99090147057">
                        <i class="chevron right icon"></i>
                        PNSBox
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/87925956159dc900a338852055828142">
                        <i class="chevron right icon"></i>
                        PSE Penyelenggara Negara
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/67859447459d45d06f41501089649445">
                        <i class="chevron right icon"></i>
                        Puspita
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/76080863759d4cd149ac672004298453">
                        <i class="chevron right icon"></i>
                        siCANTIK
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/37492725359acbe46b63706068623414">
                        <i class="chevron right icon"></i>
                        siMaya
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/15311859559dc9013402450063294485">
                        <i class="chevron right icon"></i>
                        SMPI
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/93410826359b0cb60e31081038668236">
                        <i class="chevron right icon"></i>
                        Verifikasi
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/3172336105a701972ed9290090555591">
                        <i class="chevron right icon"></i>
                        Mail.go.id
                    </a>
                    <a class="item " href="https://layanan.kominfo.go.id/faqs/19427216359acbe7f486d68029557702">
                        <i class="chevron right icon"></i>
                        PSE Lingkup Privat
                    </a>
                </div>
            </div>
            <div class="twelve wide column">
                <div class="m-b-1">
                    <div class="ui styled fluid accordion">
                        <div class="title" id="">
                            <span class="space"></span>Bagaimana Cara Mendaftar di Portal Layanan ini?
                            <i class="icon angle down"></i>
                        </div>
                        <div class="content">
                            <p>Anda dapat menggunakan link <a
                                    href="/register">Daftar</a></p>
                        </div>
                    </div>
                    <div class="ui styled fluid accordion">
                        <div class="title" id="">
                            <span class="space"></span>Apakah Persyaratan Untuk Menjadi Pemohon
                            Terverifikasi Instansi Pemerintah ?
                            <i class="icon angle down"></i>
                        </div>
                        <div class="content">
                            <p>Terdapat beberapa hal yang perlu dipersiapkan untuk melakukan verifikasi
                                pemohon, antara lain :</p>
                            <ol>
                                <li>Identitas Pemohon (No. NIK, Nama Lengkap, e-Mail, dst);</li>
                                <li>e-Mail (wajib .go.id);</li>
                                <li>Kartu PNS/TNI/Polri;</li>
                                <li>Kontak Instansi; dan</li>
                                <li>Data Instansi (Nama Instansi, Surat Tugas dan Surat Permohonan).</li>
                            </ol>
                        </div>
                    </div>
                    <div class="ui styled fluid accordion">
                        <div class="title" id="">
                            <span class="space"></span>Apakah Persyaratan Untuk Menjadi Pemohon
                            Terverifikasi Non Instansi Pemerintah ?
                            <i class="icon angle down"></i>
                        </div>
                        <div class="content">
                            <p>Terdapat beberapa hal yang perlu dipersiapkan untuk verifikasi sebagai non
                                instansi pemerintah, antara lain :</p>
                            <ol>
                                <li>Identitas Pemohon (No. NIK, Nama Lengkap, e-Mail, dst)</li>
                                <li>KTP;</li>
                                <li>Identitas Perusahaan;</li>
                                <li>Berkas NPWP;</li>
                                <li>Berkas No. Pengesahan Akta;</li>
                                <li>Berkas Lembar Kemenkumham;</li>
                                <li>Berkas Tanda Daftar Perusahaan;</li>
                            </ol>
                        </div>
                    </div>
                    <div class="ui styled fluid accordion">
                        <div class="title" id="">
                            <span class="space"></span>Bagaimanakah Jika Menemui Kesulitan Dalam Menggunakan
                            Aplikasi Ini ?
                            <i class="icon angle down"></i>
                        </div>
                        <div class="content">
                            <p>Anda dapat menghubungi kami <a href="#"
                                    target="_blank">di
                                    sini</a>, atau jika anda sudah login dapat menggunakan fitur "Aduan dan
                                Konsultasi" yang terdapat dalam&nbsp;<em>dashboard&nbsp;<span
                                        id="redactor-inline-breakpoint"></span></em>pemohon.</p>
                        </div>
                    </div>
                    <div class="ui styled fluid accordion">
                        <div class="title" id="">
                            <span class="space"></span>Apa yang Harus Saya Lakukan Setelah Terverifikasi ?
                            <i class="icon angle down"></i>
                        </div>
                        <div class="content">
                            <p>Setelah terverifikasi sebagai Akun Instansi Pemerintah ataupun Non Instansi
                                Pemerintah, anda akan mendapatkan notifikasi via <em>e-mail&nbsp;<span
                                        id="redactor-inline-breakpoint"></span></em>dan&nbsp;dapat login
                                menggunakan e-mail @mail.go.id / @desa.mail.go.id dengan menggunakan
                                password yang lama</p>
                            <p><em><span id="redactor-inline-breakpoint"></span></em>Setelah itu dapat
                                melanjutkan untuk membuat permohonan layanan
                                dengan&nbsp;<em>login&nbsp;<span id="redactor-inline-breakpoint"></span></em>dengan
                                akun tersebut
                                lalu memilih menu "Tambah Permohonan" dalam&nbsp;<em>Dashboard<span
                                        id="redactor-inline-breakpoint"></span></em>.<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
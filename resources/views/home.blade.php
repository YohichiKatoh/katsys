@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div id="fullpage">
        <div class="section" id="section0">
            <section>
                <video id="myVideo" loop muted data-autoplay>
                    <source src={{get_template_directory_uri()}}/assets/images/flowers.mp4 type="video/mp4">
                    <source src={{get_template_directory_uri()}}/assets/images/flowers.webm type="video/webm">
                </video>
                <div class="layer">
                    {{--<h1>キャットシステムズ</h1>--}}
                    <p>困った！！ねこの手も借りたい。</p>
                    <p>そんなタイミングに、共に課題を考え<br>
                        システムの仕組みづくりで解決していきます。
                    </p>
                    <small>h,j,k,lでスクロールします。</small>
                </div>
            </section>
        </div>

        <div class="section" id="section1">
            <section>
                <h1>業務内容</h1>
                <ul>
                    <li>Windowsアプリケーション開発</li>
                    <li>Webシステム開発</li>
                    <li>Webサイトの企画・制作・運用</li>
                </ul>
                <p>アプリケーションの企画、デザイン、開発、メンテナンス、
                    エンドユーザーへのヘルプデスクまで 一貫した対応が行えます。</p>
                <p>面倒な作業の自動化など、システムのオートメーション化が得意で、
                    定型業務の作業時間を短縮し、全体の生産効率を高めます。</p>
            </section>
        </div>


        <div class="section" id="section2">
            <section>
                <h1>開発事例</h1>
                <div class="slide" id="slide1">
                    <article>
                        <h1>CADパッケージ開発</h1>
                        <table>
                            <tr>
                                <td>OS</td>
                                <td>Windows</td>
                            </tr>
                            <tr>
                                <td rowspan="3">開発言語</td>
                                <td>C</td>
                            </tr>
                            <tr>
                                <td>VB</td>
                            </tr>
                            <tr>
                                <td>C#</td>
                            </tr>
                        </table>
                        <p>パッケージバージョン管理や機能開発、SDK開発など顧客サポートを対応。</p>
                    </article>
                </div>
                <div class="slide" id="slide2">
                    <article>
                        <h1>為替アプリケーション開発/FIXプロトコル</h1>
                        <table>
                            <tr>
                                <td>OS</td>
                                <td>Windows</td>
                            </tr>
                            <tr>
                                <td>開発言語</td>
                                <td>C#</td>
                            </tr>
                        </table>
                        <p>
                            金融業界で利用されているFIXプロトコルを使い<br>
                            自動処理を組み込んだWindows向けアプリケーションを作成。
                        </p>
                    </article>
                </div>
                <div class="slide" id="slide3">
                    <article>
                        <h1>Webシステム開発</h1>
                        <table>
                            <tr>
                                <td>OS</td>
                                <td>Ubuntu, CentOS</td>
                            </tr>
                            <tr>
                                <td rowspan="2">開発言語</td>
                                <td>PHP</td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                            </tr>
                        </table>
                        <p>
                            フレームワークは、Yii,Laravel,CakePHPなどを使用。<br>
                            新規システムの開発や、既存システムの改修なども行なっています。
                        </p>
                    </article>
                </div>
            </section>
        </div>

        <div class="section" id="section3">
            <section>
                <h1>メンバー</h1>
                <article>
                    <h1>加藤 洋一</h1>
                    <p>代表 / ソフトウェアエンジニア</p>
                    <p>1999年からニットデザイナーとして、デザイン、生産、輸出入、販売までを5年間行う。<br>
                        手作業の日々から一転、日常を自動化させたいと考え、SEを目指す。<br>
                        2004年からSEとして、Windows系アプリケーションのパッケージ開発を11年間行う。<br>
                        2016年より"キャットシステムズ”を設立。<br>
                        全業務を担当。
                    </p>
                </article>
                <article>
                    <h1>とらキチ</h1>
                    <p>ねこ / キャットシステムズ　メインキャラクター</p>
                    <p>2016年より"キャットシステムズ"に参画。<br>
                        主に睡眠学習と、ストレスの軽減業務を担当。
                    </p>
                </article>
            </section>
        </div>

        <div class="section" id="section4">
            <section>
                <h1>Google フォームよりお問い合わせください</h1>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfN_qpIG_HXyBMr6nMgsZVsNX1JHyVfLLL9bfm9Y1_AReArDA/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
            </section>
        </div>
    </div>

    {{--@if (!have_posts())--}}
    {{--<div class="alert alert-warning">--}}
    {{--{{ __('Sorry, no results were found.', 'sage') }}--}}
    {{--</div>--}}
    {{--{!! get_search_form(false) !!}--}}
    {{--@endif--}}

    {{--@while (have_posts()) @php the_post() @endphp--}}
    {{--@include('partials.content-'.get_post_type())--}}
    {{--@endwhile--}}

    {{--{!! get_the_posts_navigation() !!}--}}
@endsection

@section('footerinclude')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css">
    <script type="text/javascript"
            src={{get_template_directory_uri()}}/assets/scripts/util/jquery.fullpage.js></script>
    {{--src={{get_template_directory_uri()}}/assets/scripts/jquery.fullpage.min.js></script>--}}
    {{--src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>--}}
    <script type="text/javascript">
        //using document ready...
        jQuery(function ($) {
            $(document).ready(function () {
                //initialising fullpage.js in the jQuery way
                $('#fullpage').fullpage({
                    sectionsColor: ['#ff5f45', '#0798ec', '#fc6c7c', '#fec401'],
                    navigation: true,
                    slidesNavigation: true,
                });

                // calling fullpage.js methods using jQuery
                $('#moveSectionUp').click(function (e) {
                    e.preventDefault();
                    $.fn.fullpage.moveSectionUp();
                });

                $('#moveSectionDown').click(function (e) {
                    e.preventDefault();
                    $.fn.fullpage.moveSectionDown();
                });
            });
        });
    </script>
    {{--<script type="text/javascript">--}}
    {{--var myFullpage = new fullpage('#fullpage', {--}}
    {{--verticalCentered: true,--}}
    {{--sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE']--}}
    {{--});--}}
    {{--</script>--}}
@endsection


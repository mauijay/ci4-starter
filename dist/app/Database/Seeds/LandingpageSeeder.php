<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LandingpageSeeder extends Seeder
{
    public function run()
    {
      $lpm = model('LandingPageModel');
      $lps = [
        [
          'user_id'       => 1,
          'client_id'     =>  1056,
          'lp_name'       => 'Happy Hour',
          'lp_title'      => 'Sushi and Sake',
          'lp_slug'       => 'hi-one-sushi-and-sake',
          'lp_cta'        => 4,
          'lp_image'      => 'landingPage101.jpg',
          'lp_img_alt'    => 'xxx',
          'lp_favicon'    => 'favicon.ico',
          'lp_status'     => 1,      
          'lp_template'   => 'website',
          'lp_views'      => 9949,
          'lp_clicks'     => 977,
          'id_category'   => 45,
          'facebook'      => 'facebook.com',
          'youtube'       => 'youtube.com',
          'twitter'       => 'twitter.com',
          'pinterest'     => 'pin.com',
          'phone'         => '808-600-7400',
          'email'         => 'solutions@808businesssolutions.com',
          'map'           => 'https://maps.app.goo.gl/AabjnMT8igmcuznc8',
          'f_app'         => 'f8675309',
          'g_app'         => 'g8675309',        
          'lp_md'         => 'write a meta desc here',
          'lp_key'        => 'one keyword'
        ],
        [
          'user_id'       => 1,
          'client_id'     =>  1050,
          'lp_name'       => 'Complete On-Page SEO Checklist',
          'lp_title'      => 'Jays Test Page',
          'lp_slug'       => 'complete-on-page-seo-checklist',
          'lp_cta'        => 1,
          'lp_image'      => 'landingPage101.jpg',
          'lp_img_alt'    => 'Seo Checklist promotion offer landing page screenshot',
          'lp_favicon'    => 'favicon.ico',
          'lp_status'     => 1,      
          'lp_template'   => 'bs5',
          'lp_views'      => 509,
          'lp_clicks'     => 77,
          'id_category'   => 45,
          'facebook'      => 'facebook.com',
          'youtube'       => 'youtube.com',
          'twitter'       => 'twitter.com',
          'pinterest'     => 'pin.com',
          'phone'         => '808-600-7400',
          'email'         => 'solutions@808businesssolutions.com',
          'map'           => 'https://maps.app.goo.gl/AabjnMT8igmcuznc8',
          'f_app'         => 'f8675309',
          'g_app'         => 'g8675309',        
          'lp_md'         => 'write a meta desc here',
          'lp_key'        => 'one keyword',
        ]
        ];
      foreach ($lps as $a) {
        $lpm->save($a);
      }     

      

      // add lp templates **********************************************
    $lptm = model('LandingPageTemplateModel');
    $templates = [
      [
        't_name'    => 'bs5',
        't_body'    => '<!doctype html>
          <html lang="en-US" class="h-100">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible"      content="IE=edge,chrome=1" />
            <meta http-equiv="Content-Type"         content="text/html; charset=utf-8" />
            <meta name="viewport"                   content="width=device-width, initial-scale=1">
            <!-- PreConnect -->
            <!-- Preload -->
            <!-- Prefetch -->    
            <meta name="title"                      content="<?= $lp->lp_title ?>" />
            <meta name="referrer"                   content="no-referrer-when-downgrade" />
            <meta name="robots"                     content="noindex" />
            <meta property="fb:profile_id"          content="https://www.facebook.com/808biz/about/">
            <meta name="description"                content="<?= $lp->lp_md ?>" />
            <meta name="keywords"                   content="<?= $lp->lp_key ?>" />
            <meta name="copyright"                  content="<?= base_url() ?>" />
            <meta name="thumbnail"                  content="<?= base_url("images/landingpages/").$lp->lp_slug ."/". $lp->lp_image ?>?w=1200&amp;h=630&amp;q=82&amp;auto=format&amp;fit=clip&amp;dm=1549300321&amp;s=22073df85960252f737f89ec92f32439" />
            <meta name="author"                     content="jaycadla@gmail.com">
            <meta name="format-detection"           content="telephone=8086007400">
        
            <!-- Schema.org markup for Google+ -->  
            <meta itemprop="name"                   content="<?= $lp->lp_title ?>">
            <meta itemprop="image"                  content="<?= $lp->lp_image ?>">
            <meta itemprop="genre"                  content="news" name="medium">
            <meta itemprop="inLanguage"             content="en-US">
            <meta itemprop="articleSection"         content="">
            <meta itemprop="datePublished"          content="<?= $lp->created_at ?>" name="pubdate">
            <meta itemprop="dateModified"           content="<?= $lp->updated_at ?>" name="lastmod">
            <meta itemprop="dateCreated"            content="<?= $lp->created_at ?>">
        
            <!-- Twitter Card data -->
            <meta name="twitter:card"               content="summary_large_image"><!-- summary -->
            <meta name="twitter:site"               content="@808biz">    
            <meta name="twitter:creator"            content="@jaylamping">
            <meta name="twitter:title"              content="<?= $lp->lp_title ?>">
            <meta name="twitter:description"        content="<?= $lp->lp_md ?> | follow @808biz">    
            <meta name="twitter:image"              content="<?= base_url("images/landingpages/").$lp->lp_slug ."/". $lp->lp_image ?>?w=1200&amp;h=630&amp;q=82&amp;auto=format&amp;fit=clip&amp;dm=1549300321&amp;s=22073df85960252f737f89ec92f32439" />
            <meta name="twitter:image:width"        content="800">
            <meta name="twitter:image:height"       content="418">
            
            <!-- Open Graph data -->
            <meta property="og:type"                content="website" /><!-- summary, website, article -->
            <meta property="og:site_name"           content="<?= config("App")->siteName ?? "808 Business Solutions" ?>">
            <meta property="og:title"               content="<?= $lp->lp_title ?>">
            <meta property="og:url"                 content="<?= current_url(); ?>">
            <meta property="og:image"               content="<?= base_url("images/landingpages/").$lp->lp_slug ."/". $lp->lp_image ?>?w=1200&amp;h=630&amp;q=82&amp;auto=format&amp;fit=clip&amp;dm=1549300321&amp;s=22073df85960252f737f89ec92f32439" />
            <meta property="og:image:width"         content="1200">
            <meta property="og:image:height"        content="630">
            <meta property="og:description"         content="<?php if(isset($lp->md) && $lp->md != "" ) { echo $lp->md; } else { echo  $desc ?? "808 Business Solutions"; } ?> | 808 Business Solutions">
            <meta property="og:locale"              content="en_US">
            <meta property="og:image:secure_url"    content="<?= base_url("uploads/blog/ogimg/").$lp->post_img ?>" />    
            <meta property="og:see_also"            content="https://www.instagram.com/808biz/">
            <meta property="og:see_also"            content="https://www.youtube.com/channel/UCKugQRHtUSvf9Ge0TKqoi8g">
            <meta property="og:see_also"            content="https://www.linkedin.com/company/808biz/">
            <meta property="og:see_also"            content="https://www.facebook.com/808biz/">
            <meta property="og:see_also"            content="https://twitter.com/808biz">
        
            <meta name="google-site-verification" content="" />
        
             
            <meta property="article:publisher"      content="https://www.facebook.com/808biz">
            <meta property="article:modified_time"  content="<?= $lp->created_at; ?>">  
        
            <link rel="canonical"   href="<?php echo current_url(); ?>">      
            <link rel="author"      href="/humans.txt"                    type="text/plain">
            <link rel="home"        href="<?= base_url(); ?>">
            
            <link rel="stylesheet"  href="<?= base_url("assets/css/admin_styles.css?").echo time(); ?>">
            <link rel="stylesheet"  href="<?= base_url(); ?>/vendor/fontawesome/css/all.min.css">
            <style>
              .cover-container {
                max-width: 90em;
              }      
            </style>
        
            <!-- Google Analytics -->
            <script>
            (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,"script","https://www.google-analytics.com/analytics.js","ga");    
            ga("create", "UA-XXXXX-Y", "auto");
            ga("send", "pageview");
            </script>
            <!-- End Google Analytics -->    
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":
            new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src=
            "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,"script","dataLayer","GTM-KPGNS8JZ");</script>
            <!-- End Google Tag Manager -->
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-EZ25KGEN2C"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag("js", new Date());
            
              gtag("config", "G-EZ25KGEN2C");
            </script>
          </head>
          <body class="d-flex h-100 text-center ">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPGNS8JZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-white">
              <header class="mb-auto">
                <div>
                  <img class="rounded mx-auto d-block" width="300"  src="/images/clients/<?= $lp->getclientlogo() ?>" alt="<?= $lp->getclientname() ?> logo">
                </div>
              </header>            
              <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                  <h1 class="display-4 fw-bold lh-1 mb-3"><?= $lp->lp_name ?></h1>
                  <p class="col-lg-10 fs-4"><?= $lp->lp_cta ?></p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                  <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" data-nlok-ref-guid="31409457-aac2-43b2-9bdb-d75fe1af9382">
                      <label for="floatingInput">Email address</label>              
                    </div>           
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit"><?= $lp->cta_button ?></button>                        
                  </form>
                </div>
              </div>    
              <footer class="mt-auto ">
                <div id="copyrights">
                  <div class="container">
                    <div class="col-md-12 text-center text-md-end">
                      <div class="d-flex justify-content-center  mb-2">            
                        <?php if(isset($lp->facebook)): ?>
                        <a href="<?= $lp->facebook ?>" target="_blank" class="social-icon border-transparent si-small h-bg-facebook me-5">
                          <i class="fab fa-facebook-f"></i>                  
                        </a>
                        <?php endif; ?>
                        <?php if(isset($lp->youtube)): ?>
                        <a href="<?= $lp->youtube ?>" target="_blank" class="social-icon border-transparent si-small h-bg-youtube me-5">
                          <i class="fab fa-youtube"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(isset($lp->twitter)): ?>
                        <a href="<?= $lp->twitter ?>" target="_blank" class="social-icon border-transparent si-small h-bg-twitter me-5">
                          <i class="fab fa-google"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(isset($lp->pinterest)): ?>
                        <a href="<?= $lp->pinterest ?>" target="_blank" class="social-icon border-transparent si-small h-bg-pinterest me-5">
                          <i class="fab fa-pinterest-p"></i>
                        </a>
                        <?php endif; ?>
                      </div>                
                    </div>            
                  </div>
                </div>
                <p>Copyright © 808 Business Solutions <?= date("Y"); ?>, All rights reserved | Use of this site constitutes acceptance of our <a href="<?= route_to("terms.service")?>" target="_blank" rel="noopener noreferrer">Terms of Use</a> and <a href="<?= route_to("privacy.policy")?>" target="_blank" rel="noopener noreferrer">Privacy Policy</a> (Your California <a href="<?= route_to("cookie.policy")?>" target="_blank" rel="noopener noreferrer"> Rights</a>).</p>        
              </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
          </body>
        </html>'          
      ],
      [
        't_name'    => 'index',
        't_body'    => '
        <!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.104.2">
            <title>Starter Template · Bootstrap v5.2</title>
        
            <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
        
            
        
            
        
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- Favicons -->
            <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
            <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
            <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
            <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
            <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
            <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
            <meta name="theme-color" content="#712cf9">
        
        
            <style>
              .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
              }
        
              @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                  font-size: 3.5rem;
                }
              }
        
              .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
              }
        
              .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
              }
        
              .bi {
                vertical-align: -.125em;
                fill: currentColor;
              }
        
              .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
              }
        
              .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
              }
            </style>
        
            
            <!-- Custom styles for this template -->
            <link href="starter-template.css" rel="stylesheet">
          </head>
          <body>
            
        <div class="col-lg-8 mx-auto p-4 py-md-5">
          <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
              <span class="fs-4">Starter template</span>
            </a>
          </header>
        
          <main>
            <h1>Get started with Bootstrap</h1>
            <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap"s compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>
        
            <div class="mb-5">
              <a href="/docs/5.2/examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
            </div>
        
            <hr class="col-3 col-md-2 mb-5">
        
            <div class="row g-5">
              <div class="col-md-6">
                <h2>Starter projects</h2>
                <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
                <ul class="icon-list ps-0">
                  <li class="d-flex align-items-start mb-1"><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
                  <li class="text-muted d-flex align-items-start mb-1">Bootstrap Parcel starter (coming soon!)</li>
                </ul>
              </div>
        
              <div class="col-md-6">
                <h2>Guides</h2>
                <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                <ul class="icon-list ps-0">
                  <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/introduction/">Bootstrap quick start guide</a></li>
                  <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/webpack/">Bootstrap Webpack guide</a></li>
                  <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/parcel/">Bootstrap Parcel guide</a></li>
                  <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/vite/">Bootstrap Vite guide</a></li>
                  <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/contribute/">Contributing to Bootstrap</a></li>
                </ul>
              </div>
            </div>
          </main>
          <footer class="pt-5 my-5 text-muted border-top">
            Created by the Bootstrap team &middot; &copy; 2022
          </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </body>
        </html>
        '         
      ],
      [
        't_name'    => 'index2',
        't_body'    => '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta name="description" content="" />
                <meta name="author" content="" />
                <title>Landing Page - Start Bootstrap Theme</title>
                <!-- Favicon-->
                <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
                <!-- Bootstrap icons-->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
                <!-- Google fonts-->
                <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
                <!-- Core theme CSS (includes Bootstrap)-->
                <link href="css/styles.css" rel="stylesheet" />
            </head>
            <body>
                <!-- Navigation-->
                <nav class="navbar navbar-light bg-light static-top">
                    <div class="container">
                        <a class="navbar-brand" href="#!">Start Bootstrap</a>
                        <a class="btn btn-primary" href="#signup">Sign Up</a>
                    </div>
                </nav>
                <!-- Masthead-->
                <header class="masthead">
                    <div class="container position-relative">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="text-center text-white">
                                    <!-- Page heading-->
                                    <h1 class="mb-5">Generate more leads with a professional landing page!</h1>
                                    <!-- Signup form-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- * * SB Forms Contact Form * *-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- This form is pre-integrated with SB Forms.-->
                                    <!-- To make this form functional, sign up at-->
                                    <!-- https://startbootstrap.com/solution/contact-forms-->
                                    <!-- to get an API token!-->
                                    <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                        <!-- Email address input-->
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                            </div>
                                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                        </div>
                                        <!-- Submit success message-->
                                        <!---->
                                        <!-- This is what your users will see when the form-->
                                        <!-- has successfully submitted-->
                                        <div class="d-none" id="submitSuccessMessage">
                                            <div class="text-center mb-3">
                                                <div class="fw-bolder">Form submission successful!</div>
                                                <p>To activate this form, sign up at</p>
                                                <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                            </div>
                                        </div>
                                        <!-- Submit error message-->
                                        <!---->
                                        <!-- This is what your users will see when there is-->
                                        <!-- an error submitting the form-->
                                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Icons Grid-->
                <section class="features-icons bg-light text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                                    <h3>Fully Responsive</h3>
                                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                                    <h3>Bootstrap 5 Ready</h3>
                                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                                    <h3>Easy to Use</h3>
                                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Image Showcases-->
                <section class="showcase">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url("assets/img/bg-showcase-1.jpg")"></div>
                            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                <h2>Fully Responsive Design</h2>
                                <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it"s a phone, tablet, or desktop the page will behave responsively!</p>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-lg-6 text-white showcase-img" style="background-image: url("assets/img/bg-showcase-2.jpg")"></div>
                            <div class="col-lg-6 my-auto showcase-text">
                                <h2>Updated For Bootstrap 5</h2>
                                <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url("assets/img/bg-showcase-3.jpg")"></div>
                            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                <h2>Easy to Use & Customize</h2>
                                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonials-->
                <section class="testimonials text-center bg-light">
                    <div class="container">
                        <h2 class="mb-5">What people are saying...</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                                    <h5>Margaret E.</h5>
                                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                                    <h5>Fred S.</h5>
                                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I"ve been using it to create lots of super nice landing pages."</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                                    <h5>Sarah W.</h5>
                                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Call to Action-->
                <section class="call-to-action text-white text-center" id="signup">
                    <div class="container position-relative">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                                <!-- Signup form-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                                    <!-- Email address input-->
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                        </div>
                                        <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            <p>To activate this form, sign up at</p>
                                            <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Footer-->
                <footer class="footer bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><a href="#!">About</a></li>
                                    <li class="list-inline-item">⋅</li>
                                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                                    <li class="list-inline-item">⋅</li>
                                    <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                                    <li class="list-inline-item">⋅</li>
                                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                                </ul>
                                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-4">
                                        <a href="#!"><i class="bi-facebook fs-3"></i></a>
                                    </li>
                                    <li class="list-inline-item me-4">
                                        <a href="#!"><i class="bi-twitter fs-3"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#!"><i class="bi-instagram fs-3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </body>
        </html>
        '          
      ],
      [
        't_name'    => 'simple',
        't_body'    => '<!DOCTYPE html>
        <html lang="en">
        
        <head>
          <meta charset="utf-8">
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
          <title>RM A/C Services - Serving Oahu and Surrounding areas</title>
          <meta content="" name="description">
          <meta content="" name="keywords">
        
          <!-- Favicons -->
          <link href="<?=base_url()?>vendor/simple/assets/img/favicon.png" rel="icon">
          <link href="<?=base_url()?>vendor/simple/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        
          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        
          <!-- Vendor CSS Files -->
          <link href="<?=base_url()?>vendor/simple/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="<?=base_url()?>vendor/simple/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        
          <!-- Template Main CSS File -->
          <link href="<?=base_url()?>vendor/simple/assets/css/style.css" rel="stylesheet">
        
          <!-- =======================================================
          * Template Name: Siimple
          * Updated: Jul 27 2023 with Bootstrap v5.3.1
          * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
          * Author: BootstrapMade.com
          * License: https://bootstrapmade.com/license/
          ======================================================== -->
        </head>
        
        <body>
        
          <!-- ======= Header ======= -->
          <header id="header">
            <div class="container-fluid">
        
              <div class="logo">
                <h1><a href="index.html">RM A/C Services</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?=base_url()?>vendor/simple/assets/img/logo.png" alt="" class="img-fluid"></a>-->
              </div>
        
              <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
              <nav class="nav-menu">
                <ul>
                  <li class="active"><a href="#header" class="scrollto">Home</a></li>
                  <li><a href="#about" class="scrollto">About Us</a></li>
                  <li><a href="#why-us" class="scrollto">Why Us</a></li>
                  <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                      <li><a href="#">Drop Down 1</a></li>
                      <li class="drop-down"><a href="#">Drop Down 2</a>
                        <ul>
                          <li><a href="#">Deep Drop Down 1</a></li>
                          <li><a href="#">Deep Drop Down 2</a></li>
                          <li><a href="#">Deep Drop Down 3</a></li>
                          <li><a href="#">Deep Drop Down 4</a></li>
                          <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Drop Down 3</a></li>
                      <li><a href="#">Drop Down 4</a></li>
                      <li><a href="#">Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#contact" class="scrollto">Contact Us</a></li>
                </ul>
              </nav><!-- .nav-menu -->
        
            </div>
          </header><!-- End #header -->
        
          <!-- ======= Hero Section ======= -->
          <section id="hero">
            <div class="hero-container">
              <h1>Welcome to RM A/C Services</h1>
              <h2>Please, fill out the for below to be notified for the latest updates!</h2>
        
              <form action="forms/notify.php" method="post" role="form" class="php-email-form">
                <div class="row no-gutters">
                  <div class="col-md-6 form-group pr-md-1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group pl-md-1">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
        
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your notification request was sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Notify me!</button></div>
              </form>
            </div>
          </section><!-- #hero -->
        
          <main id="main">
        
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container">
        
                <div class="row">
                  <div class="col-lg-6">
                    <img src="<?=base_url()?>vendor/simple/assets/img/about-img.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum
                    </p>
                  </div>
                </div>
        
              </div>
            </section><!-- End About Section -->
        
            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
              <div class="container">
        
                <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                      <img src="<?=base_url()?>vendor/simple/assets/img/why-us-1.jpg" class="card-img-top" alt="...">
                      <div class="card-icon">
                        <i class="bx bx-book-reader"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="">Our Mission</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                      <img src="<?=base_url()?>vendor/simple/assets/img/why-us-2.jpg" class="card-img-top" alt="...">
                      <div class="card-icon">
                        <i class="bx bx-calendar-edit"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="">Our Plan</a></h5>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                      <img src="<?=base_url()?>vendor/simple/assets/img/why-us-3.jpg" class="card-img-top" alt="...">
                      <div class="card-icon">
                        <i class="bx bx-landscape"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="">Our Vision</a></h5>
                        <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
                      </div>
                    </div>
                  </div>
                </div>
        
              </div>
            </section><!-- End Why Us Section -->
        
            <!-- ======= Frequenty Asked Questions Section ======= -->
            <section class="faq">
              <div class="container">
        
                <div class="section-title">
                  <h2>Frequenty Asked Questions</h2>
                </div>
        
                <ul class="faq-list">
        
                  <li>
                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                      </p>
                    </div>
                  </li>
        
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
        
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>
        
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
        
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                      </p>
                    </div>
                  </li>
        
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                      </p>
                    </div>
                  </li>
        
                </ul>
        
              </div>
            </section><!-- End Frequenty Asked Questions Section -->
        
            <!-- ======= Contact Us Section ======= -->
            <section id="contact" class="contact section-bg">
              <div class="container">
        
                <div class="section-title">
                  <h2>Contact Us</h2>
                </div>
        
                <div class="row justify-content-center">
        
                  <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
                    <div class="info">
                      <div class="address">
                        <i class="bx bx-map"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                      </div>
        
                      <div class="email">
                        <i class="bx bx-envelope"></i>
                        <p>info@example.com</p>
                      </div>
        
                      <div class="phone">
                        <i class="bx bx-phone-call"></i>
                        <p>+1 5589 55488 55s</p>
                      </div>
                    </div>
        
                    <div class="social-links">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
        
                  </div>
        
                  <div class="col-lg-5 col-md-7">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Contact Us Section -->
        
          </main><!-- End #main -->
        
          <!-- ======= Footer ======= -->
          <footer id="footer">
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span>808biz</span></strong>. All Rights Reserved
              </div>
              <div class="credits">       
                Designed by <a href="https://808.biz/">808 BIZ</a>
              </div>
            </div>
          </footer>
          <!-- End #footer -->
        
          <!-- Vendor JS Files -->
          <script src="<?=base_url()?>vendor/simple/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url()?>vendor/simple/assets/vendor/php-email-form/validate.js"></script>
        
          <!-- Template Main JS File -->
          <script src="<?=base_url()?>vendor/simple/assets/js/main.js"></script>
        
        </body>
        
        </html>'          
      ]      
    ];

    foreach ($templates as $tp) {
      $lptm->save($tp);
    }
    
    }
}

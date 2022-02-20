<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
                background-color: #007bff;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    {{-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg> --}}
                    <img src="tiktok.jpg" height="100px" alt="Flowers in Chania" float="left"> 
                    The future of classroom is here ! We present 
                    <br>
                    to you the system that is able to support VR, AR and 360 videos.
                </div>
                <html lang="en">
                  <head>
                    <title>Cloud Template - Free Bootstrap 4 Template by Colorlib</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    
                    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
                    <link rel="stylesheet" href="css/animate.css">
                    
                    <link rel="stylesheet" href="css/owl.carousel.min.css">
                    <link rel="stylesheet" href="css/owl.theme.default.min.css">
                    <link rel="stylesheet" href="css/magnific-popup.css">
                    
                    <link rel="stylesheet" href="css/flaticon.css">
                    <link rel="stylesheet" href="css/style.css">
                  </head>
                  <body>
                    
                      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                        <div class="container">
                          <a class="navbar-brand" href="index.html">Cloud Template</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                          </button>
                
                          <div class="collapse navbar-collapse" id="ftco-nav">
                            @if (Route::has('login'))
                            <ul class="navbar-nav ml-auto">
                                @auth
                              <li class="nav-item active"><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                              @else
                              <li class="nav-item"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                              @if (Route::has('register'))
                              <li class="nav-item"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                              @endif
                              @endif
                            </ul>
                          </div>
                        </div>
                      </nav>
                    <!-- END nav -->
                
                    <div class="hero-wrap js-fullheight">
                      <div class="overlay"></div>
                      <div class="container-fluid px-0">
                          <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
                              <img class="one-third js-fullheight align-self-end order-md-first img-fluid" src="images/undraw_co-working_825n.svg" alt="">
                            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                                <div class="text mt-5">
                                    <span class="subheading">Cloud Template</span>
                                <h1 class="mb-3"><span>Cloud,</span> <span>Management,</span> <span>Template</span></h1>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#" class="btn btn-secondary px-4 py-3">Get in touch</a></p>
                              </div>
                            </div>
                            </div>
                      </div>
                    </div>
                
                    <section class="ftco-section ftco-partner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm ftco-animate">
                                    <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
                                </div>
                                <div class="col-sm ftco-animate">
                                    <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
                                </div>
                                <div class="col-sm ftco-animate">
                                    <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
                                </div>
                                <div class="col-sm ftco-animate">
                                    <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
                                </div>
                                <div class="col-sm ftco-animate">
                                    <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- <section class="ftco-domain">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
                                    <h2>Search Your Domain Name</h2>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                                <div class="col-lg-7 p-5 ftco-wrap ftco-animate">
                                    <form action="#" class="domain-form d-flex mb-3">
                              <div class="form-group domain-name">
                                <input type="text" class="form-control name px-4" placeholder="Enter your domain name...">
                              </div>
                              <div class="form-group domain-select d-flex">
                                  <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="" id="" class="form-control">
                                      <option value="">.com</option>
                                    <option value="">.net</option>
                                    <option value="">.biz</option>
                                    <option value="">.co</option>
                                    <option value="">.me</option>
                                  </select>
                                </div>
                                <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
                                </div>
                            </form>
                            <p class="domain-price mt-2">
                                <span><small>.com</small> $9.75</span> 
                                <span><small>.net</small> $9.50</span> 
                                <span><small>.biz</small> $8.95</span> 
                                <span><small>.co</small> $7.80</span>
                                <span><small>.me</small> $7.95</span>
                            </p>
                                </div>
                            </div>
                        </div>
                    </section> -->
                  
                    <section class="ftco-section services-section bg-light">
                      <div class="container">
                          <div class="row justify-content-center mb-5">
                          <div class="col-md-8 text-center heading-section ftco-animate">
                            <h2 class="mb-3">Cloud Services</h2>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-cloud"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">Cloud databases</h3>
                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>      
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-server"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">Website Hosting</h3>
                                <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>    
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-customer-service"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">File Storage</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>      
                          </div>
                                    <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-life-insurance"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">Forex Trading</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>      
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-cloud-computing"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">File Backups</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>    
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-settings"></span>
                                </div>
                              <div class="media-body pl-4">
                                <h3 class="heading">Remote Desktop</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                            </div>      
                          </div>
                        </div>
                      </div>
                    </section>
                
                
                    <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center mb-5">
                          <div class="col-md-8 text-center heading-section ftco-animate">
                            <h2 class="mb-3">What Our Software Can Do For You</h2>
                          </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-6 py-5 d-flex align-items-center">
                                    <img src="images/undraw_referral_4ki4.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 py-5">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate d-flex">
                                            <div class="media block-6 services border d-flex p-3 mb-3">
                                        <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                            <span class="flaticon-cloud-computing"></span>
                                        </div>
                                      <div class="media-body pl-4">
                                        <h3 class="heading">Resposive Design</h3>
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
                                      </div>
                                    </div>
                                        </div>
                                        <div class="col-md-12 ftco-animate d-flex">
                                            <div class="media block-6 services border d-flex p-3 mb-3">
                                        <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                            <span class="flaticon-cloud"></span>
                                        </div>
                                      <div class="media-body pl-4">
                                        <h3 class="heading">Andriod Apps Development</h3>
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
                                      </div>
                                    </div>
                                        </div>
                                        <div class="col-md-12 ftco-animate d-flex">
                                            <div class="media block-6 services border d-flex p-3 mb-3">
                                        <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                            <span class="flaticon-server"></span>
                                        </div>
                                      <div class="media-body pl-4">
                                        <h3 class="heading">iOs Apps Development</h3>
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
                                      </div>
                                    </div>
                                        </div>
                                        <div class="col-md-12 ftco-animate d-flex">
                                            <div class="media block-6 services border d-flex p-3 mb-3">
                                        <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                            <span class="flaticon-database"></span>
                                        </div>
                                      <div class="media-body pl-4">
                                        <h3 class="heading">UX/UI Design</h3>
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
                                      </div>
                                    </div>
                                        </div>
                                        <div class="col-md-12 ftco-animate d-flex">
                                            <div class="media block-6 services border d-flex p-3 mb-3">
                                        <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                            <span class="flaticon-database"></span>
                                        </div>
                                      <div class="media-body pl-4">
                                        <h3 class="heading">Print Ready Design</h3>
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts</p>
                                      </div>
                                    </div>
                                        </div>
                                    </div>
                          </div>
                            </div>
                        </div>
                    </section>
                
                    <section class="ftco-section ftco-counter img" id="section-counter">
                        <div class="container pb-md-5">
                            <div class="row justify-content-center mb-5">
                          <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
                              <h2 class="mb-3">We Always Try To Understand Users Expectation</h2>
                          </div>
                        </div>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row">
                                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                      <div class="text">
                                        <strong class="number" data-number="12000">0</strong>
                                        <span>Download</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                      <div class="text">
                                        <strong class="number" data-number="100">0</strong>
                                        <span>Awards Won</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                      <div class="text">
                                        <strong class="number" data-number="4050">0</strong>
                                        <span>Contributors</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                      <div class="text">
                                        <strong class="number" data-number="9000">0</strong>
                                        <span>Satisfied Customers</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                
                    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h3>Have any question about us?</h3>
                                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                <a href="#" class="btn btn-tertiary px-4 py-3">Get in Touch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
                    <section class="ftco-section ftco-no-pb bg-light ftco-faqs">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="img img-faqs mb-4 mb-sm-0" style="background-image:url(images/about-2.jpg);">
                                        </div>
                                </div>
                                <div class="col-lg-6 pl-lg-5">
                                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                                        <!-- <span class="subheading">FAQs</span> -->
                                <h2 class="mb-3">Frequently Asks Questions</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                                          <div class="card">
                                            <div class="card-header p-0" id="headingOne">
                                              <h2 class="mb-0">
                                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                    <p class="mb-0">How to Make an Account?</p>
                                                  <i class="fa" aria-hidden="true"></i>
                                                </button>
                                              </h2>
                                            </div>
                                            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                              <div class="card-body py-3 px-0">
                                                  <ol>
                                                      <li>Far far away, behind the word mountains</li>
                                                      <li>Consonantia, there live the blind texts</li>
                                                      <li>When she reached the first hills of the Italic Mountains</li>
                                                      <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                                      <li>Separated they live in Bookmarksgrove right</li>
                                                  </ol>
                                              </div>
                                            </div>
                                          </div>
                
                                          <div class="card">
                                            <div class="card-header p-0" id="headingTwo" role="tab">
                                              <h2 class="mb-0">
                                                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                                    <p class="mb-0">How to manage your Dashboard?</p>
                                                  <i class="fa" aria-hidden="true"></i>
                                                </button>
                                              </h2>
                                            </div>
                                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="card-body py-3 px-0">
                                                  <ol>
                                                      <li>Far far away, behind the word mountains</li>
                                                      <li>Consonantia, there live the blind texts</li>
                                                      <li>When she reached the first hills of the Italic Mountains</li>
                                                      <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                                      <li>Separated they live in Bookmarksgrove right</li>
                                                  </ol>
                                              </div>
                                            </div>
                                          </div>
                
                                          <div class="card">
                                            <div class="card-header p-0" id="headingThree" role="tab">
                                              <h2 class="mb-0">
                                                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                    <p class="mb-0">How to grow your investments funds?</p>
                                                  <i class="fa" aria-hidden="true"></i>
                                                </button>
                                              </h2>
                                            </div>
                                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="card-body py-3 px-0">
                                                  <ol>
                                                      <li>Far far away, behind the word mountains</li>
                                                      <li>Consonantia, there live the blind texts</li>
                                                      <li>When she reached the first hills of the Italic Mountains</li>
                                                      <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                                      <li>Separated they live in Bookmarksgrove right</li>
                                                  </ol>
                                              </div>
                                            </div>
                                          </div>
                
                                          <div class="card">
                                            <div class="card-header p-0" id="headingFour" role="tab">
                                              <h2 class="mb-0">
                                                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                                    <p class="mb-0">What are those requirements for businesses?</p>
                                                  <i class="fa" aria-hidden="true"></i>
                                                </button>
                                              </h2>
                                            </div>
                                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="card-body py-3 px-0">
                                                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                            </div>
                        </div>
                        </div>
                    </section>
                
                    <section class="ftco-section bg-light">
                        <div class="container">
                            <div class="row justify-content-center mb-5 pb-3">
                          <div class="col-md-7 text-center heading-section ftco-animate">
                            <h2 class="mb-4">Our Best Pricing</h2>
                          </div>
                        </div>
                            <div class="row d-flex">
                            <div class="col-lg-3 col-md-6 ftco-animate">
                              <div class="block-7">
                                <div class="text-center">
                                    <h2 class="heading">Basic Plan</h2>
                                    <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>
                                    <span class="excerpt d-block">100% free. Forever</span>
                                    <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                                    
                                    <ul class="pricing-text mb-4">
                                      <li><strong>150 GB</strong> Bandwidth</li>
                                      <li><strong>100 GB</strong> Storage</li>
                                      <li><strong>$1.00 / GB</strong> Overages</li>
                                      <li>All features</li>
                                    </ul>
                                    <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 ftco-animate">
                              <div class="block-7">
                                <div class="text-center">
                                    <h2 class="heading">Advance Plan</h2>
                                    <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
                                    <span class="excerpt d-block">All features are included</span>
                                    <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                                    
                                    <ul class="pricing-text mb-4">
                                      <li><strong>450 GB</strong> Bandwidth</li>
                                      <li><strong>400 GB</strong> Storage</li>
                                      <li><strong>$2.00 / GB</strong> Overages</li>
                                      <li>All features</li>
                                    </ul>
                                    <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 ftco-animate">
                              <div class="block-7">
                                <div class="text-center">
                                    <h2 class="heading">Expert Plan</h2>
                                    <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
                                    <span class="excerpt d-block">All features are included</span>
                                    <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                                    
                                    <ul class="pricing-text mb-4">
                                      <li><strong>250 GB</strong> Bandwidth</li>
                                      <li><strong>200 GB</strong> Storage</li>
                                      <li><strong>$5.00 / GB</strong> Overages</li>
                                      <li>All features</li>
                                    </ul>
                                    <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6 ftco-animate">
                              <div class="block-7">
                                <div class="text-center">
                                    <h2 class="heading">Pro Plan</h2>
                                    <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
                                    <span class="excerpt d-block">All features are included</span>
                                    <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                                    
                                    <ul class="pricing-text mb-4">
                                      <li><strong>450 GB</strong> Bandwidth</li>
                                      <li><strong>400 GB</strong> Storage</li>
                                      <li><strong>$20.00 / GB</strong> Overages</li>
                                      <li>All features</li>
                                    </ul>
                                      <a href="#" class="btn btn-tertiary d-block px-3 py-3 mb-4">Choose Plan</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                
                    <section class="ftco-section testimony-section">
                      <div class="container">
                        <div class="row justify-content-center mb-5 pb-3">
                          <div class="col-md-7 text-center heading-section ftco-animate">
                            <h2 class="mb-4">What Users Saying</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                          </div>
                        </div>
                        <div class="row ftco-animate justify-content-center">
                          <div class="col-md-10">
                            <div class="carousel-testimony owl-carousel ftco-owl">
                              <div class="item">
                                <div class="testimony-wrap d-flex">
                                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                  </div>
                                  <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Web</p>
                                    <span class="position">Marketing Manager</span>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="testimony-wrap d-flex">
                                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                  </div>
                                  <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Web</p>
                                    <span class="position">Interface Designer</span>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="testimony-wrap d-flex">
                                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                  </div>
                                  <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Web</p>
                                    <span class="position">UI Designer</span>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="testimony-wrap d-flex">
                                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                  </div>
                                  <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Web</p>
                                    <span class="position">Web Developer</span>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="testimony-wrap d-flex">
                                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                  </div>
                                  <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Web</p>
                                    <span class="position">System Analyst</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                
                    <section class="ftco-section bg-light">
                      <div class="container">
                        <div class="row justify-content-center mb-5 pb-3">
                          <div class="col-md-7 text-center heading-section ftco-animate">
                            <h2>Recent Blog</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                              </a>
                              <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                  <div><a href="#">May 17, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ftco-animate">
                            <div class="blog-entry" data-aos-delay="100">
                              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                              </a>
                              <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                  <div><a href="#">May 17, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ftco-animate">
                            <div class="blog-entry" data-aos-delay="200">
                              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                              </a>
                              <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                  <div><a href="#">May 17, 2020</a></div>
                                  <div><a href="#">Admin</a></div>
                                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">Everthing You Need to Know About Cloud Template</a></h3>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                
                
                    <footer class="ftco-footer ftco-bg-dark ftco-section">
                      <div class="container">
                        <div class="row mb-5">
                          <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                              <h2 class="ftco-heading-2">Cloud Template</h2>
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <ul class="ftco-footer-social list-unstyled mb-0">
                                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="ftco-footer-widget mb-4 ml-md-5">
                              <h2 class="ftco-heading-2">Unseful Links</h2>
                              <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Company</a></li>
                                <li><a href="#" class="py-2 d-block">Pricing</a></li>
                                <li><a href="#" class="py-2 d-block">Leadership</a></li>
                                <li><a href="#" class="py-2 d-block">Blog</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md">
                             <div class="ftco-footer-widget mb-4">
                              <h2 class="ftco-heading-2">Navigational</h2>
                              <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Join Us</a></li>
                                <li><a href="#" class="py-2 d-block">Blog</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Condition</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Office</h2>
                                <div class="block-23 mb-3">
                                  <ul>
                                    <li><span class="mr-3 fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                    <li><a href="#"><span class="mr-3 fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                    <li><a href="#"><span class="mr-3 fa fa-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                  </ul>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 text-center">
                
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div>
                        </div>
                      </div>
                    </footer>
                    
                  
                
                  <!-- loader -->
                  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
                
                
                  <script src="js/jquery.min.js"></script>
                  <script src="js/jquery-migrate-3.0.1.min.js"></script>
                  <script src="js/popper.min.js"></script>
                  <script src="js/bootstrap.min.js"></script>
                  <script src="js/jquery.easing.1.3.js"></script>
                  <script src="js/jquery.waypoints.min.js"></script>
                  <script src="js/jquery.stellar.min.js"></script>
                  <script src="js/owl.carousel.min.js"></script>
                  <script src="js/jquery.magnific-popup.min.js"></script>
                  <script src="js/jquery.animateNumber.min.js"></script>
                  <script src="js/scrollax.min.js"></script>
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
                  <script src="js/google-map.js"></script>
                  <script src="js/main.js"></script>
                    
                  </body>
                </html>
                

             
                </div>
            </div>
        </div>
    </body>
</html>

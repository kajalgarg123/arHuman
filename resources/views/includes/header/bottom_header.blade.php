
    <header>
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-main-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll sticky-logo" href="{{url('/')}}">
                                  <img src="{{asset('img/logo.png')}}">
                                </a>
                            </div>
                           <div class="collapse navbar-collapse main-menu bs-main-navbar-collapse-1" id="navbar-main">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="{{url('/counterfeit')}}">كتيب مكافحة التزييف</a>
                                    </li>  
									<li class="button-product">
                                        <a href="{{url('/spc-language')}}">ملخص خصائص المنتج (SPC)</a> 
                                    </li>
								</ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var isshow = localStorage.getItem('isshow');
                if (isshow == null) {
                     setTimeout(function(){
                         swal({
                              title: "I verify that I am a HealthCare Professional",
                              icon: "info",
                              buttons: true,
                              buttons: ["No", "Yes"],
                              closeOnClickOutside: false,
                            })
                            .then((yes) => {
                              if (yes) {
                                localStorage.setItem('isshow', 1);
                                return true;
                                
                              } else {
                                window.location.replace('blank');
                              } 
                            });
                       },3000); // 5000 to load it after 5 seconds from page load
                }
          
        });
    </script>
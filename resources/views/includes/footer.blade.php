
	<div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
					<img src="{{asset('img/takedalogo.jpg')}}">
                    <p>Part of the Takeda group</p>
				</div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="suscribe-text text-center">
                        <h3>Welcome to our eBusiness company</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-head">
                                        <p>All rights reserved. SHIRE and the Shire Logo are registered trademarks of Shire Pharmaceutical Holdings Ireland Limited or its affiliates.</p>
                                        <p>Human Albumin is a trademark of Baxter International Inc, a wholly owned, indirect subsidiary of Shire plc.</p>
                                        <p>Shire is part of the Takeda group</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end single footer -->
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                 <div class="footer-head">
                                    <h4>Contact Us:</h4>
                                    <p>The Official registered Distributer for Baxter Human Albumin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <p>MULTIPHARMA:</p>

                                       <p>Tel: <a href="tel:0224182931">0224182931</a></p> 
                                        <p>Fax: 024141320</p>
                                        <p>Hot Line:16300</p>
                                        <p>Email : <a href="mailto:tender@multipharma-eg.com" target="_top">tender@multipharma-eg.com</a></p>
                                   
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                        <p>BIO EGYPT:</p>

                                        <p>Tel: <a href="tel:0223624442">0223624442</a> - <a href="tel:0223624441">0223624441</a></p>
                                        <p>Email :<a href="mailto:info@bioegypt.net" target="_top">info@bioegypt.net</a></p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <a href="https://www.shire.com" target="_blank">www.shire.com</a>
                                    <a href="https://www.takeda.com" target="_blank">www.takeda.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="footer-area-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="copyright text-center">
								<p><span>Copyright © 2019. Human Albumin . All Rights Reserved.</span><a href="{{ url('/terms-condition') }}">Terms & Condition</a><a href="{{ url('/privacy_policy') }}">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
    <!-- JavaScript Libraries -->
    
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/parallax/parallax.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/appear/jquery.appear.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('.collapse').on('shown.bs.collapse', function() {
            $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hidden.bs.collapse', function() {
            $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    </script>
    
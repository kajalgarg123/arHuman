@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
  <div class="home-banner">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="title1">About Takeda: Better Health, Brighter Future <br></h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-3 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <a class="ready-btn page-scroll" href="{{ url('spc-language') }}">Summary of Product Characteristics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <!-- single-well end-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <h2 class="sec-head">Better Health, Brighter Future</h2>
                            <P>
                                Takeda is a patient-focused, values-based, R&D-driven global biopharmaceutical company committed to bringing Better Health and a Brighter Future to people worldwide. Our passion and pursuit of potentially life-changing treatments for 
                                patients are deeply rooted in our distinguished 237-year history in Japan.<br> We are thrilled to be given a greater opportunity to make a signiﬁcant difference in even more people’s lives.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About area -->
    <div id="patientNeeds">
        <div class="container">
            <h2 class="primeColr"><b>SERVING THE NEEDS OF OUR PATIENTS</b></h2>
            <div class="row">
                <div class="col-md-6">
                    <h4><b>TAKEDA-ISM</b></h4>
                    <p>
                        Our values serve as our guiding compass. Takeda-ism grounds us as we deliver on our role to serve the public by ensuring integrity in our every action for and on behalf of patients.
                    </p>
                </div>
                <div class="col-md-6 needImg">
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/integrity.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/fairness.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/honesty.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/perserverance.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">                    
                    <h4><b>OUR PRIORITIES</b></h4>
                    <p>
                        We make decisions and take action by focusing on our four priorities, in this order:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="container prioriTies">
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>
                        <div class="col-md-1">
                                
                        </div>
                        <div class="col-md-1">
                            <h1>1</h1>
                        </div>
                        <div class="col-md-9">
                            <p class="primeColr">PUT THE PATIENT AT THE CENTER</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>2</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">BUILD TRUST WITH SOCIETY</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>3</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">REINFORCE OUR REPUTATION</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>4</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">DEVELOP THE BUSINESS</p>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="unwaverCommit" class="area-padding">
        <div class="container">
            <h2 class="primeColr"><b>AN UNWAVERING COMMITMENT TO INNOVATION </b></h2>
            <p>
                We aspire to bring our leadership in translating science into life-changing medicines to the next level, in our core focus areas:
            </p>
            <div class="row">
                <div class="container">
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/oncology.png') }}" alt="">
                        <p><span>Oncology</span></p>
                    </div>
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/gastroEnterology.png') }}" alt="">
                        <p><span>Gastro-Enterology</span></p>
                    </div>
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/neuroscience.png') }}" alt="">
                        <p><span>Neuroscience</span></p>
                    </div>
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/rareDieases.png') }}" alt="">
                        <p><span>Rare Dieases</span></p>
                    </div>
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/plasmaDerivedTherapies.png') }}" alt="">
                        <p><span>Plasma Derived Therapies</span></p>
                    </div>
                    <div class="col-md-2 col-sm-4 subUnwaverCommit">
                        <img src="{{ asset('/img/home/vaccines.png') }}" alt="">
                        <p><span>Vaccines</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="primeColr"><b>OUR TEAM: </b></h2>
        <p>The Official registered Distributer for Baxter Human Albumin</p>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <p>MULTIPHARMA:</p>
                <p>Tel: <a href="tel:0224182931">0224182931</a> </p>
                <p>Fax: 024141320</p>
                <p>Hot Line:16300</p>
                <p>Email : <a href="mailto:tender@multipharma-eg.com" target="_top"> tender@multipharma-eg.com</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <p>BIO EGYPT:</p>
                <p>Tel: <a href="tel:0223624442">0223624442</a> - <a href="tel:0223624441">0223624441</a></p>
                <p>Email : <a href="mailto:info@bioegypt.net">info@bioegypt.net </a></p>
            </div>
        </div>
        
    </div>
</div>
@endsection
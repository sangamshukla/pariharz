@extends('layouts.main')

@section('content')
<div class="inner-banner has-base-color-overlay text-center" style="background: url({{asset('asset/images/background/1.jpg')}});">
    <div class="container">
        <div class="box">
            <h3>Our projects</h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">about us</a>
                </li>
                <li>
                    our projects
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>



<section class="latest-project sec-padd">
    <div class="container">
        
        
        <ul class="post-filter list-inline">
            <li class="active" data-filter=".filter-item">
                <span>View All</span>
            </li>
            <li data-filter=".Consulting">
                <span>Consulting</span>
            </li>
            <li data-filter=".Finance">
                <span>Finance</span>
            </li>
            <li data-filter=".Marketing">
                <span>Marketing</span>
            </li>
            <li data-filter=".Growth">
                <span>Growth</span>
            </li>
        </ul>

        <div class="row masonary-layout filter-layout">
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/1.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/1.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="title center">
                        <h5>Consumer Products</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 filter-item Consulting">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/2.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/2.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Financial Income</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item Finance Growth">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/3.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/3.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Business Growth</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item Marketing Finance">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/4.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/4.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Latest Technology</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item Consulting Marketing">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/5.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/5.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Transporation Service</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item video">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/6.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/6.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Best Consultation</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item video">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/7.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/7.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Strategy & Development</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item video">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/8.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/8.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>International Meet</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 filter-item video">
                <div class="single-project">
                    <div class="img-box">
                        <img src="{{asset('asset/images/project/9.jpg')}}" alt="Awesome Image"/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{asset('asset/images/project/9.jpg')}}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title center">
                        <h5>Employees Skills</h5>
                    </div>
                </div>
            </div>


        </div><!-- /.row -->

        <div class="border-bottom"></div>
        <br><br>
        <ul class="page_pagination center">
            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active tran3s">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

    </div><!-- /.container -->
</section><!-- /.latest-project sec-pad -->


@endsection
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aboutpage Header</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    {{-- TinyMCE Editor  --}}
    @include('components.head.tinymce-config')
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       @include('components.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('components.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Aboutpage Header </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Individual</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Homepae</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Header</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- overview  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-section" id="overview">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h2>Overview</h2>
                                    <p class="lead">Iframe of section being edited.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <iframe style="border:2px #000 solid" src="https://coronation.interactivedigital.com.gh/" title="iFrame" width="100%" height="400px" scrolling="no" frameborder="yes" allow=""></iframe>
                    </div>
                </div>


            <form action="{{ route('pns-section1-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row mb-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
                    <h3>Section 1</h3>
                </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            @php
                                $caption = $pns->sec1_caption;
                                $body = $pns->sec1_body;
                            @endphp

                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="exampleFormControlTextarea1">Caption</label>
                                        <textarea id="shortText" name="caption1">{{ $caption }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="exampleFormControlTextarea1">Body</label>
                                        <textarea id="shortText" name="body1">{{ $body }}</textarea>
                                    </div>
                                </div>
                        </div>

                        </div>
                        </div>
                    </div>



                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">

                        <a href="?card=motor" class="btn btn-primary btn-lg" style="margin-right: 10px">Motor Insurance  &nbsp
                            @if (request('card') == 'motor' || is_null(request('card')))
                            <span class="badge-dot badge-success"></span>
                            @endif
                        </a>

                        <a href="?card=travel" class="btn btn-primary btn-lg" style="margin-right: 10px">Travel Insurance &nbsp
                            @if (request('card') == 'travel')
                            <span class="badge-dot badge-success"></span>
                            @endif
                        </a>

                        <a href="?card=house" class="btn btn-primary btn-lg" style="margin-right: 10px">House Insurance &nbsp
                            @if (request('card') == 'house')
                            <span class="badge-dot badge-success"></span>
                            @endif
                        </a>

                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3>Header Image</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Upload Header Image</h5>
                            <div class="card-body">
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">File Input</label>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card text-white">
                            @if (request('card') == 'motor' || is_null(request('card')))
                            <img class="card-img" src="{{ asset($pns->motor_image) }}" alt="Card image">
                            @elseif (request('card') == 'house')
                            <img class="card-img" src="{{ asset($pns->house_image) }}" alt="Card image">
                            @elseif (request('card') == 'travel')
                            <img class="card-img" src="{{ asset($pns->travel_image) }}" alt="Card image">
                            @endif
                            {{-- <div class="card-img-overlay">
                                <a href="#" class="btn btn-primary">Full Image</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            @php
                            if(request('card') == 'motor' || is_null(request('card')))
                            {
                                $caption = $pns->motor_caption;
                                $body = $pns->motor_body;
                                $submit_value = 'motor';
                            }elseif (request('card') == 'travel') {
                                $caption = $pns->travel_caption;
                                $body = $pns->travel_body;
                                $submit_value = 'travel';
                            }elseif (request('card') == 'house') {
                                $caption = $pns->house_caption;
                                $body = $pns->house_body;
                                $submit_value = 'house';
                            }
                            @endphp
                            @include('components.form-group.left-right-text-form')
                            <button class="btn btn-primary" type="submit" name="submit" value="{{ $submit_value }}" >Submit</button>
                        </form>
                        </div>
                    </div>
                </div>

                </div>
            </div>


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('components.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>

</html>
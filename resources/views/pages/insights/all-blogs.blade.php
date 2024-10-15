<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coronation Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>





    {{-- TinyMCE Editor  --}}
    @include('components.head.tinymce-config')


    {{-- Toastr Notifications  --}}
    @include('components.head.notif')

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
                            <h2 class="pageheader-title">Blog List</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Individual</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Aboutpage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 2rem;">
                        <a href="{{ route('add-blog') }}" class="btn btn-primary btn-lg" style="margin-right: 10px">Add New Blog</a>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="section-block">
                        <h3 class="section-title">All Blogs</h3>
                    </div>
                    <div class="card">
                        <div class="campaign-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Image</th>
                                        <th class="border-0">Blog Name</th>
                                        <th class="border-0">Publish Status</th>
                                        <th class="border-0">Date Added</th>
                                        <th class="border-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>
                                            <div class="m-r-10"><a href="{{ asset($blog->main_image) }}" target="_blank"><img src="{{ asset($blog->main_image) }}" alt="user" width="35"></a></div>
                                        </td>
                                        <td>{!! $blog->caption !!}</td>
                                        <td>
                                            @if ($blog->publish)
                                            <span class="badge badge-success">Published</span>
                                            @else
                                            <span class="badge badge-danger">Not Published</span>
                                            @endif
                                        </td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <div class="dropdown float-right">
                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                             </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="{{ route('publish-blog', ['id' => $blog->id]) }}" class="dropdown-item">
                                                        @if ($blog->publish)
                                                            Unpublish
                                                        @else
                                                            Publish
                                                        @endif
                                                    </a>
                                                    <!-- item-->
                                                    <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>

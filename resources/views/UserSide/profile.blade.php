<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="../assets/css/php/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="../assets/css/profile/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
<link href="{{ URL::to('assets/css/profile/toastr.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::to('assets/css/profile/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::to('assets/css/profile/toastr.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::to('assets/css/php/nucleo-svg.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::to('assets/css/profile/nucleo-icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::to('assets/js/profile/js.php') }}">
<script src="../assets/js/profile/custom/profile.js"></script>
<style>
    .navbar-vertical.navbar-expand-xs {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        overflow-y: unset;
        padding: 0;
        box-shadow: none;
    }
    .preloader {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-image: url('../assets/img/pre_loder.gif');
        background-repeat: no-repeat;
        background-color: rgba(255, 255, 255, 0.5);
        background-position: center;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>
        Dashboard
    </title>
</head>
<body class="g-sidenav-show  bg-gray-100">

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/media/avatars/aang.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                <span id="h_name"></span>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                <span id="headline"></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a href="javascript:;" data-toggle="modal" data-target="#userModel" id="profileModel">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile" aria-hidden="true"></i><span class="sr-only">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="w-full flex justify-center px-4">
                
                <div class="">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;" data-toggle="modal" data-target="#userInfoModel" id="getUserInfo">
                                        <i class="fas fa-user-edit text-secondary text-sm" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm" id="description"></p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <span id="name">{{ $userView->name }}</span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; <span id="mobile">{{ $userView->phone_number }}</span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <span id="email">{{ $userView->email }}</span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">joined at:</strong> &nbsp; <span id="location">{{ $userView->join_date }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="userModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="updateUser">
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name">Enter Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name"  id="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="name">Enter headline</label>
                                    <input type="text" class="form-control" placeholder="title" name="title" id="ftitle">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_1">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Information-->
        <div class="modal fade" id="userInfoModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="updateUserInfo">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name">Enter Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name"  id="infoName">
                            </div>
                            <div class="mb-3">
                                <label for="name">Enter Description</label>
                                <textarea name="description" id="infoDescription" class="form-control" placeholder="Description"  cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="name">Enter Mobile</label>
                                <input type="text" class="form-control" placeholder="Mobile" name="mobile"  id="infoMobile">
                            </div>
                            <div class="mb-3">
                                <label for="name">Enter Email</label>
                                <input type="text" class="form-control" placeholder="email" name="email"  id="infoEmail">
                            </div>
                            <div class="mb-3">
                                <label for="name">Enter Location</label>
                                <input type="text" class="form-control" placeholder="location" name="location"  id="infoLocation">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_2">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
@extends('plantilla')

@section('content')

<!-- Page Body -->
<div class="hk-pg-body">
    <div class="container-xxl">
        <div class="profile-wrap">
            <div class="profile-img-wrap">
                <img class="img-fluid rounded-5" src="dist/img/profile-bg.jpg" alt="Image Description">
            </div>
            <div class="profile-intro">
                <div class="card card-flush mw-400p bg-transparent">
                    <div class="card-body">
                        <div class="avatar avatar-xxl avatar-rounded position-relative mb-2">
                            <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img border border-4 border-white">
                            <span class="badge badge-indicator badge-success  badge-indicator-xl position-bottom-end-overflow-1 me-1"></span>
                        </div>
                        <h4>Kate Jones
                            <i class="bi-check-circle-fill fs-6 text-blue" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Top endorsed"></i>
                        </h4>
                        <p>
                            Venenatis tellus in metus vulputate
                        </p>
                        <ul class="list-inline fs-7 mt-2 mb-0">
                            <li class="list-inline-item d-sm-inline-block d-block mb-sm-0 mb-1 me-3">
                                <i class="bi bi-briefcase me-1"></i>
                                <a href="#">Co-Founder,</a>
                                <a href="#">Jampack</a>
                            </li>

                            <li class="list-inline-item d-sm-inline-block d-block mb-sm-0 mb-1 me-3">
                                <i class="bi bi-geo-alt me-1"></i>
                                <a href="#">San Francisco,</a>
                                <a href="#">US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <header class="profile-header">
                <ul class="nav nav-line nav-tabs nav-icon nav-light h-100 d-md-flex d-none">
                    <li class="nav-item">
                        <a class="d-flex align-items-center nav-link active h-100" data-bs-toggle="tab" href="#">
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center nav-link h-100" data-bs-toggle="tab" href="#">
                            <span class="nav-link-text">Network</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center nav-link h-100" data-bs-toggle="tab" href="#">
                            <span class="nav-link-text">Subscription</span>
                        </a>
                    </li>
                </ul>
                <select class="form-select mw-200p d-md-none d-flex me-2">
                    <option selected="">Profile</option>
                    <option value="1">Teams</option>
                    <option value="2">Projects</option>
                    <option value="3">Connection</option>
                </select>
                <div class="profile-options-wrap">
                    <a class="btn btn-icon btn-soft-secondary dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </header>
            <div class="row mt-7">
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Kate Jones</div>
                                    <div class="fs-7">Business Manager</div>
                                </div>
                            </div>
                            <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex text-center">
                                <div class="flex-1 border-end">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">154</span>
                                        <span class="d-block text-capitalize fs-7">photos</span>
                                    </div>
                                </div>
                                <div class="flex-1 border-end">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">65</span>
                                        <span class="d-block text-capitalize fs-7">followers</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">433</span>
                                        <span class="d-block text-capitalize fs-7">views</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0"><span><i class="bi bi-calendar-check-fill text-disabled me-2"></i><span class="text-muted">Went to:</span></span><span class="ms-2">Oh, Canada</span></li>
                            <li class="list-group-item border-0"><span><i class="bi bi-briefcase-fill text-disabled me-2"></i><span class="text-muted">Worked at:</span></span><span class="ms-2">Companey</span></li>
                            <li class="list-group-item border-0"><span><i class="bi bi-house-door-fill text-disabled me-2"></i><span class="text-muted">Lives in:</span></span><span class="ms-2">San Francisco, CA</span></li>
                            <li class="list-group-item border-0"><span><i class="bi bi-geo-alt-fill text-disabled me-2"></i><span class="text-muted">From:</span></span><span class="ms-2">Settle, WA</span></li>
                        </ul>
                    </div>
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <h6>You know these people ?</h6>
                            <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Evie Ono</span>
                                        <span class="d-block text-muted fs-7">Apple Inc</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-light" href="#"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar7.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Clay Masse</span>
                                        <span class="d-block text-muted fs-7">Hencework.com</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-light " href="#"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Madelyn Rascon</span>
                                        <span class="d-block text-muted fs-7">Godaddy.co.in</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-primary " href="#"><span class="icon"><span class="feather-icon"><i data-feather="check"></i></span></span></a>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Mitsoku Heid</span>
                                        <span class="d-block text-muted fs-7">Flipkart</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-primary" href="#"><span class="icon"><span class="feather-icon"><i data-feather="check"></i></span></span></a>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Eziquiel Merideth</span>
                                        <span class="d-block text-muted fs-7">Paypal</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-light" href="#"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Johnie Metoyer</span>
                                        <span class="d-block text-muted fs-7">Robocon</span>
                                    </div>
                                    <a class="btn btn-icon btn-rounded btn-sm btn-primary" href="#"><span class="icon"><span class="feather-icon"><i data-feather="check"></i></span></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <h6>Friends
                                <span class="badge badge-sm badge-light me-1">212</span>
                            </h6>
                            <div class="card-action-wrap">
                                <a href="#">View all</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gx-3 text-center">
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar1.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Evie Ono</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar2.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Clay Masse</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar3.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Madelyn Rascon</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar4.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Mitsoku Heid</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar5.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Eziquiel Merideth</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar6.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Johnie Metoyer</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar7.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Angelic Lauver</span>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="mb-2">
                                        <img src="dist/img/avatar8.jpg" alt="user" class="img-fluid rounded">
                                    </div>
                                    <span class="d-block fs-7 text-truncate">Cecilia Rios</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <h6>Groups
                                <span class="badge badge-sm badge-light me-1">12</span>
                            </h6>
                            <div class="card-action-wrap">
                                <a href="#">View all</a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Landscape Group</span>
                                        <span class="d-block text-muted fs-7">1.25K Members</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Josh Groben Fanclub</span>
                                        <span class="d-block text-muted fs-7">2M Members</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">UI/UX Lead</span>
                                        <span class="d-block text-muted fs-7">8K Members</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize">Design Yatra</span>
                                        <span class="d-block text-muted fs-7">14K Members</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <h6>Links
                                <span class="badge badge-sm badge-light me-1">5</span>
                            </h6>
                            <div class="card-action-wrap">
                                <a href="#">View all</a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-primary avatar-rounded">
                                            <span class="initial-wrap">G</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize text-truncate mw-150p">
                                            Google</span>
                                        <span class="d-block text-muted fs-7 text-truncate mw-150p">google.com</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-pink avatar-rounded">
                                            <span class="initial-wrap">AR</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize text-truncate mw-150p">Improve Your Business</span>
                                        <span class="d-block text-muted fs-7 text-truncate mw-150p">yahoo.com</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-warning avatar-rounded">
                                            <span class="initial-wrap">PR</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize text-truncate mw-150p">Cast The Cookware</span>
                                        <span class="d-block text-muted fs-7 text-truncate mw-150p">yahoo.com</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="media align-items-center">
                                    <div class="media-head me-3">
                                        <div class="avatar avatar-sm avatar-success avatar-rounded">
                                            <span class="initial-wrap">PR</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block text-capitalize text-truncate mw-150p">The Universe Thought Sds</span>
                                        <span class="d-block text-muted fs-7 text-truncate mw-150p">facebook.com</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card bg-primary text-center">
                        <div class="twitter-slider-wrap card-body">
                            <div class="twitter-icon text-center mb-3">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div id="tweets_fetch" class="owl-carousel light-owl-dots owl-theme"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-border card-profile-feed mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Huma Therman</div>
                                    <div class="fs-7">25 Min</div>
                                </div>
                            </div>
                            <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-5">There was that time artists at Sequence opted to hand-Sharpie the lorem ipsum passage on a line of paper bags they designed for Chipotle.</p>
                            <div class="card card-border">
                                <div class="position-relative">
                                    <img class="card-img-top d-block" src="dist/img/gallery/mock12.jpg" alt="Card image cap">
                                    <a href="#" class="btn btn-dark btn-rounded btn-pg-link"><span><span class="icon"><span class="feather-icon"><i data-feather="link-2"></i></span></span><span>Website</span></span></a>

                                </div>
                                <div class="card-body">
                                    <h5>Bacon chicken turducken spare ribs.</h5>
                                    <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of lorem ipsum knock offs featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-between">
                            <div>
                                <a href="#"><i class="bi bi-heart-fill text-primary"></i>30K</a>
                            </div>
                            <div>
                                <a href="#">1K comments</a>
                                <a href="#">12 shares</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-lg-4 mb-lg-4 mb-3">
                        <div class="card card-border card-profile-feed mb-0 rounded-bottom-0">
                            <div class="card-header card-header-action">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-sm avatar-rounded">
                                            <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="fw-medium text-dark">Johnie Metoyer</div>
                                        <div class="fs-7">03 hrs</div>
                                    </div>
                                </div>
                                <div class="card-action-wrap">
                                    <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text mb-5">Not to mention, Cupcake Ipsum, Bob Ross Ipsum (“happy little clouds”), and the furry Cat Ipsum.</p>
                                <div class="feed-img-layout">
                                    <div class="row h-200p">
                                        <div class="col-6 h-100">
                                            <div class="feed-img h-100" style="background-image:url(dist/img/gallery/mock11.jpg);"></div>
                                        </div>
                                        <div class="col-6 h-100">
                                            <div class="row h-100">
                                                <div class="col-sm-12 h-50 pb-2">
                                                    <div class="feed-img h-100" style="background-image:url(dist/img/gallery/mock12.jpg);"></div>
                                                </div>
                                                <div class="col-sm-12 h-50">
                                                    <div class="row h-100">
                                                        <div class="col-6 h-100">
                                                            <div class="feed-img h-100" style="background-image:url(dist/img/gallery/mock13.jpg);"></div>
                                                        </div>
                                                        <div class="col-6 h-100">
                                                            <div class="feed-img h-100" style="background-image:url(dist/img/gallery/mock14.jpg);"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-between">
                                <div>
                                    <a href="#"><i class="bi bi-heart-fill text-primary"></i>30K</a>
                                </div>
                                <div>
                                    <a href="#">1K comments</a>
                                    <a href="#">12 shares</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-border card-profile-feed border-top-0 rounded-top-0 mb-0">
                            <div class="card-body">
                                <button class="btn btn-light btn-sm btn-block mb-4">Hide comments</button>
                                <div class="comment-block">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <span class="cm-name">Martin Luther</span>
                                            </div>
                                            <p>From there, you can run truffle compile, truffle migrate and truffle test to compile your contracts, deploy those contracts to the network, and run their associated unit tests.</p>
                                            <div class="comment-action-wrap mt-3">
                                                <span>3 hours ago</span>
                                                <span class="comment-dot-sep">●</span>
                                                <a href="#">Reply</a>
                                                <span class="comment-dot-sep">●</span>
                                                <a href="#">Like</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer comment-block">
                                <form class="w-100">
                                    <div class="form-group mb-0">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-xs avatar-rounded">
                                                    <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <textarea class="form-control border-0 bg-transparent shadow-none" rows="1" placeholder="Leave a comment..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card card-border card-profile-feed">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="dist/img/avatar9.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Mitsoku Heid</div>
                                    <div class="fs-7">11 hrs</div>
                                </div>
                            </div>
                            <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-5">There was that time artists at Sequence opted to hand-Sharpie the lorem ipsum passage on a line of paper bags they designed for Chipotle.</p>
                            <div class="card card-border">
                                <div class="position-relative">
                                    <img class="card-img" src="dist/img/gallery/mock7.jpg" alt="Card image cap">
                                    <a href="#" class="btn-video-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-between">
                            <div>
                                <a href="#"><i class="bi bi-heart-fill text-primary"></i>30K</a>
                            </div>
                            <div>
                                <a href="#">1K comments</a>
                                <a href="#">12 shares</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Body -->


@endsection('content')

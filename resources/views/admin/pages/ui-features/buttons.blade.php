@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="row">
                <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Single color buttons</h4>
                    <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                    <div class="template-demo">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Rounded buttons</h4>
                    <p class="card-description">Add class <code>.btn-rounded</code></p>
                    <div class="template-demo">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                    <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                    <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                    <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                    <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                    <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                    <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                    <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                    <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="row">
                <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Outlined buttons</h4>
                    <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                    <div class="template-demo">
                    <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                    <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                    <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                    <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                    <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                    <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                    <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                    <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Inverse buttons</h4>
                    <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                    <div class="template-demo">
                    <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                    <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                    <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                    <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                    <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                    <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                    <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                    <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                    <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
            <div class="row">
                <div class="col-md-7">
                <div class="card-body">
                <h4 class="card-title">Icon Buttons</h4>
                <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                <div class="template-demo d-flex justify-content-between flex-nowrap">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                    <i class="ti-home"></i>
                    </button>
                    <button type="button" class="btn btn-dark btn-rounded btn-icon">
                    <i class="ti-world"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon">
                    <i class="ti-email"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-rounded btn-icon">
                    <i class="ti-star"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-rounded btn-icon">
                    <i class="ti-location-pin"></i>
                    </button>
                </div>
                <div class="template-demo d-flex justify-content-between flex-nowrap">
                    <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                    <i class="ti-home"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-dark btn-icon">
                    <i class="ti-world"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-danger btn-icon">
                    <i class="ti-email"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-info btn-icon">
                    <i class="ti-star"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-success btn-icon">
                    <i class="ti-location-pin"></i>
                    </button>
                </div>
                <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-heart text-danger"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-music-alt text-dark"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-star text-primary"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-bar-chart-alt text-info"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-stats-up text-success"></i>
                    </button>
                </div>
                <div class="template-demo d-flex justify-content-between flex-nowrap">
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-heart"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-music-alt"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-star"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-bar-chart-alt"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                    <i class="ti-stats-up"></i>
                    </button>
                </div>
                </div>
                </div>
                <div class="col-md-5">
                <div class="card-body">
                    <h4 class="card-title">Button Size</h4>
                    <p class="card-description">Use class <code>.btn-{size}</code></p>
                    <div class="template-demo">
                    <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                    <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                    </div>
                    <div class="template-demo mt-4">
                    <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                    <button type="button" class="btn btn-success btn-md">btn-md</button>
                    <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Block buttons</h4>
                <p class="card-description">Add class <code>.btn-block</code></p>
                <div class="template-demo">
                <button type="button" class="btn btn-info btn-lg btn-block">Block buttons
                    <i class="ti-menu float-right"></i>
                </button>
                <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">
                    <i class="ti-user"></i>
                    Block buttons
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

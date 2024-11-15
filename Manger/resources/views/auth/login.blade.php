@extends('layouts.master') {{-- Assuming you have a layout file, modify this as needed --}}

@section('content')

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/photo_2024-02-16_19-28-52.jpg" style="height: 500px; width: 500px" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>

                            </button>

                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="email"  name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   placeholder="Enter a valid email address" required >
                                   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   placeholder="Enter password" name="password" required>
                                   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-success" style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                                                                                              class="link-danger">{{ __('Register') }}</a></p>

                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .link-danger {
            color: red; /* Set the color to red or the desired color */
        }
    </style>


@endsection

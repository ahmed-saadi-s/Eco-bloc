@extends('layouts.master')

@section('content')

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-75">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <img src="assets/img/photo_2024-02-16_19-28-52.jpg" style="height: 500px; width: 500px; top: 50px;"  class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-6 mt-10 col-lg-6 col-xl-4 offset-xl-2" style="position: relative; top: 60px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-4 me-3">Create an Account</p>
                        </div>

                        <!-- First Name and Last Name inputs in the same row -->
                        <div class="row mb-2">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" id="firstName" name="first_name" class="form-control form-control-lg @error('first_name') is-invalid @enderror" placeholder="First Name" required />
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" id="lastName" name="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror" placeholder="Last Name" required />
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Email, Phone, and City inputs -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email Address" required />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" placeholder="Phone Number" required />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="city">Location</label>
                            <select id="Location" name="Location" class="form-select @error('city') is-invalid @enderror" required>
                                <option value="" selected disabled>Select your Location</option>
                                <!-- Adding the cities -->
                                <option value="Saroujah">Saroujah</option>
                                <option value="Al-Qanawat">Al-Qanawat</option>
                                <option value="Jobar">Jobar</option>
                                <option value="Al-Midan">Al-Midan</option>
                                <option value="Al-Shaghour">Al-Shaghour</option>
                                <option value="Al-Qadam">Al-Qadam</option>
                                <option value="Kafr Sousa">Kafr Sousa</option>
                                <option value="Al-Mazza">Al-Mazza</option>
                                <option value="Barzeh">Barzeh</option>
                                <option value="Al-Qaboun">Al-Qaboun</option>
                                <option value="Rukn al-Din">Rukn al-Din</option>
                                <option value="Al-Salhiyya">Al-Salhiyya</option>
                                <option value="Al-Muhajireen">Al-Muhajireen</option>
                                <option value="Al-Yarmouk">Al-Yarmouk</option>
                            </select>
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" required />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Register Button -->
                        <div class="text-center text-lg-start mt-3 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-success" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}" class="link-danger">{{ __('Login') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Add any additional styles specific to the register page -->

@endsection

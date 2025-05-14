@extends('auth.base')


@section('content')

<div class="container">
     <div class="mt-4">
          <div class="card rounded-0 overflow-hidden shadow-none bg-white border">
               <div class="row g-0">
                    <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                         <img src="{{asset('assets/images/error/auth-img-register3.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-xl-4 order-xl-2">
                         <div class="card-body p-4 p-sm-5">
                              <h5 class="card-title">Sign Up</h5>
                              <p class="card-text mb-4">See your growth and get consulting support!</p>
                              <form class="form-body" method="POST" action="{{ route('register') }}">
                                   @csrf
                                   <div class="row g-3">
                                        <!-- Champ Name -->
                                        <div class="col-12">
                                             <label for="inputName" class="form-label">Name</label>
                                             <div class="ms-auto position-relative">
                                                  <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                       <i class="bi bi-person-circle"></i>
                                                  </div>
                                                  <input type="text" name="name" value="{{ old('name') }}" class="form-control radius-30 ps-5"
                                                       id="inputName" placeholder="Enter Name">
                                             </div>
                                             @error('name')
                                             <small class="text-danger">{{ $message }}</small>
                                             @enderror
                                        </div>
                              
                                        <!-- Champ Email -->
                                        <div class="col-12">
                                             <label for="inputEmailAddress" class="form-label">Email Address</label>
                                             <div class="ms-auto position-relative">
                                                  <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                       <i class="bi bi-envelope-fill"></i>
                                                  </div>
                                                  <input type="email" name="email" value="{{ old('email') }}" class="form-control radius-30 ps-5"
                                                       id="inputEmailAddress" placeholder="Email">
                                             </div>
                                             @error('email')
                                             <small class="text-danger">{{ $message }}</small>
                                             @enderror
                                        </div>
                              
                                        <!-- Champ Password -->
                                        <div class="col-12">
                                             <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                             <div class="ms-auto position-relative">
                                                  <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                       <i class="bi bi-lock-fill"></i>
                                                  </div>
                                                  <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword"
                                                       placeholder="Password">
                                             </div>
                                             @error('password')
                                             <small class="text-danger">{{ $message }}</small>
                                             @enderror
                                        </div>
                              
                                        <!-- Conditions -->
                                        <div class="col-12">
                                             <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="terms">
                                                  <label class="form-check-label" for="flexSwitchCheckChecked">
                                                       I Agree to the Terms & Conditions
                                                  </label>
                                             </div>
                                             @error('terms')
                                             <small class="text-danger">{{ $message }}</small>
                                             @enderror
                                        </div>
                              
                                        <!-- Submit -->
                                        <div class="col-12">
                                             <div class="d-grid">
                                                  <button type="submit" class="btn btn-primary radius-30">Sign Up</button>
                                             </div>
                                        </div>
                              
                                        <!-- Separateur -->
                                        <div class="col-12">
                                             <div class="login-separater text-center">
                                                  <span>OR SIGN UP WITH EMAIL</span>
                                                  <hr>
                                             </div>
                                        </div>
                              
                                        <!-- Réseaux sociaux -->
                                        <div class="col-12">
                                             <div class="d-flex align-items-center gap-3 justify-content-center">
                                                  <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                                                  <button type="button" class="btn btn-white text-primary"><i
                                                            class="bi bi-linkedin me-0"></i></button>
                                                  <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                                             </div>
                                        </div>
                              
                                        <!-- Lien vers connexion -->
                                        <div class="col-12 text-center">
                                             <p class="mb-0">Already have an account?
                                                  <a href="{{ route('login') }}">Sign in here</a>
                                             </p>
                                        </div>
                                   </div>
                              </form>                               
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>


@endsection
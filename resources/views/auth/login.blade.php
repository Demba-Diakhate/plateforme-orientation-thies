@extends('auth.base')

@section('content')

<div class="container">
     <div class="mt-4">
          <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
               <div class="row g-0">
                    <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                         <img src="{{asset('assets/images/error/auth-img-7.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-xl-4 order-xl-2">
                         <div class="card-body p-4 p-sm-5">
                              <h5 class="card-title">Connexion</h5>
                              <p class="card-text mb-4">See your growth and get consulting support!</p>
                    
                              <form class="form-body" method="POST" action="{{ route('login') }}">
                                   @csrf
                    
                                   <div class="row g-3">
                                        <div class="col-12">
                                             <label for="inputEmailAddress" class="form-label">Adresse Email</label>
                                             <div class="ms-auto position-relative">
                                                  <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                       <i class="bi bi-envelope-fill"></i>
                                                  </div>
                                                  <input type="email"
                                                       class="form-control radius-30 ps-5 @error('email') is-invalid @enderror" name="email"
                                                       id="inputEmailAddress" placeholder="Email" value="{{ old('email') }}">
                                             </div>
                                             @error('email')
                                             <div class="text-danger mt-1 small">{{ $message }}</div>
                                             @enderror
                                        </div>
                    
                                        <div class="col-12">
                                             <label for="inputChoosePassword" class="form-label">Mot de passe</label>
                                             <div class="ms-auto position-relative">
                                                  <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                       <i class="bi bi-lock-fill"></i>
                                                  </div>
                                                  <input type="password"
                                                       class="form-control radius-30 ps-5 @error('password') is-invalid @enderror"
                                                       name="password" id="inputChoosePassword" placeholder="Mot de passe">
                                             </div>
                                             @error('password')
                                             <div class="text-danger mt-1 small">{{ $message }}</div>
                                             @enderror
                                        </div>
                    
                                        <div class="col-6">
                                             <div class="form-check form-switch">
                                                  <input class="form-check-input" type="checkbox" name="remember"
                                                       id="flexSwitchCheckChecked">
                                                  <label class="form-check-label" for="flexSwitchCheckChecked">Se souvenir de moi</label>
                                             </div>
                                        </div>
                                        <div class="col-6 text-end">
                                             <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                        </div>
                    
                                        <div class="col-12">
                                             <div class="d-grid">
                                                  <button type="submit" class="btn btn-primary radius-30">Connexion</button>
                                             </div>
                                        </div>
                    
                                        <div class="col-12">
                                             <div class="login-separater text-center">
                                                  <span>Ou se connecter avec un réseau</span>
                                                  <hr>
                                             </div>
                                        </div>
                    
                                        <div class="col-12">
                                             <div class="d-flex align-items-center gap-3 justify-content-center">
                                                  <button type="button" class="btn btn-white text-danger"><i
                                                            class="bi bi-google me-0"></i></button>
                                                  <button type="button" class="btn btn-white text-primary"><i
                                                            class="bi bi-linkedin me-0"></i></button>
                                                  <button type="button" class="btn btn-white text-info"><i
                                                            class="bi bi-facebook me-0"></i></button>
                                             </div>
                                        </div>
                    
                                        <div class="col-12 text-center">
                                             <p class="mb-0">
                                                  Vous n'avez pas encore un compte ?
                                                  <a href="{{ route('register') }}">Créer un compte</a>
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
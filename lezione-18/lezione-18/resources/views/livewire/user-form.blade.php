
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Input Form</h3>
                  <x-success></x-success>
                  <form wire:submit.prevent="store" >
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" wire:model.live.debounce.400ms="firstName"/>
                          <label class="form-label" for="firstName">First Name</label>
                          @error('firstName')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg" wire:model.live.debounce.400ms="lastName"/>
                          <label class="form-label" for="lastName">Last Name</label>
                          @error('lastName')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" id="emailAddress" class="form-control form-control-lg" wire:model.live.debounce.400ms="email"/>
                          <label class="form-label" for="emailAddress">Email</label>
                          @error('email')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="form-outline">
                            <input type="password" id="password" class="form-control form-control-lg" wire:model.live.debounce.400ms="password"/>
                            <label class="form-label" for="password">Password</label>
                            @error('password')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
      
                      </div>
                      
                    </div>
      
                    
      
                    <div class="mt-4 pt-2">
                      <button class="btn btn-primary btn-lg" type="submit"> Salva</button>
                    </div>
                    <div class="mt-4 pt-2">
                      <button class="btn btn-primary btn-lg" type="submit" wire:click="resetForm"> Pulisci il form</button>
                    </div>
      
                  </form>

                  <h1>{{$firstName . $lastName . $email}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

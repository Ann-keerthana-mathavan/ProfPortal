 <!-- sign in page start -->
 <div class="hidden box modal modal-dialog modal-dialog-centered modal-cent">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h2 class="modal-title">Sign In</h2>
                 <button type="button" class="btn-close-top btn--close-modal">
                     <img src="./img/close button icon.png" class="sign-in-icon-close" alt="" />
                 </button>
             </div>
             <div class="text-center mt-3">
                 <img src="./img/signin logo.png" class="img-fluid" alt="" />
             </div>
             <div class="modal-body">
                 <div class="input-group mb-3">
                     <span class="input-group-text input-group-text-icon" id="basic-addon1"><img src="./img/user Icon.png" alt="" class="sign-in-icon" /></span>

                     <input type="text" class="form-control form-control-input" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                 </div>
                 <div class="input-group mb-3">
                     <span class="input-group-text input-group-text-icon" id="basic-addon1"><img src="./img/password icon.png" alt="" class="sign-in-icon" /></span>
                     <input type="password" class="form-control form-control-input toggle-password" id="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" />
                     <i class="fa fa-eye-slash eye-icon" id="toggleBtn"></i>
                 </div>

                 <div class="d-grid gap-2 d-md-flex justify-content-md-end forget-password">
                     <a class="btn-forget-password" data-bs-toggle="modal" data-bs-target="#resetBtn" href="#" role="button">Forget <b>password?</b></a>
                 </div>

                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                     <label class="form-check-label" for="flexCheckDefault">
                         Keep me signed in
                     </label>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary btn-sign-in">
                     Sign In
                 </button>
             </div>
         </div>
     </div>
 </div>
 <div class="overlay hidden"></div>
 <!-- Sign in page end -->
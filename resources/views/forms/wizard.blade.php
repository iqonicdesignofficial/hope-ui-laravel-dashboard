<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
         <div class="col-sm-12 col-lg-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                     <h4 class="card-title">Simple Wizard</h4>
               </div>
               </div>
               <div class="card-body">
               <form id="form-wizard1" class="text-center mt-3">
                     <ul id="top-tab-list" class="p-0 row list-inline">
                        <li class="col-lg-3 col-md-6 text-start mb-2 active" id="account">
                           <a href="javascript:void();">
                                 <div class="iq-icon me-3">
                                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                    </svg>
                                 </div>
                                 <span>Account</span>
                           </a>
                        </li>
                        <li id="personal" class="col-lg-3 col-md-6 mb-2 text-start">
                           <a href="javascript:void();">
                                 <div class="iq-icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                 </div>
                                 <span>Personal</span>
                           </a>
                        </li>
                        <li id="payment" class="col-lg-3 col-md-6 mb-2 text-start">
                           <a href="javascript:void();">
                                 <div class="iq-icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                 </div>
                                 <span>Image</span>
                           </a>
                        </li>
                        <li id="confirm" class="col-lg-3 col-md-6 mb-2 text-start">
                           <a href="javascript:void();">
                                 <div class="iq-icon me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                 </div>
                                 <span>Finish</span>
                           </a>
                        </li>
                     </ul>
                     <!-- fieldsets -->
                     <fieldset>
                        <div class="form-card text-start">
                           <div class="row">
                           <div class="col-7">
                                 <h3 class="mb-4">Account Information:</h3>
                           </div>
                           <div class="col-5">
                                 <h2 class="steps">Step 1 - 4</h2>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Email: *</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Id" />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Username: *</label>
                                    <input type="text" class="form-control" name="uname" placeholder="UserName" />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Password: *</label>
                                    <input type="password" class="form-control" name="pwd" placeholder="Password" />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Confirm Password: *</label>
                                    <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" />
                                 </div>
                           </div>
                           </div>
                        </div>
                        <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Next" >Next</button>
                     </fieldset>
                     <fieldset>
                        <div class="form-card text-start">
                           <div class="row">
                           <div class="col-7">
                                 <h3 class="mb-4">Personal Information:</h3>
                           </div>
                           <div class="col-5">
                                 <h2 class="steps">Step 2 - 4</h2>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">First Name: *</label>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Last Name: *</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Contact No.: *</label>
                                    <input type="text" class="form-control" name="phno" placeholder="Contact No." />
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Alternate Contact No.: *</label>
                                    <input type="text" class="form-control" name="phno_2" placeholder="Alternate Contact No." />
                                 </div>
                           </div>
                           </div>
                        </div>
                        <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Next" >Next</button>
                        <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-end me-1" value="Previous" >Previous</button>
                     </fieldset>
                     <fieldset>
                        <div class="form-card text-start">
                           <div class="row">
                           <div class="col-7">
                                 <h3 class="mb-4">Image Upload:</h3>
                           </div>
                           <div class="col-5">
                                 <h2 class="steps">Step 3 - 4</h2>
                           </div>
                           </div>
                           <div class="form-group">
                           <label class="form-label">Upload Your Photo:</label>
                           <input type="file" class="form-control" name="pic" accept="image/*">
                           </div>
                           <div class="form-group">
                           <label class="form-label">Upload Signature Photo:</label>
                           <input type="file" class="form-control" name="pic-2" accept="image/*">
                           </div>
                        </div>
                        <button type="button" name="next" class="btn btn-primary next action-button float-end" value="Submit" >Submit</button>
                        <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-end me-1" value="Previous" >Previous</button>
                     </fieldset>
                     <fieldset>
                        <div class="form-card">
                           <div class="row">
                           <div class="col-7">
                                 <h3 class="mb-4 text-left">Finish:</h3>
                           </div>
                           <div class="col-5">
                                 <h2 class="steps">Step 4 - 4</h2>
                           </div>
                           </div>
                           <br><br>
                           <h2 class="text-success text-center"><strong>SUCCESS !</strong></h2>
                           <br>
                           <div class="row justify-content-center">
                           <div class="col-3"> <img src="{{asset('images/pages/img-success.png')}}" class="img-fluid" alt="fit-image"> </div>
                           </div>
                           <br><br>
                           <div class="row justify-content-center">
                           <div class="col-7 text-center">
                                 <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                           </div>
                           </div>
                        </div>
                     </fieldset>
               </form>
               </div>
            </div>
         </div>
   </div>
</div>
</x-app-layout>

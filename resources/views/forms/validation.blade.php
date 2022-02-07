<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"> Default Validation</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
               <form>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" required>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" required>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="form-group input-group">
                           <span class="input-group-text" id="basic-addon1">@</span>
                           <input type="text" class="form-control" id="validationCustomUsername" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationDefault03">City</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationDefault04">State</label>
                        <select class="form-select" id="validationDefault04" required>
                           <option selected disabled value="">Choose...</option>
                           <option>...</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                        </label>
                     </div>
                  </div>
                  <div class="form-group">
                     <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"> Supported elements</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
               <form class="was-validated">
                  <div class="form-group">
                     <label for="validationTextarea" class="form-label">Textarea</label>
                     <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                     <div class="invalid-feedback">
                        Please enter a message in the textarea.
                     </div>
                  </div>
                  <div class="form-check form-group">
                     <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                     <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                     <div class="invalid-feedback">Example invalid feedback text</div>
                  </div>
                  <div class="form-check">
                     <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                     <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                  </div>
                  <div class="form-check form-group">
                     <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                     <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                     <div class="invalid-feedback">More example invalid feedback text</div>
                  </div>
                  <div class="form-group">
                     <select class="form-select" required aria-label="select example">
                        <option value="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <div class="invalid-feedback">Example invalid select feedback</div>
                  </div>
                  <div class="form-group mb-0">
                     <input type="file" class="form-control" aria-label="file example" required>
                     <div class="invalid-feedback">Example invalid form file feedback</div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Custom Validation</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
               <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-6">
                     <label for="validationCustom01" class="form-label">First name</label>
                     <input type="text" class="form-control" id="validationCustom01" required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="validationCustom02" class="form-label">Last name</label>
                     <input type="text" class="form-control" id="validationCustom02" required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="validationCustomUsername01" class="form-label">Username</label>
                     <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername01" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                           Please choose a username.
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="validationCustom03" class="form-label">City</label>
                     <input type="text" class="form-control" id="validationCustom03" required>
                     <div class="invalid-feedback">
                        Please provide a valid city.
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="validationCustom04" class="form-label">State</label>
                     <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                     </select>
                     <div class="invalid-feedback">
                        Please select a valid state.
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="validationCustom05" class="form-label">Zip</label>
                     <input type="text" class="form-control" id="validationCustom05" required>
                     <div class="invalid-feedback">
                        Please provide a valid zip.
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                           You must agree before submitting.
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tooltips</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
               <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltip01" class="form-label">First name</label>
                     <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                     <div class="valid-tooltip">
                        Looks good!
                     </div>
                  </div>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltip02" class="form-label">Last name</label>
                     <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                     <div class="valid-tooltip">
                        Looks good!
                     </div>
                  </div>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltipUsername" class="form-label">Username</label>
                     <div class="input-group has-validation">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                           Please choose a unique and valid username.
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltip03" class="form-label">City</label>
                     <input type="text" class="form-control" id="validationTooltip03" required>
                     <div class="invalid-tooltip">
                        Please provide a valid city.
                     </div>
                  </div>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltip04" class="form-label">State</label>
                     <select class="form-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                     </select>
                     <div class="invalid-tooltip">
                        Please select a valid state.
                     </div>
                  </div>
                  <div class="col-md-6 position-relative">
                     <label for="validationTooltip05" class="form-label">Zip</label>
                     <input type="text" class="form-control" id="validationTooltip05" required>
                     <div class="invalid-tooltip">
                        Please provide a valid zip.
                     </div>
                  </div>
                  <div class="col-12">
                     <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>

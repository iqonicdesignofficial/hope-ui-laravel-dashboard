<x-app-layout :assets="$assets ?? []">
   <div>
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Impressions</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border  bg-soft-danger rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Engagements Rate</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border bg-soft-info rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Reach</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border bg-soft-success rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Transport</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border  bg-soft-primary rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-info">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-info rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">5600</h2>
                        Doctors
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-warning">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-warning rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">5600</h2>
                        Nurses
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-danger">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-danger rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">3500</h2>
                        Patients
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-primary">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-primary rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">4500</h2>
                        Pharmacists
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-info text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Customers
                           <h2 class="counter">75</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-warning text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Products
                           <h2 class="counter">60</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-success text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        User
                           <h2 class="counter">80</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-danger text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Category
                           <h2 class="counter">45</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-primary">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Today</span>
                     </div>
                     <div>
                        <span>08:00 Hr</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-info">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Week</span>
                     </div>
                     <div>
                        <span>40:00 Hr</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-danger">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Issue</span>
                     </div>
                     <div>
                        <span class="counter">1200</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-warning">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Income</span>
                     </div>
                     <div>
                        <span class="counter">$54000</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-itmes-center">
                     <div>
                        <div class="p-3 rounded bg-soft-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="30px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                           </svg>
                        </div>
                     </div>
                     <div>
                        <h1>21K</h1>
                        <p class="mb-0">Order Served</p>
                     </div>
                     <div>
                        <div class="badge bg-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                           </svg>
                           <span>3.48%</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class=" bg-soft-success rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                     </div>
                     <div>
                        <h1 class="text-success counter">250M</h1>
                        <p class="text-success mb-0">Total Earning</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class=" bg-soft-info rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                     </div>
                     <div class="ms-5">
                        <h5 class="mb-1">Positive Reviews</h5>
                        <div>
                           <svg xmlns="http://www.w3.org/2000/svg" width="15px" color="orange" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="15px" color="orange" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="15px" color="orange" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="15px" color="orange" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="15px" color="orange" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                           </svg>
                        </div>
                        <h6 class="text-info">4.5/5</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body">
                  <h2 class="counter mb-3">$3450</h2>
                  <p class="mb-2">Your Current Balance</p>
                  <h6>20% ($520)</h6>
                  <a href="#" class="mt-4 btn btn-danger d-block rounded">Add credit</a>
                  <div class="mt-3">
                     <div class="pb-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                           <p class="mb-0">Insurance</p>
                           <h4>18</h4>
                        </div>
                        <div class="progress bg-soft-info shadow-none w-100" style="height: 10px">
                           <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="pb-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                           <p class="mb-0">Savings</p>
                           <h4>124</h4>
                        </div>
                        <div class="progress bg-soft-success shadow-none w-100" style="height: 10px">
                           <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="pb-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                           <p class="mb-0">Investment</p>
                           <h4>74</h4>
                        </div>
                        <div class="progress bg-soft-primary shadow-none w-100" style="height: 10px">
                           <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                           <p class="mb-0">Progress</p>
                           <h4>89</h4>
                        </div>
                        <div class="progress bg-soft-success shadow-none w-100" style="height: 10px">
                           <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-between">
                           <div>
                              <div class="d-flex">
                                 <div class="bg-primary text-white p-3 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <span>CUSTOMER</span>
                              <div>
                                 <h3 class="counter">60,586</h3>
                              </div>
                           </div>
                           <div class="mt-3">
                              <div class="badge bg-primary">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                 </svg>
                                 <span>3.48%</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-between">
                           <div>
                              <div class="d-flex">
                                 <div class="bg-warning text-white p-3 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <span>SALES</span>
                              <div>
                                 <h3 class="counter">80,586</h3>
                              </div>
                           </div>
                           <div class="mt-3">
                              <div class="badge bg-warning">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                 </svg>
                                 <span>3.48%</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-between">
                           <div>
                              <div class="d-flex">
                                 <div class="bg-info text-white p-3 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <span>PROFIT</span>
                              <div>
                                 <h3 class="counter">80%</h3>
                              </div>
                           </div>
                           <div class="mt-3">
                              <div class="badge bg-info">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                 </svg>
                                 <span>3.48%</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-between">
                           <div>
                              <div class="d-flex">
                                 <div class="bg-danger text-white p-3 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-3">
                              <span>LOSS</span>
                              <div>
                                 <h3 class="counter">15%</h3>
                              </div>
                           </div>
                           <div class="mt-3">
                              <div class="badge bg-danger">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                 </svg>
                                 <span>3.48%</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body p-3">
                  <h5>Assets</h5>
                  <div class="text-center">
                     <h1 class="counter mb-2">-108.56K</h1>
                     <p class="mb-0">Lorem ipsum dolor sit amet</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body p-3">
                  <h5>Liabilities</h5>
                  <div class="text-center">
                     <h1 class="counter mb-2">-425.20K</h1>
                     <p class="mb-0">Lorem ipsum dolor sit amet</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body p-3">
                  <h5>Working Capital</h5>
                  <div class="text-center">
                     <h1 class="counter mb-2">-380.40K</h1>
                     <p class="mb-0">Lorem ipsum dolor sit amet</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--last part-->
      <div class="row">
         <div class="col-lg-6">
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Revenue</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">$35000</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-primary">Monthly</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>Total Revenue</span>
                           </div>
                           <div>
                              <span>35%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Orders</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">2500</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-warning">Anual</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>New Orders</span>
                           </div>
                           <div>
                              <span>24%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Leads</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">$35000</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Today</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>New Leads</span>
                           </div>
                           <div>
                              <span>50%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Conversion</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">35%</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-info">This Month</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>This Month</span>
                           </div>
                           <div>
                              <span class="counter">30%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="border-bottom text-center pb-3">
                  <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar-80 mb-4">
                     <div>
                        <h5 class="mb-3">Bini Jets</h5>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                     <button type="button" class="btn btn-info mb-2">Assign</button>
                  </div>
                  <div class="d-flex justify-content-between mt-3">
                     <div>
                           <h2 class="mb-0 counter">4500</h2>
                        <div>Operations</div>
                     </div>
                     <div>
                           <h2 class="mb-0">3.9</h2>
                        <div>Medical Rating</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>

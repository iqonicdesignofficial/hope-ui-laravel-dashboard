<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="bg-soft-primary rounded p-3">
                     <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                  </div>
                  <div>
                     <span>Net Worth</span>
                  </div>
               </div>
               <div class="text-center">
                  <span>
                     <h2 class="counter">65M</h2>
                  </span>
                  <div>
                     <span class="text-success">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="10" height="10"  viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        10%
                     </span>
                     <span>Increased</span>
                  </div>
               </div>
            </div>
            <div id="chart-1"></div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="bg-soft-warning rounded p-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                     </svg>
                  </div>
                  <div>
                     <span>Todays Gains</span>
                  </div>
               </div>
               <div class="text-center">
                  <span>
                     <h2 class="counter">65M</h2>
                  </span>
                  <div>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"  width="10" height="10"  viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        20%
                     </span>
                     <span>Increased</span>
                  </div>
               </div>
            </div>
            <div id="chart-2"></div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="rounded p-3 bg-soft-success">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                     </svg>
                  </div>
                  <div>
                     <span>Total Users</span>
                  </div>
               </div>
               <div class="text-center">
                  <span>
                     <h2 class="counter">96.6K</h2>
                  </span>
                  <div>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg"  width="10" height="10"  viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        30%
                     </span>
                     <span>Increased</span>
                  </div>
               </div>
            </div>
            <div id="chart-3"></div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class=" rounded p-3 bg-soft-danger">
                     <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                     </svg>
                  </div>
                  <div>
                     <span>Orders Received</span>
                  </div>
               </div>
               <div class="text-center">
                  <span>
                     <h2 class="counter">15.5K</h2>
                  </span>
                  <div>
                     <span class="text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px"  viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        10%
                     </span>
                     <span>Increased</span>
                  </div>
               </div>
            </div>
            <div id="chart-4"></div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="bg-soft-primary rounded p-3">
                     <svg width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13,2.05C18.05,2.55 22,6.82 22,12C22,13.45 21.68,14.83 21.12,16.07L18.5,14.54C18.82,13.75 19,12.9 19,12C19,8.47 16.39,5.57 13,5.08V2.05M12,19C14.21,19 16.17,18 17.45,16.38L20.05,17.91C18.23,20.39 15.3,22 12,22C6.47,22 2,17.5 2,12C2,6.81 5.94,2.55 11,2.05V5.08C7.61,5.57 5,8.47 5,12A7,7 0 0,0 12,19M12,6A6,6 0 0,1 18,12C18,14.97 15.84,17.44 13,17.92V14.83C14.17,14.42 15,13.31 15,12A3,3 0 0,0 12,9L11.45,9.05L9.91,6.38C10.56,6.13 11.26,6 12,6M6,12C6,10.14 6.85,8.5 8.18,7.38L9.72,10.05C9.27,10.57 9,11.26 9,12C9,13.31 9.83,14.42 11,14.83V17.92C8.16,17.44 6,14.97 6,12Z" />
                     </svg>
                  </div>
                  <div>
                     <span>Total Sales</span>
                  </div>
               </div>
               <div class="d-flex justify-content-between align-items-center">
                  <span>
                     <h6 class="counter"><b>$18 378</b></h6>
                  </span>
                  <div id="iq-chart-box1"></div>
                  <div class=" d-flex align-items-center text-primary">
                     <b>+14%</b>
                     <svg xmlns="http://www.w3.org/2000/svg"  width="15" height="15"  viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="rounded p-3 bg-soft-danger">
                     <svg width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11.19,2.25C11.97,2.26 12.71,2.73 13,3.5L18,15.45C18.09,15.71 18.14,16 18.13,16.25C18.11,17 17.65,17.74 16.9,18.05L9.53,21.1C9.27,21.22 9,21.25 8.74,21.25C7.97,21.23 7.24,20.77 6.93,20L1.97,8.05C1.55,7.04 2.04,5.87 3.06,5.45L10.42,2.4C10.67,2.31 10.93,2.25 11.19,2.25M14.67,2.25H16.12A2,2 0 0,1 18.12,4.25V10.6L14.67,2.25M20.13,3.79L21.47,4.36C22.5,4.78 22.97,5.94 22.56,6.96L20.13,12.82V3.79M11.19,4.22L3.8,7.29L8.77,19.3L16.17,16.24L11.19,4.22M8.65,8.54L11.88,10.95L11.44,14.96L8.21,12.54L8.65,8.54Z" />
                     </svg>
                  </div>
                  <div>
                     <span>Sales Today</span>
                  </div>
               </div>
               <div class="d-flex justify-content-between align-items-center">
                  <span>
                     <h6 class="counter"><b>$190</b></h6>
                  </span>
                  <div id="iq-chart-box2"></div>
                  <div class="d-flex align-items-center text-danger">
                     <b>-6%</b>
                     <svg xmlns="http://www.w3.org/2000/svg"  width="15" height="15"  viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="rounded p-3 bg-soft-success">
                    <svg width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 3C7.58 3 4 4.79 4 7V17C4 19.21 7.59 21 12 21S20 19.21 20 17V7C20 4.79 16.42 3 12 3M18 17C18 17.5 15.87 19 12 19S6 17.5 6 17V14.77C7.61 15.55 9.72 16 12 16S16.39 15.55 18 14.77V17M18 12.45C16.7 13.4 14.42 14 12 14C9.58 14 7.3 13.4 6 12.45V9.64C7.47 10.47 9.61 11 12 11C14.39 11 16.53 10.47 18 9.64V12.45M12 9C8.13 9 6 7.5 6 7S8.13 5 12 5C15.87 5 18 6.5 18 7S15.87 9 12 9Z" />
                     </svg>
                  </div>
                  <div>
                     <span>Total Classon</span>
                  </div>
               </div>
               <div class="d-flex justify-content-between align-items-center">
                  <span>
                     <h6 class="counter"><b>45</b></h6>
                  </span>
                  <div id="iq-chart-box3">
                  </div>
                  <div class="d-flex align-items-center text-success">
                     <b>+0.36%</b>
                     <svg xmlns="http://www.w3.org/2000/svg"  width="15" height="15"  viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between">
                  <div class="rounded p-3 bg-soft-warning">
                     <svg xmlns="http://www.w3.org/2000/svg"  width="24px" height="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                     </svg>
                  </div>
                  <div>
                     <span>Total Profit</span>
                  </div>
               </div>
               <div class="d-flex justify-content-between align-items-center">
                  <div>
                     <span>
                        <h6 class="counter"><b>60</b></h6>
                     </span>
                  </div>
                  <div id="iq-chart-box4">
                  </div>
                  <div class=" d-flex align-items-center text-warning">
                     <b>+0.45%</b>
                     <svg xmlns="http://www.w3.org/2000/svg"  width="15" height="15"  viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between mb-3">
                  <div>
                     <span>Invoice Sent</span>
                  </div>
                  <div>
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
               <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                     <div class="border rounded p-3 bg-soft-primary me-3">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M19 3H5A2 2 0 0 0 3 5V19A2 2 0 0 0 5 21H19A2 2 0 0 0 21 19V5A2 2 0 0 0 19 3M5 19V17H8.13A4.13 4.13 0 0 0 9.4 19M19 19H14.6A4.13 4.13 0 0 0 15.87 17H19M19 15H14V16A2 2 0 0 1 10 16V15H5V5H19Z" />
                        </svg>
                     </div>
                     <h2 class="counter">352</h2>
                  </div>
                  <div class="pt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  viewBox="0 0 20 20" fill="#344ed1">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between mb-3">
                  <div>
                     <span>Credited From Accounts</span>
                  </div>
                  <div>
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
               <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                     <div class="border rounded p-3 bg-soft-danger me-3">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M19.07,4.93L17.66,6.34C19.1,7.79 20,9.79 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12C4,7.92 7.05,4.56 11,4.07V6.09C8.16,6.57 6,9.03 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12C18,10.34 17.33,8.84 16.24,7.76L14.83,9.17C15.55,9.9 16,10.9 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12C8,10.14 9.28,8.59 11,8.14V10.28C10.4,10.63 10,11.26 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12C14,11.26 13.6,10.62 13,10.28V2H12A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,9.24 20.88,6.74 19.07,4.93Z" />
                        </svg>
                     </div>
                     <h2 class="counter">$37K</h2>
                  </div>
                  <div class="pt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  viewBox="0 0 20 20" fill="#b91d12">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between mb-3">
                  <div>
                     <span>AVG Employee Costs</span>
                  </div>
                  <div>
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
               <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                     <div class="border rounded p-3 bg-soft-success me-3">
                        <svg  width="24px" height="24px" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21.4 11.6L12.4 2.6C12 2.2 11.5 2 11 2H4C2.9 2 2 2.9 2 4V11C2 11.5 2.2 12 2.6 12.4L11.6 21.4C12 21.8 12.5 22 13 22C13.5 22 14 21.8 14.4 21.4L21.4 14.4C21.8 14 22 13.5 22 13C22 12.5 21.8 12 21.4 11.6M13 20L4 11V4H11L20 13M6.5 5C7.3 5 8 5.7 8 6.5S7.3 8 6.5 8 5 7.3 5 6.5 5.7 5 6.5 5M10.1 8.9L11.5 7.5L17 13L15.6 14.4L10.1 8.9M7.6 11.4L9 10L13 14L11.6 15.4L7.6 11.4Z" />
                        </svg>
                     </div>
                     <h2 class="counter">32%</h2>
                  </div>
                  <div class="pt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  viewBox="0 0 20 20" fill="#07750b">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex justify-content-between mb-3">
                  <div>
                     <span>Average payment delay</span>
                  </div>
                  <div>
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
               <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                     <div class="border rounded p-3 bg-soft-warning me-3">
                           <svg width="24" height="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M12.3 8.93L9.88 6.5H15.5V10H17V5H9.88L12.3 2.57L11.24 1.5L7 5.75L11.24 10L12.3 8.93M12 14A3 3 0 1 0 15 17A3 3 0 0 0 12 14M3 11V23H21V11M19 19A2 2 0 0 0 17 21H7A2 2 0 0 0 5 19V15A2 2 0 0 0 7 13H17A2 2 0 0 0 19 15Z" />
                           </svg>
                     </div>
                     <h2>27h</h2>
                  </div>
                  <div class="pt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  viewBox="0 0 20 20" fill="#d48918">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-6 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body iq-box-relative">
               <div class="iq-service d-flex align-items-center justify-content-between" style="position: relative;">
                  <div class="service-data">
                     <h3 class="counter">24%</h3>
                     <p class="mb-0">Service used</p>
                  </div>
                  <div id="service-chart-01"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body iq-box-relative">
               <div class="iq-service d-flex align-items-center justify-content-between" style="position: relative;">
                  <div class="service-data">
                     <h3>2.5</h3>
                     <p class="mb-0">GB Stored</p>
                  </div>
                  <div id="service-chart-02"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body iq-box-relative">
               <div class="iq-service d-flex align-items-center justify-content-between" style="position: relative;">
                  <div class="service-data">
                     <h3>351</h3>
                     <p class="mb-0">user collect</p>
                  </div>
                  <div id="service-chart-03"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-lg-6 col-xl-3">
         <div class="card">
            <div class="card-body iq-box-relative">
               <div class="iq-service d-flex align-items-center justify-content-between" style="position: relative;">
                  <div class="service-data">
                     <h3>4,852</h3>
                     <p class="mb-0">Visitors</p>
                  </div>
                  <div id="service-chart-04"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 row m-0 p-0 iq-duration-block">
         <div class="col-sm-6 col-md-6 col-lg-2">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="border rounded p-3 bg-soft-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M9.5,13.09L10.91,14.5L6.41,19H10V21H3V14H5V17.59L9.5,13.09M10.91,9.5L9.5,10.91L5,6.41V10H3V3H10V5H6.41L10.91,9.5M14.5,13.09L19,17.59V14H21V21H14V19H17.59L13.09,14.5L14.5,13.09M13.09,9.5L17.59,5H14V3H21V10H19V6.41L14.5,10.91L13.09,9.5Z" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-5">
                     <h2>2.14s</h2>
                     <p>Frontend time</p>
                  </div>
                  <div id="ethernet-chart-01"></div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-2">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class=" rounded p-3 bg-soft-success">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M2 2V22H22V2H2M20 12H16V16H20V20H16V16H12V20H8V16H4V12H8V8H4V4H8V8H12V4H16V8H20V12M16 8V12H12V8H16M12 12V16H8V12H12Z" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-5">
                     <h2>1.05s</h2>
                     <p>Backend time</p>
                  </div>
                  <div id="ethernet-chart-02"></div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-2">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class=" rounded p-3 bg-soft-danger">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M15,12H16.5V16.25L19.36,17.94L18.61,19.16L15,17V12M16,9C16.69,9 17.37,9.1 18,9.29V4.7L15,5.86V9.07C15.33,9 15.66,9 16,9M23,16A7,7 0 0,1 16,23C13,23 10.4,21.08 9.42,18.4L8,17.9L2.66,19.97L2.5,20A0.5,0.5 0 0,1 2,19.5V4.38C2,4.15 2.15,3.97 2.36,3.9L8,2L14,4.1L19.34,2.03L19.5,2A0.5,0.5 0 0,1 20,2.5V10.25C21.81,11.5 23,13.62 23,16M9,16C9,13.21 10.63,10.8 13,9.67V5.87L9,4.47V16.13H9C9,16.09 9,16.04 9,16M16,11A5,5 0 0,0 11,16A5,5 0 0,0 16,21A5,5 0 0,0 21,16A5,5 0 0,0 16,11M4,5.46V17.31L7,16.15V4.45L4,5.46Z" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-5">
                     <h2>0.25s</h2>
                     <p>Local time</p>
                  </div>
                  <div id="ethernet-chart-03"></div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-2">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="border rounded p-3 bg-soft-warning">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,4M12.5,8H11V14L15.75,16.85L16.5,15.62L12.5,13.25V8M7.88,3.39L6.6,1.86L2,5.71L3.29,7.24L7.88,3.39M22,5.72L17.4,1.86L16.11,3.39L20.71,7.25L22,5.72Z" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-5">
                     <h2>3.07s</h2>
                     <p>Processing time</p>
                  </div>
                  <div id="ethernet-chart-04"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="card">
               <div class="card-body">
                  <h4 class="text-uppercase text-black mb-0">Session(Now)</h4>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                     <h2 class=" text-black">12</h2>
                     <div class="text-left">
                        <p class="m-0 text-uppercase">1 Hours Ago</p>
                        <div class="mb-1 text-black">1500<span class="text-danger">
                           <i class="ri-arrow-down-s-fill"></i>3.25%</span>
                        </div>
                        <p class="m-0 text-uppercase">1 Day Ago</p>
                        <div class="mb-1 text-black">1890<span class="text-success">
                           <i class="ri-arrow-down-s-fill"></i>1.00%</span>
                        </div>
                        <p class="m-0 text-uppercase">1 Week Ago</p>
                        <div class="text-black">1260<span class="text-danger">
                           <i class="ri-arrow-down-s-fill"></i>9.87%</span>
                        </div>
                     </div>
                  </div>
                  <div id="chart-9"></div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex flex-column">
                  <div class="mb-3">
                     <h2>Analytics</h2>
                     <span class="text-primary">Status</span>
                  </div>
                  <div class="border rounded">
                     <div id="extrachart"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Upcoming</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                  <div>
                     <h5>Psychology Exam</h5>
                     <p>carry out writing exam in school</p>
                  </div>
                  <div>
                     <span class="text-danger">19 jan</span>
                     <p>45 Minutes</p>
                  </div>
                  <button type="button" class="btn btn-outline-danger btn-sm">
                     <span class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                  <div>
                     <h5>Mathematics Toory</h5>
                     <p>carry out writing exam in school</p>
                  </div>
                  <div>
                     <span class="text-danger">20 Jan</span>
                     <p>35 Minutes</p>
                  </div>
                  <button type="button" class="btn btn-outline-danger btn-sm">
                     <span class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                  <div>
                     <h5>Literature Exam</h5>
                     <p>carry out writing exam in school</p>
                  </div>
                  <div>
                     <span class="text-danger">21 Jan</span>
                     <p>50 Minutes</p>
                  </div>
                  <button type="button" class="btn btn-outline-danger btn-sm">
                     <span class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div>
                     <h5>Mathematics Exam</h5>
                     <p>carry out writing exam in school</p>
                  </div>
                  <div>
                     <span class="text-danger">22 jan</span>
                     <p>60 Minutes</p>
                  </div>
                  <button type="button" class="btn btn-outline-danger btn-sm">
                     <span class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                     </span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>

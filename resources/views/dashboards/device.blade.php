<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
<x-app-layout :assets="$assets ?? []">
   <div class="container-fluid content-inner mt-n5 py-0">
      <div>
         <div class="row">
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-header">
                     <div class="d-fex justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="p-2 rounded bg-warning">
                              <h5 class="px-2 text-white">1</h5>
                           </div>
                           <h4 class="px-3"></h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="d-grid gap-card">
                        <div class="embed-responsive embed-responsive-4by3">
                           <iframe class="embed-responsive-item" src=""></iframe>
                         </div>
                        <div class="d-flex justify-content-center align-items-center">
                           <div class="pe-3">
                              <i class="fas fa-thermometer-half fa-2x" style="color:#059e8a;"></i>
                           </div>
                           <div>
                              <h6 class="mb-1">Water Temperature</h6>
                              <p class="mb-0">36.6 C</p>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                           <div class="pe-3">
                              <i class="fas fa-tint fa-2x" style="color:#00add6;"></i>
                           </div>
                           <div>
                              <h6 class="mb-1">Water Level</h6>
                              <p class="mb-0">Normal</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-3">
                           <div class="dropdown">
                              <button class="btn px-2 py-2 ms-2 dropdown-toggle" type="button" id="btnInterval_1" data-bs-toggle="dropdown" aria-expanded="false">
                                 <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                                    <path opacity="0.4" d="M22 12C22 17.524 17.523 22 12 22C6.477 22 2 17.524 2 12C2 6.478 6.477 2 12 2C17.523 2 22 6.478 22 12Z" fill="currentColor"></path>                                <path d="M15.5739 15.8145C15.4429 15.8145 15.3109 15.7805 15.1899 15.7095L11.2639 13.3675C11.0379 13.2315 10.8989 12.9865 10.8989 12.7225V7.67554C10.8989 7.26154 11.2349 6.92554 11.6489 6.92554C12.0629 6.92554 12.3989 7.26154 12.3989 7.67554V12.2965L15.9589 14.4195C16.3139 14.6325 16.4309 15.0925 16.2189 15.4485C16.0779 15.6835 15.8289 15.8145 15.5739 15.8145Z" fill="currentColor"></path>                                
                                 </svg>
                                 Time Interval                            
                              </button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="btnInterval_1">
                                  <li><a class="dropdown-item active" href="#">30 seconds "demo"</a></li>
                                  <li><a class="dropdown-item" href="#">24 Hours</a></li>
                                  <li><a class="dropdown-item" href="#">6 Hours</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Manual Feeding Only</a></li>
                              </ul>
                              </div>
                           <button class="btn btn-primary">Feed Now</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-header">
                     <div class="d-fex justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="p-2 rounded bg-warning">
                              <h5 class="px-2 text-white">2</h5>
                           </div>
                           <h4 class="px-3"></h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="d-grid gap-card">
                        <div class="embed-responsive embed-responsive-4by3">
                           <iframe class="embed-responsive-item" src=""></iframe>
                         </div>
                        <div class="d-flex justify-content-center align-items-center">
                           <div class="pe-3">
                              <i class="fas fa-thermometer-half fa-2x" style="color:#059e8a;"></i>
                           </div>
                           <div>
                              <h6 class="mb-1">Water Temperature</h6>
                              <p class="mb-0">36.6 C</p>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                           <div class="pe-3">
                              <i class="fas fa-tint fa-2x" style="color:#00add6;"></i>
                           </div>
                           <div>
                              <h6 class="mb-1">Water Level</h6>
                              <p class="mb-0">Normal</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-3">
                           <div class="dropdown">
                              <button class="btn px-2 py-2 ms-2 dropdown-toggle" type="button" id="btnInterval_2" data-bs-toggle="dropdown" aria-expanded="false">
                                 <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                                    <path opacity="0.4" d="M22 12C22 17.524 17.523 22 12 22C6.477 22 2 17.524 2 12C2 6.478 6.477 2 12 2C17.523 2 22 6.478 22 12Z" fill="currentColor"></path>                                <path d="M15.5739 15.8145C15.4429 15.8145 15.3109 15.7805 15.1899 15.7095L11.2639 13.3675C11.0379 13.2315 10.8989 12.9865 10.8989 12.7225V7.67554C10.8989 7.26154 11.2349 6.92554 11.6489 6.92554C12.0629 6.92554 12.3989 7.26154 12.3989 7.67554V12.2965L15.9589 14.4195C16.3139 14.6325 16.4309 15.0925 16.2189 15.4485C16.0779 15.6835 15.8289 15.8145 15.5739 15.8145Z" fill="currentColor"></path>                                
                                 </svg>
                                 Time Interval                            
                              </button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="btnInterval_2">
                                  <li><a class="dropdown-item active" href="#">30 seconds "demo"</a></li>
                                  <li><a class="dropdown-item" href="#">24 Hours</a></li>
                                  <li><a class="dropdown-item" href="#">6 Hours</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Manual Feeding Only</a></li>
                              </ul>
                              </div>
                           <button class="btn btn-primary">Feed Now</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-lg-8">
            <div class="row">
               <div class="col-md-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="800">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">200</h4>
                           <p class="mb-0">Feeding Frequency</p>
                        </div>
                        <div class="d-flex align-items-center align-self-center">
                           <div class="d-flex align-items-center text-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                 <g id="Solid dot2">
                                    <circle id="Ellipse 65" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                 </g>
                              </svg>
                              <div class="ms-2">
                                 <span class="text-gray">Tank 1</span>
                              </div>
                           </div>
                           <div class="d-flex align-items-center ms-3 text-info">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                 <g id="Solid dot3">
                                    <circle id="Ellipse 66" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                 </g>
                              </svg>
                              <div class="ms-2">
                                 <span class="text-gray">Tank 2</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="feeding-freq" class="d-main"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6">
                  <div class="card" data-aos="fade-up" data-aos-delay="1000">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">Average Temp</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <div id="averageTempChart" class="col-md-8 col-lg-8"></div>
                           <div class="d-grid gap col-md-4 col-lg-4">
                              <div class="d-flex align-items-start">
                                 <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                    <g id="Solid dot">
                                       <circle id="Ellipse 67" cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                    </g>
                                 </svg>
                                 <div class="ms-3">
                                    <span class="text-gray">Tank 1</span>
                                    <h6></h6>
                                 </div>
                              </div>
                              <div class="d-flex align-items-start">
                                 <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                    <g id="Solid dot1">
                                       <circle id="Ellipse 68" cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                    </g>
                                 </svg>
                                 <div class="ms-3">
                                    <span class="text-gray">Tank 2</span>
                                    <h6></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6">
                  <div class="card" data-aos="fade-up" data-aos-delay="1200">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">Temperature record</h4>
                        </div>
                        <div class="dropdown">
                           <a href="#" class="text-gray" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                              This Week
                           </a>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="dailyChart" class=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="400">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title mb-2">Activity overview</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        @foreach ($activities as $activity)
                           <div class="d-flex profile-media align-items-top mb-2">
                              <div class="profile-dots-pills border-primary mt-1"></div>
                              <div class="ms-4">
                                 <h6 class="mb-1">{{ $activity->activity }} #{{ $activity->tank_no }}</h6>
                                 <span class="mb-0">{{ $activity->created_at }}</span>
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
   // var pusher = new Pusher('a82d91e357ff1005b2b0', {
   //    cluster: 'ap1'
   // });

   // var channel = pusher.subscribe('channel-deviceStatus');
   // channel.bind('PusherBroadcast', function (data) {
   //    if (data.action === 'feed_tank_1') {
   //       alert("Feeding on tank 1");
   //    } else if (data.action == 'feed_tank_2') {
   //       alert("Feeding on tank 2");
   //    }
   // });

   // function feed(t) {
   //    fetch("{{ route('broadcast', ['message'=>'feed_tank_1']) }}");
   // }
</script>

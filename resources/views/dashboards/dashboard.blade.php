<x-app-layout :assets="$assets ?? []">
   @php
      $deviceList = $devices
   @endphp
    <div class="row">
       <div class="col-md-12 col-lg-12">
          <div class="row row-cols-1">
             <div class="d-slider1 overflow-hidden ">
                <ul  class="swiper-wrapper list-inline m-0 p-0 mb-2">
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                               <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Total Devices</p>
                               <h4 class="counter" style="visibility: visible;"> {{ count($devices) }}</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-04" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                               <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Devices Online</p>
                               <h4 class="counter">0</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
             </div>
          </div>
       </div>
       <div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceModal" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="staticBackdropLabel">Add New Device</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form>
                         <div class="mb-3">
                             <label for="recipient-name" class="col-form-label">Device Code:</label>
                             <input type="text" class="form-control" id="recipient-name">
                         </div>
                         {{-- <div class="mb-3">
                             <label for="recipient-name" class="col-form-label">De:</label>
                             <textarea class="form-control" id="message-text"></textarea>
                         </div> --}}
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Add</button>
                 </div>
             </div>
         </div>
         </div>
 </x-app-layout>
 
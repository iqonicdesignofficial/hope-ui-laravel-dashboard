

<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Fish Place</h1>
                        <p>Automated fish feeding and monitoring system.</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-link btn-soft-light" data-bs-toggle="modal" data-bs-target="#addDeviceModal">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 12H20" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 4V20" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            
                            Add Device
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="{{asset('images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('images/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('images/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('images/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('images/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('images/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div>
<div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceModal" aria-hidden="
@isset($error)
    {{ 'false' }}
@else
        {{ 'true' }}
@endisset">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Device</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('device.add') }}" method="POST">
                    @csrf
                    @isset($error)
                        <div class="mb-3" v-if="showErrorMessage">
                            <label for="validationServer03" class="form-label">Device Code</label>
                            <input type="text" class="form-control is-invalid" id="device_code" required v-model="deviceCode" name="device_code">
                            <div class="invalid-feedback">
                                Device Code already exists
                            </div>
                        </div>
                    @else
                        <div class="mb-3" v-if="!showErrorMessage">
                            <label for="recipient-name" class="col-form-label">Device Code:</label>
                            <input type="text" class="form-control" id="device_code" required v-model="deviceCode" name="device_code">
                        </div>
                    @endisset
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
            </div>
                </form>
        </div>
    </div>
</div>
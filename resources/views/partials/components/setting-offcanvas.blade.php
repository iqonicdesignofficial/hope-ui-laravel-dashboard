<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h3 class="offcanvas-title" id="offcanvasExampleLabel">Settings</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <div class="col-lg-12">
         <h5 class="mb-3">Scheme</h5>
        <div class="d-grid gap-x-3 grid-cols-3 mb-4">
          <div class="btn-border" data-setting="color-mode" data-name="color" data-value="auto">
              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
              </svg>
            <span class="ms-2 "> Auto </span>
          </div>
           <div class="btn-border" data-setting="color-mode" data-name="color" data-value="dark">
             <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
              </svg>
            <span class="ms-2 "> Dark  </span>
          </div>
           <div class="btn-border active" data-setting="color-mode" data-name="color" data-value="light">
              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
            </svg>
            <span class="ms-2 "> Light</span>
          </div>
        </div>
        <hr class="hr-horizontal">
        <h5 class="mb-3 mt-4">Scheme Direction</h5>
        <div class="d-grid gap-x-3 grid-cols-2 mb-4">
          <div class="text-center">
            <img src="{{asset('images/settings/dark/01.png')}}" alt="ltr" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
            <img src="{{asset('images/settings/light/01.png')}}" alt="ltr" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
            <span class=" mt-2"> LTR </span>
          </div>
           <div class="text-center">
             <img src="{{asset('images/settings/dark/02.png')}}" alt="" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
              <img src="{{asset('images/settings/light/02.png')}}" alt="" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
              <span class="mt-2 "> RTL  </span>
          </div>
        </div>
        <hr class="hr-horizontal">
        <h5 class="mt-4 mb-3">Sidebar Color</h5>
        <div class="d-grid gap-x-3 grid-cols-2 mb-4">
          <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-dark">
              <i class="text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                  <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                </svg>
              </i>
            <span class="ms-2 "> Dark </span>
          </div>
          <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-color">
              <i class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                  <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                </svg>
              </i>
            <span class="ms-2 "> Color </span>
          </div>
          <div class="btn btn-border active" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-white">
              <i class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                  <circle cx="12" cy="12" r="8" fill="currentColor" stroke="black" stroke-width="3"></circle>
                </svg>
              </i>
            <span class="ms-2 "> White </span>
          </div>
          <div class="btn btn-border " data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-transparent">
              <i class="text-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                  <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                </svg>
              </i>
            <span class="ms-2 "> Transparent </span>
          </div>
        </div>
        <hr class="hr-horizontal">
        <h5 class="mt-4 mb-3">Sidebar Types</h5>
        <div class="d-grid gap-x-3 grid-cols-3 mb-4">
          <div class="text-center">
            <img src="{{asset('images/settings/dark/03.png')}}" alt="mini" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
            <img src="{{asset('images/settings/light/03.png')}}" alt="mini" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
            <span class="mt-2">Mini</span>
          </div>
          <div class="text-center">
           <img src="{{asset('images/settings/dark/04.png')}}" alt="hover" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
           <img src="{{asset('images/settings/light/04.png')}}" alt="hover" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
            <span class="mt-2">Hover</span>
          </div>
          <div class="text-center">
             <img src="{{asset('images/settings/dark/05.png')}}" alt="boxed" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
             <img src="{{asset('images/settings/light/05.png')}}" alt="boxed" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
            <span class="mt-2">Boxed</span>
          </div>
        </div>
        <hr class="hr-horizontal">
        <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
        <div class="d-grid gap-x-3 grid-cols-2 mb-4">
          <div class="mb-4 text-center">
            <img src="{{asset('images/settings/dark/06.png')}}" alt="rounded-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
            <img src="{{asset('images/settings/light/06.png')}}" alt="rounded-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
            <span class="mt-2">Rounded One Side</span>
          </div>
          <div class="mb-4 text-center">
            <img src="{{asset('images/settings/dark/07.png')}}" alt="rounded-all" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
            <img src="{{asset('images/settings/light/07.png')}}" alt="rounded-all" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
            <span class="mt-2">Rounded All</span>
          </div>
          <div class="mb-4 text-center">
             <img src="{{asset('images/settings/dark/08.png')}}" alt="pill-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
             <img src="{{asset('images/settings/light/08.png')}}" alt="pill-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
            <span class="mt-2">Pill One Side</span>
          </div>
          <div class="mb-4 text-center">
             <img src="{{asset('images/settings/dark/09.png')}}" alt="pill-all" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
             <img src="{{asset('images/settings/light/09.png')}}" alt="pill-all" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
            <span class="mt-2">Pill All</span>
          </div>
        </div>
        <hr class="hr-horizontal">
         <h5 class="mt-4 mb-3">Navbar Style</h5>
        <div class="d-grid gap-x-3 grid-cols-2">
          <div class="mb-4 text-center">
            <img src="{{asset('images/settings/dark/10.png')}}" alt="image" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
            <img src="{{asset('images/settings/light/10.png')}}" alt="image" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
            <span class="mt-2">Glass</span>
          </div>
          <div class="mb-4 text-center">
             <img src="{{asset('images/settings/dark/11.png')}}" alt="color" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
             <img src="{{asset('images/settings/light/11.png')}}" alt="color" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
            <span class="mt-2">Color</span>
          </div>
          <div class="mb-4 text-center">
             <img src="{{asset('images/settings/dark/12.png')}}" alt="sticky" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
             <img src="{{asset('images/settings/light/12.png')}}" alt="sticky" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
            <span class="mt-2">Sticky</span>
          </div>
          <div class="mb-4 text-center">
              <img src="{{asset('images/settings/dark/12.png')}}" alt="transparent" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
              <img src="{{asset('images/settings/light/12.png')}}" alt="transparent" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
            <span class="mt-2">Transparent</span>
          </div>
          <div class="btn btn-border active col-span-full" data-setting="navbar" data-name="navbar-default" data-value="default">
              <i class="text-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                  <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                </svg>
              </i>
            <span class="ms-2 "> Default </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
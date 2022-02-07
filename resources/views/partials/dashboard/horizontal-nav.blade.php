<nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mx-md-auto">
   <div class="container-fluid">
      <div class="offcanvas-header">
         <div class="navbar-brand">
            <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
               <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
               <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
               <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
            </svg>
            <h4 class="logo-title">{{env('APP_NAME')}}</h4>
         </div>
         <button class="btn-close float-end"></button>
      </div>
      <ul class="navbar-nav">
         <li class="nav-item"><a class="nav-link active" href="{{route('menu-style.horizontal')}}"> Horizontal </a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('menu-style.dualhorizontal')}}"> Dual Horizontal </a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('menu-style.dualcompact')}}"><span class="item-name">Dual Compact</span></a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('menu-style.boxed')}}"> Boxed Horizontal </a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('menu-style.boxedfancy')}}"> Boxed Fancy</a></li>

      </ul>
   </div> <!-- container-fluid.// -->
</nav>

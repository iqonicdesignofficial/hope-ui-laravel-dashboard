@push('scripts')
<script src="{{asset('vendor/sortable/Sortable.js')}}"></script>
<script src="{{asset('js/plugins/kanban.js')}}"></script>
@endpush
<x-app-layout :assets="$assets ?? []">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="mb-md-0 mb-2 d-flex align-items-center">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.56517 3C3.70108 3 3 3.71286 3 4.5904V5.52644C3 6.17647 3.24719 6.80158 3.68936 7.27177L8.5351 12.4243L8.53723 12.4211C9.47271 13.3788 9.99905 14.6734 9.99905 16.0233V20.5952C9.99905 20.9007 10.3187 21.0957 10.584 20.9516L13.3436 19.4479C13.7602 19.2204 14.0201 18.7784 14.0201 18.2984V16.0114C14.0201 14.6691 14.539 13.3799 15.466 12.4243L20.3117 7.27177C20.7528 6.80158 21 6.17647 21 5.52644V4.5904C21 3.71286 20.3 3 19.4359 3H4.56517Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Filter by task name...
                    </p>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="dropdown me-3">
                            <span class="dropdown-toggle align-items-center d-flex" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By:
                            </span>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                <a class="dropdown-item" href="#">Status</a>
                                <a class="dropdown-item" href="#">Task Name</a>
                                <a class="dropdown-item" href="#">Priority</a>
                                <a class="dropdown-item" href="#">Assignee</a>
                                <a class="dropdown-item" href="#">Due date</a>
                                <a class="dropdown-item" href="#">Start date</a>
                                <a class="dropdown-item" href="#">Time tracked</a>
                            </div>
                        </div>
                        <div class="dropdown me-3">
                            <span class="dropdown-toggle align-items-center d-flex" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                Group By: Status
                            </span>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Status
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59151 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.59151 20.8068C5.90151 20.8068 2.74951 20.2528 2.74951 18.0188C2.74951 15.7848 5.88051 15.2068 9.59151 15.2068Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59157 12.0198C7.16957 12.0198 5.20557 10.0568 5.20557 7.63476C5.20557 5.21276 7.16957 3.24976 9.59157 3.24976C12.0126 3.24976 13.9766 5.21276 13.9766 7.63476C13.9856 10.0478 12.0356 12.0108 9.62257 12.0198H9.59157Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.4829 10.8815C18.0839 10.6565 19.3169 9.28253 19.3199 7.61953C19.3199 5.98053 18.1249 4.62053 16.5579 4.36353" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M18.5952 14.7322C20.1462 14.9632 21.2292 15.5072 21.2292 16.6272C21.2292 17.3982 20.7192 17.8982 19.8952 18.2112" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Assignee
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M7.24512 14.7815L10.2383 10.8914L13.6524 13.5733L16.5815 9.79297" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="19.9954" cy="4.20027" r="1.9222" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M14.9248 3.12012H7.65704C4.6456 3.12012 2.77832 5.25284 2.77832 8.26428V16.3467C2.77832 19.3581 4.60898 21.4817 7.65704 21.4817H16.2612C19.2726 21.4817 21.1399 19.3581 21.1399 16.3467V9.30776" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Priority
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M13.8496 4.25024V6.67024" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.8496 17.76V19.784" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.8496 14.3247V9.50366" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7021 20C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H18.7021Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Tags
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Due Date
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    None
                                </a>
                            </div>
                        </div>
                        <a href="#" class="text-body me-3 align-items-center d-flex">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                <path d="M15.8325 8.17463L10.109 13.9592L3.59944 9.88767C2.66675 9.30414 2.86077 7.88744 3.91572 7.57893L19.3712 3.05277C20.3373 2.76963 21.2326 3.67283 20.9456 4.642L16.3731 20.0868C16.0598 21.1432 14.6512 21.332 14.0732 20.3953L10.106 13.9602" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Share
                        </a>
                        <div class="dropdown">
                            <span class="dropdown-toggle align-items-center d-flex" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false"></span>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Duplicate
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Rename
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card-transparent mb-0 desk-info">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-pink mb-0">Open Projects 05</h6>
                                    <div class="dropdown">
                                        <span class="d-flex align-items-center h5 mb-0" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g id="Iconly/Light/More Circle">
                                                <g id="Group 33506">
                                                <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Duplicate
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Rename
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-transparent shadow-none">
                            <div class="iq-dashed-border">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-body mb-0">New Task</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                        <g id="Frame 33532">
                                        <path id="Vector" d="M12.0711 18.9706V4.82847M19.1421 11.8995H5" stroke="currentColor" stroke-linecap="round"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group1-wrap">
                        <div class="group" id="group1">
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Create Sidebar in Dashboard</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="remove"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">General Improvement in Landing pages</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="remove"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Product List view Changes</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="remove"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Add Multiple theme options</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="remove"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card-transparent mb-0 desk-info">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-warning mb-0">In Progress  02</h6>
                                    <div class="dropdown">
                                        <span class="d-flex align-items-center h5 mb-0" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g id="Iconly/Light/More Circle">
                                                <g id="Group 33506">
                                                <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Duplicate
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Rename
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-transparent shadow-none">
                            <div class="iq-dashed-border">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-body mb-0">New Task</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                        <g id="Frame 33532">
                                        <path id="Vector" d="M12.0711 18.9706V4.82847M19.1421 11.8995H5" stroke="currentColor" stroke-linecap="round"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group2-wrap">
                        <div class="group" id="group2">
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Notification Module Setting</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="remove"></span>
                            </div>
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Admin Panel Customization</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="remove"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card-transparent mb-0 desk-info">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-success mb-0">Reviews 01</h6>
                                    <div class="dropdown">
                                        <span class="d-flex align-items-center h5 mb-0" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g id="Iconly/Light/More Circle">
                                                <g id="Group 33506">
                                                <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Duplicate
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Rename
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-transparent shadow-none">
                            <div class="iq-dashed-border">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-body mb-0">New Task</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                        <g id="Frame 33532">
                                        <path id="Vector" d="M12.0711 18.9706V4.82847M19.1421 11.8995H5" stroke="currentColor" stroke-linecap="round"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group3-wrap">
                        <div class="group" id="group3">
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Sidebar in Dashboard Themes</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="remove"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card-transparent mb-0 desk-info">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-primary mb-0">Closed 03</h6>
                                    <div class="dropdown">
                                        <span class="d-flex align-items-center h5 mb-0" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g id="Iconly/Light/More Circle">
                                                <g id="Group 33506">
                                                <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton04" style="">
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Duplicate
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Rename
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card bg-transparent shadow-none">
                            <div class="iq-dashed-border">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="text-body mb-0">New Task</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                    <g id="Frame 33532">
                                    <path id="Vector" d="M12.0711 18.9706V4.82847M19.1421 11.8995H5" stroke="currentColor" stroke-linecap="round"/>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group4-wrap">
                        <div class="group" id="group4">
                            <div class="col-lg-12 group__item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Login screen update in mobile app</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="remove"></span>
                            </div>
                            <div class="col-lg-12 group__item">
                                <div class="card" data-toggle="modal" data-target="#add-tasker-modal">
                                    <div class="card-body">
                                        <div class="d-grid grid-flow-col align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Dashboard plan</p>
                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="mb-0">List</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="h5" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <g id="Iconly/Light/More Circle">
                                                        <g id="Group 33506">
                                                        <circle id="Ellipse 33" cx="7" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 34" cx="12" cy="12" r="1" fill="black"/>
                                                        <circle id="Ellipse 35" cx="17" cy="12" r="1" fill="black"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton05" style="">
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                                <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Duplicate
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Rename
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Helpdesk in Dashboard Themes</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33533">
                                                        <g id="Group 33527">
                                                        <path id="Rectangle 59" d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"/>
                                                        <path id="Line 68" d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                                        <g id="Frame 33534">
                                                        <g id="Group 33528">
                                                        <path id="Rectangle 68" d="M18.5 6V12C18.5 12.2761 18.2761 12.5 18 12.5H13.4142C13.2816 12.5 13.1544 12.4473 13.0607 12.3536L12.6464 11.9393C12.3651 11.658 11.9836 11.5 11.5858 11.5H6C5.72386 11.5 5.5 11.2761 5.5 11V5C5.5 4.72386 5.72386 4.5 6 4.5H11.5858C11.7184 4.5 11.8456 4.55268 11.9393 4.64645L12.3536 5.06066C12.6349 5.34197 13.0164 5.5 13.4142 5.5H18C18.2761 5.5 18.5 5.72386 18.5 6Z" stroke="currentColor"/>
                                                        <rect id="Rectangle 69" x="5" y="4" width="1" height="16" rx="0.5" stroke="currentColor"/>
                                                        </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="btn btn-icon btn-soft-light me-2">
                                                <div class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-primary">AT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-warning">WT</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-success">GT</div>
                                            </a>
                                                <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-2 text-danger">
                                                    <svg width="16" height="16" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="remove"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>


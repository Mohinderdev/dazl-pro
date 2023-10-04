<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                @yield('page-title')
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <span class="kt-subheader__desc">
                @yield('page-sub-title')
            </span>
            @yield('page-search')
            {{-- <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                    <span><i class="flaticon2-search-1"></i></span>
                </span>
            </div> --}}
        </div>
        @yield('page-actions')
        {{-- <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="#" class="btn kt-subheader__btn-primary">
                    Actions &nbsp;
                    <i class="flaticon2-plus"></i>
                </a>
            </div>
        </div> --}}
    </div>
</div>

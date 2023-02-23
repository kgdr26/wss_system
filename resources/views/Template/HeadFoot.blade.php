@if (Route::currentRouteName()=='dasbor')
    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='vendor')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/vendor.js')}}"></script>
@endif

@if (Route::currentRouteName()=='customer')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/customer.js')}}"></script>
@endif

@if (Route::currentRouteName()=='user')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/user.js')}}"></script>
@endif

@if (Route::currentRouteName()=='itemsatk')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/itemsatk.js')}}"></script>
@endif

@if (Route::currentRouteName()=='stock')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/stock.js')}}"></script>
@endif

@if (Route::currentRouteName()=='stockopname')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/stockopname.js')}}"></script>
@endif

@if (Route::currentRouteName()=='barangmasuk')
    <script src="{{asset('assets/js/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/barangmasuk.js')}}"></script>
@endif

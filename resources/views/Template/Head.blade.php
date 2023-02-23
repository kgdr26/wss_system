@if (Route::currentRouteName()=='dasbor')
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endif

@if (Route::currentRouteName()=='vendor')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <style>
        .w-address-style{
            width: 20rem;
            margin: 0rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endif

@if (Route::currentRouteName()=='customer')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <style>
        .w-address-style{
            width: 20rem;
            margin: 0rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endif

@if (Route::currentRouteName()=='user')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='itemsatk')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='stock')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='stockopname')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>

    <style>
        .dropdown-menu li,
        .klik-dat{
            cursor: pointer !important;
        }
    </style>
@endif

@if (Route::currentRouteName()=='barangmasuk')
    <link href="{{asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />    
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>

    <style>
        .dropdown-menu li,
        .klik-dat{
            cursor: pointer !important;
        }
    </style>
@endif

@if (Route::currentRouteName()=='addpo')
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>

    <style>
        .dropdown-menu li,
        .klik-dat{
            cursor: pointer !important;
        }
    </style>
@endif

<script src="{{asset('assets/sweetalert/sweetalert2.all.min.js')}} "></script>
<link href="{{asset('assets/css/config.css')}}" rel="stylesheet" type="text/css"/>
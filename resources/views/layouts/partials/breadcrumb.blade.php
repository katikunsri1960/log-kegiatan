<ol class="breadcrumb">
    @if (request()->is('dasboard'))
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    @else
        <li class="breadcrumb-item"><a href="javascript:void(0);">
            {{ucfirst(request()->segment(1))}}
        </a></li>
        @if (request()->segment(2))
        <li class="breadcrumb-item active" aria-current="page">{{ucfirst(request()->segment(2))}}</li>
        @endif
        @if (request()->segment(3))
        <li class="breadcrumb-item active" aria-current="page">{{ucfirst(request()->segment(3))}}</li>
        @endif
        @if (request()->segment(4))
        <li class="breadcrumb-item active" aria-current="page">{{ucfirst(request()->segment(4))}}</li>
        @endif
    @endif
</ol>

@extends('layouts.app')

@section('navbar.items')
<span class="navbar-text fs-5">Project-1</span>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            @include($path . '.content.about')
            @include($path . '.content.progress')
            @include($path . '.content.related')
            @include($path . '.content.cooperation')
            @include($path . '.content.resources')
            @include($path . '.content.download')
            @include($path . '.content.license')
        </div>
        <div class="col-md-2">
            <!-- Content -->
            <div class="sticky-top" style="top: 5rem;">
                <h4>Content</h4>
                <div class="list-group list-group-flush">
                    <a href="#about" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>O projektu</div></div>
                    </a>
                    <a href="#progress" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>Pokrok</div></div>
                    </a>
                    <a href="#related" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>Související</div></div>
                    </a>
                    <a href="#cooperation" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>Spolupráce</div></div>
                    </a>
                    <a href="#resources" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>Zdroje</div></div>
                    </a>
                    <a href="#download" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>Stažení</div></div>
                    </a>
                    <a href="#license" class="list-group-item list-group-item-action list-group-item-light">
                        <div class="d-flex align-items-center fs-6"><i class="bi bi-record-fill text-primary opacity-75 pe-2"></i><div>License</div></div>
                    </a>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
    </div>
</div>
@endsection

@section('footer.items')
<li class="nav-item"><a href="/" class="nav-link px-2" data-bs-toggle="tooltip" title="Home"><i class="bi bi-house-up" style="font-size: 28px;"></i></a></li>
<li class="nav-item"><a href="#top" class="nav-link px-2" data-bs-toggle="tooltip" title="Top"><i class="bi bi-arrow-up-circle" style="font-size: 28px;"></i></a></li>
@endsection

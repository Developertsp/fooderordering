@extends('layout.app')
@section('title', 'Categories | FO - Food Ordering System')

@section('content')

    <style>
        .right-bar {
            display: none;
        }
    </style>
    <!-- Content Header (Page header) -->	  
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">All Categories</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Categories</li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        @foreach($categories as $category)
            @if($category->type == 1)
                <div class="section mb-30">
                    <h2 class="shadow-lg p-10 mb-30">{{ $category->name }}</h2>
                    <div class="row">
                        @foreach($categories as $subcategory)
                            @if($subcategory->type == 2 && $subcategory->parent_id == $category->id)
                                <div class="col-xxxl-4 col-xl-3 col-lg-3 col-12">
                                    <div class="box overflow-h">
                                        <div class="box-body pt-10 pl-10">
                                            <div>
                                                <img src="{{ asset('storage/' . $subcategory->background_image) }}" alt="Image Description">

                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="info-content">
                                                <h4 class="mb-10 mt-0">{{ $subcategory->name }}</h4>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="mb-0 text-primary">{{ $subcategory->slug }}</h4>
                                                    <div class="d-flex align-items-center">    
                                                        <span class="fs-18 mx-10 text-primary icon-{{ $subcategory->icon }}"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                                        <h5 class="text-black mb-0">
                                                            @if($subcategory->status == 1)
                                                                <span class="status-dot status-active"></span> Active
                                                            @elseif($subcategory->status == 2)
                                                                <span class="status-dot status-inactive"></span> Inactive
                                                            @elseif($subcategory->status == 3)
                                                                <span class="status-dot status-draft"></span> Draft
                                                            @endif
                                                        </h5>
                                                    </div>
                                                </div>
                                                <p>{{ $subcategory->desc }}</p>
                                            </div>
                                        </div>                          
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
    <!-- /.content -->
@endsection

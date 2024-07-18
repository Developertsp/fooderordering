@extends('layout.app')
@section('title', 'Categories | FO - Food Ordering System')

@section('content')

    <style>
        .right-bar {
            display: none;
        }
        .content-wrapper {
            margin-right: 0;
        } 
        .main-header {
            margin-right: 0;
        }
        .category-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 5px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        .category-avatar {
            flex: 0 0 auto;
            margin-right: 15px;
        }
        .category-avatar img {
            width: 30px; 
            height: 30px; 
            border-radius: 50%; 
            margin-left: 10px
        }
        .category-details {
            flex: 1 1 auto;
            margin-right: 15px;
        }
        .category-name {
            margin-bottom: 5px;
        }
        .category-status {
            flex: 0 0 auto;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-right:15px;
        }
        .status-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .status-active {
            background-color: #28a745;
        }
        .status-inactive {
            background-color: #dc3545;
        }
        .status-draft {
            background-color: #ffee00;
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
        @foreach ($categories as $category)
            @if ($category->type == 1)
                <div class="category-item">
                        <div class="category-avatar">
                            <img src="{{ asset('storage/' . $category->icon_file) }}" alt="Category Avatar">
                        </div>
                        <div class="category-details">
                            <h4 class="category-name mt-20">{{ $category->name }}</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>{{ $category->description }}</p>
                            </div>
                        </div>
                        <div class="category-status">
                            @if ($category->status == 1)
                                <span class="status-dot status-active"></span>
                            @elseif ($category->status == 2)
                                <span class="status-dot status-inactive"></span>
                            @elseif ($category->status == 3)
                                <span class="status-dot status-draft"></span>
                            @endif
                        </div>
                        <div class="category-actions ml-auto">
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5" title="Edit"><i class="fa fa-edit"></i></a>
                            <form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5" title="Delete"><i class="fa fa-trash"></i></button>
                            </form>
                            {{-- <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5" title="Duplicate"><i class="fa fa-plus-square-o"></i></a> --}}
                        </div>
                    </div>
                <div class="section mb-30">
                    <div class="row">
                        @foreach ($categories as $subcategory)
                            @if ($subcategory->type == 2 && $subcategory->parent_id == $category->id)
                                <div class="col-xxxl-4 col-xl-3 col-lg-3 col-12">
                                    <div class="box overflow-h shadow-lg">
                                        <div class="box-body pt-10 pl-10">
                                            <div class="menu-item">
                                                <img src="{{ asset('storage/' . $subcategory->background_image) }}" class="img-fluid w-p75" alt="Image Description">
                                            </div>
                                        </div>
                                        <div class="box-body text-center">
                                            <div class="menu-details text-center">
                                                <h4 class="mt-20 mb-10">{{ $subcategory->name }}</h4>
                                                <p>{{ $subcategory->slug }}</p>
                                            </div>
                                            <div class="act-btn d-flex justify-content-between">
                                                {{-- <div class="text-center mx-5">
                                                    <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
                                                    <small class="d-block">View</small>
                                                </div> --}}
                                                <div class="text-center mx-5">
                                                    <a href="{{ route('category.edit', ['id' => $subcategory->id]) }}" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
                                                    <small class="d-block">Edit</small>
                                                </div>
                                                <div class="text-center mx-5">
                                                    <form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    <small class="d-block">Delete</small>
                                                </div>
                                                {{-- <div class="text-center mx-5">
                                                    <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="fa fa-plus-square-o"></i></a>
                                                    <small class="d-block">Duplicate</small>
                                                </div> --}}
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

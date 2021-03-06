@extends('layouts.admin_layout')

@section('content')




<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">insert table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            @include('alert.messages')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start Writing your Sub Category name & Slug</h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.attributes.store')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    {{method_field('PUT')}}

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your sub Category Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="subcategoryname" id="simpleinput" class="form-control" placeholder="Write a Sub Category name which you want to add in your store" autocomplete="off">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Size Slug</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="slug" id="simpleinput" class="form-control" placeholder="Write a Sub Category slug which you want to add in your store" autocomplete="off">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Size</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control selectpicker" name="size_id" data-style="btn-primary">
                                                                @foreach ($sizes as $size)
                                                                 <option value="{{ $size->id }}">{{ $size->sizename }}</option>
                                                                @endforeach
                                                                
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Color</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control selectpicker" name="color_id" data-style="btn-primary">
                                                                @foreach ($colors as $color)
                                                                 <option value="{{ $color->id }}">{{ $color->colorname }}</option>
                                                                @endforeach
                                                                
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div>


                                                    {{-- <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Category</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control selectpicker" name="product_id" data-style="btn-primary">
                                                                @foreach ($products as $product)
                                                                 <option value="{{ $product->id }}">{{ $product->productname }}</option>
                                                                @endforeach
                                                                
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div> --}}


                                                    
                                                    
                                               

                                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                      
                        <!-- end row -->


                    

            
        </div> <!-- end container-fluid -->

    </div> <!-- end content -->

    

   

</div>

<section class="amidekhbo">

</section>






<script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/switchery/switchery.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js')}}"></script>



@endsection

                
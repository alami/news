@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Update Multi Image</h4>
                            <FORM method="POST" action="{{ route('update.multi.image') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$image->id}}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Update Multi Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="multi_image" type="file"
                                               id="image">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg"
                                             src="{{
                                              asset($image->multi_image)
                                        }}" alt="About image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Multi Image">
                            </FORM>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#image').change(function (e){
                var reader = new FileReader()
                reader.onload = function (e){
                    $('#showImage').attr('src',e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>

@endsection

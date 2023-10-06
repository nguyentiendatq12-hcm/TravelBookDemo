@extends('admin.layouts.app')

@section('title', 'mạng xã hội')
@section('content')
    @parent
    <!-- Main -->
    <div class="app-main__inner">
        <input type="hidden" id="dia_diem_id" value="{{ $dia_diem->id }}">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        {{ $pageTitle }}
                        <div class="page-title-subheading">
                            {{ trans('public.manage_title') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">

                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">{{trans('public.name')}}</label>
                            <div class="col-md-9 col-xl-8">
                                <input disabled placeholder="Product Name" type="text" class="form-control" value="{{ $dia_diem->ten_dia_diem }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="" class="col-md-3 text-md-right col-form-label">{{trans('public.list_img')}}</label>
                            <div class="col-md-9 col-xl-8">
                                <ul class="text-nowrap" id="images">

                                </ul>
                                <li class="float-left d-inline-block mr-2 mb-2" style="width: 32%;">
                                    <form method="post" enctype="multipart/form-data" data-url="">
                                        @csrf
                                        <div style="width: 100%; max-height: 220px; overflow: hidden;">

                                            <img style="width: 100%; cursor: pointer; height:200px"
                                                class="thumbnail hinhanh" data-toggle="tooltip" title="Click to add image"
                                                data-placement="bottom"
                                                src="{{ URL('assets/admin/assets/images/add-image-icon.jpg') }}" alt="Add Image">

                                            <input id="hinh" name="hinh[]" multiple="multiple" type="file"
                                                onchange="uploadhinh()" multiple="multiple"
                                                accept="image/x-png,image/gif,image/jpeg" class="image form-control-file"
                                                style="display: none;">

                                            <input type="hidden" name="product_id" value="">
                                        </div>
                                    </form>
                                </li>
                            </div>
                        </div>
                        <div class="label-hinh-moi text-center" id="label-hinh-moi">
                            <p>Hình ảnh mới</p>
                        </div>
                        <div class="position-relative row form-group">
                            {{-- <label for="" class="col-md-3 text-md-right col-form-label">Hình ảnh mới</label> --}}
                            <div class="col-md-12 col-xl-12 text-md-center">
                                <ul class="text-nowrap preview-upload" id="preview-upload">

                                </ul>
                            </div>
                        </div>

                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-3">

                                <a onclick="them_hinh({{ $dia_diem->id }})" style="color: white"
                                    class="btn-shadow btn-hover-shine btn btn-primary btn-them" id="btn-them">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-check fa-w-20"></i>
                                    </span>
                                    <span>{{trans('public.create')}}</span>
                                </a>
                                <a href="{{ route('admin.dia-diem.show', ['id' => $dia_diem->id]) }}"
                                    class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>{{trans('public.cancel')}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dia-diem').addClass('mm-active');
             $('#li-dia-diem').addClass('mm-active');
            load_hinh()
        });

        $(document).on('click', '.delete_hinh', function(e) {
            e.preventDefault();
            var r = confirm("Bạn có chắc chắn muốn xóa?");
            if (r == true) {
                var url = $(this).attr('data-url');
                console.log(url);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    type: "delete",
                    success: function(data) {
                        console.log(data);
                        alert(data.mess);
                        load_hinh();
                    }
                });
            }
        });

        function uploadhinh() {
            var file = document.getElementById('hinh').files;
            document.getElementById('preview-upload').innerHTML = "";
            var hinhmoi = document.getElementById('label-hinh-moi');
            hinhmoi.style.display = "block";
            var them = document.getElementById('btn-them');
            them.style.display = "initial";
            var url = $(this).attr('data-url');
            if (file.length > 0) {
                for (var i = 0; i < file.length; i++) {

                    var fileToLoad = file[i];
                    var fileReader = new FileReader();
                    fileReader.onload = function(fileLoaderEvent) {
                        var srcData = fileLoaderEvent.target.result;
                        var newImage = document.createElement('img'); // kiểm tra hình
                        newImage.src = srcData;
                        var hinh = newImage.outerHTML; // xuất ra file html
                        //console.log(hinh);
                        document.getElementById('preview-upload').innerHTML +=
                            '<li class="float-left d-inline-block mr-2 mb-2" style="position: relative; width: 30%;">\
                                                                                        <div style="width: 100%; height: 220px; overflow: hidden;" class="hinhanh">\
                                                                                                                            ' +
                            hinh + '\
                                                                                                                        </div>\
                                                                                                                    </li>';
                    }
                    fileReader.readAsDataURL(fileToLoad);
                }
            }
        }

        function them_hinh(dia_diem_id) {
            var hinh = $('#hinh')[0].files;
            //console.log(hinh);
            var formData = new FormData();
            formData.append('dia_diem_id', dia_diem_id);
            for (var i = 0; i < hinh.length; i++) {
                formData.append('hinh[]', hinh[i]);
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('admin.dia-diem-hinh.store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == 400) {
                        alert(data.errors.hinh[0]);
                    } else {
                        document.getElementById('preview-upload').innerHTML = "";
                        var hinhmoi = document.getElementById('label-hinh-moi');
                        hinhmoi.style.display = "none";
                        var them = document.getElementById('btn-them');
                        them.style.display = "none";
                        alert(data.mess);

                    }
                    console.log(data);
                    load_hinh();
                }
            });
        }

        function load_hinh() {
            var id = $('#dia_diem_id').val();
            var url = "{{ route('admin.dia-diem-hinh.load_hinh', '') }}/" + id;
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#images').html("");
                    $.each(data.hinh, function(key, item) {
                        $('#images').append(
                            '<li class="float-left d-inline-block mr-2 mb-2"\
                                                                style="position: relative; width: 30%;">\
                                                                <form action="" method="post">\
                                                                    <button data-url="{{ route('admin.dia-diem-hinh.destroy','') }}/' + item.id + '" type="button" onclick="" class="delete_hinh btn btn-sm btn-outline-danger border-0 position-absolute">\
                                                                        <i class="fas fa-times"></i>\
                                                                    </button>\
                                                                </form>\
                                                                <div style="width: 100%; height: 200px; overflow: hidden;" class="hinhanhsp">\
                                                                    <img src="{{ URL('') }}/' + item.ten + '"" alt="Image">\
                                                                </div>\
                                                            </li>')
                    });
                }
            })
        }
    </script>
@endsection

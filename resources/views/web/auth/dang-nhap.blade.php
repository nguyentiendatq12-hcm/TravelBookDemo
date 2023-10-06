@extends('web.layouts.app')

@section('content')
    @parent
    {{-- @include('web.includes.banner') --}}
    <!-- dăng nhập -->
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="vizew-login-area section-padding-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="login-content">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h4>Chào mừng bạn đã trở lại</h4>
                                <div class="line"></div>
                            </div>
                            @if (session()->has('success'))
                                <div class="alert alert-success success text-center" id="success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if ($errors->has('error'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('error') }}
                                </div>
                            @endif
                            @if (session()->has('no'))
                                <div class="alert alert-danger">
                                    {!! session()->get('no') !!}
                                </div>
                            @endif
                            @if (session()->has('yes'))
                                <div class="alert alert-warning">
                                    {{ session()->get('yes') }}
                                </div>
                            @endif
                            @if (session()->has('login'))
                                <script>
                                    alert('{{ session()->get('login') }}')
                                </script>
                            @endif
                            <form action="{{ route('web.auth.post-dang-nhap') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                        value="{{ old('email') ?? ($email ?? session()->get('email')) }}" placeholder="Email">
                                    <div class="text-center">
                                        @error('email')
                                            <span style="color:red"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="mat-khau"
                                        value="{{ old('mat-khau') ?? ($mat_khau ?? session()->get('mat_khau')) }}"
                                        placeholder="Password">
                                    <div class="text-center">
                                        @error('mat-khau')
                                            <span style="color:red"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div> --}}
                                <div class="form-group-forgot-password">
                                    <div class="forgot-password">
                                        <a href="{{ route('web.auth.quen-mat-khau') }}">Quên mật khẩu</a>

                                    </div>
                                </div>
                                <div class="form-group-register">
                                    <div class="register">
                                        <p>Bạn chưa có tài khoản ư?</p><a href="{{ route('web.auth.dang-ki') }}">Đăng
                                            kí</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn vizew-btn w-100 mt-30">ĐĂNG NHẬP</button>
                            </form>
                            {{-- <div class="login-social">
                                <div class="login-other">
                                    <div class="ke"></div>
                                    <div class="other">Hoặc</div>
                                    <div class="ke"></div>
                                </div>
                                <div class="longin-social col_4">
                                    <button class="social">
                                        <div class="img-social">
                                            <img src="{{ URL('assets/img/social/face.png') }}" alt="">
                                        </div>
                                        <div>
                                            facebook
                                        </div>
                                    </button>
                                    <button class="social">
                                        <div class="img-social">
                                            <img src="{{ URL('assets/img/social/goggle.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            goggle
                                        </div>
                                    </button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#login').addClass('active');
        });
    </script>
@endsection

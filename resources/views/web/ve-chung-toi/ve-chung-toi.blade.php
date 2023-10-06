@extends('web.layouts.app')

@section('content')
    @parent
    {{-- @include('web.includes.banner') --}}
    @if ($web != null)
    <section class="ftco-section">
        <div class="container">

            <div class="row d-md-flex">

                    <div class="col-md-6 ftco-animate img about-image" style="background-image: url({{URL($web->hinh)}}); background-size: 100% 100%;"></div>


                <div class="col-md-6 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @if ($web->tieu_de_noi_dung != null)
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill"
                                    href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                                    aria-selected="true">{{$web->tieu_de_noi_dung}}</a>
                                @endif
                                 @if ($web->tieu_de_mo_ta != null)
                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">{{$web->tieu_de_mo_ta}}</a>
                                 @endif
                                {{-- <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal"
                                    role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a> --}}
                            </div>
                        </div>

                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                @if ($web->noi_dung != null)
                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                                    aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                       {!!$web->noi_dung!!}
                                    </div>
                                </div>
                                 @endif
                                 @if ($web->mo_ta != null)
                                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                    aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        {!!$web->mo_ta!!}
                                    </div>
                                </div>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">FAQS</span>
                    <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div id="accordion">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="true"
                                            aria-controls="menuone">When she reached the first hills? <span
                                                class="collapsed"><i class="icon-plus-circle"></i></span><span
                                                class="expanded"><i class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menuone" class="collapse show">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false"
                                            aria-controls="menutwo">Italic Mountains, she had a last <span
                                                class="collapsed"><i class="icon-plus-circle"></i></span><span
                                                class="expanded"><i class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menutwo" class="collapse">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false"
                                            aria-controls="menu3"> Bookmarksgrove, the headline? <span class="collapsed"><i
                                                    class="icon-plus-circle"></i></span><span class="expanded"><i
                                                    class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menu3" class="collapse">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false"
                                            aria-controls="menu4">Alphabet Village and the subline of her own? <span
                                                class="collapsed"><i class="icon-plus-circle"></i></span><span
                                                class="expanded"><i class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menu4" class="collapse">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false"
                                            aria-controls="menu5">Then she continued her way? <span class="collapsed"><i
                                                    class="icon-plus-circle"></i></span><span class="expanded"><i
                                                    class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menu5" class="collapse">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#menu6" aria-expanded="false"
                                            aria-controls="menu6">Skyline of her hometown Bookmarksgrove? <span
                                                class="collapsed"><i class="icon-plus-circle"></i></span><span
                                                class="expanded"><i class="icon-minus-circle"></i></span></a>
                                    </div>
                                    <div id="menu6" class="collapse">
                                        <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                                back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                                Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                                question ran over her cheek, then she continued her way.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            $('#about').addClass('active');
        });
    </script>
@endsection

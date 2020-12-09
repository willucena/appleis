@extends('layout')
@section('content')
    <!-- Masthead -->

    <!-- Icons Grid -->
    <div class="container">
        <section class="features-icons">
            <div class="accordion" id="accordionExample">
                @if($dados)
                    @foreach($dados as $pergunta)
                        <div class="card">
                            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse-{{$pergunta->id}}" aria-expanded="{{ $pergunta == $dados->first() ? "true" : "false" }}">
                                <span class="title">{{ $pergunta->title }}</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>

                            <div id="collapse-{{$pergunta->id}}" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    <br>
                                    <br>
                                    @if($pergunta->status)
                                        <h5><a href="{{ url('respostas/'.$pergunta->id) }}">Clique e saiba mais</a></h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{--            <div class="card">--}}
                {{--                <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">--}}
                {{--                    <span class="title">Quando pode cometer crime ambiental ?</span>--}}
                {{--                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>--}}
                {{--                </div>--}}
                {{--                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">--}}
                {{--                    <div class="card-body">--}}
                {{--                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--            </div>--}}
                {{--            <div class="card">--}}
                {{--                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                {{--                    <span class="title">Quando não vai ser crime ambiental ?</span>--}}
                {{--                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>--}}
                {{--                </div>--}}
                {{--                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">--}}
                {{--                    <div class="card-body">--}}
                {{--                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="card">--}}
                {{--                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">--}}
                {{--                    <span class="title">Você se deparou com algum crime contra a flora ?</span>--}}
                {{--                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>--}}
                {{--                </div>--}}
                {{--                <div id="collapseThree" class="collapse" data-parent="#accordionExample">--}}
                {{--                    <div class="card-body">--}}
                {{--                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="card">--}}
                {{--                <div class="card-header collapsed" data-toggle="collapse" data-target="#collapsePesca" aria-expanded="false">--}}
                {{--                    <span class="title">Crime de pesca ?</span>--}}
                {{--                    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>--}}
                {{--                </div>--}}
                {{--                <div id="collapsePesca" class="collapse" data-parent="#accordionExample">--}}
                {{--                    <div class="card-body">--}}
                {{--                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--                        <br>--}}
                {{--                        <br>--}}
                {{--                        <h5><a href="{{ url('respostas') }}">Foi no lago paranoa ?</a></h5>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>

            {{--                <div class="alert alert-success" role="alert">--}}
            {{--                    <a href="#" class="alert-link">Quando pode cometer crime ambiental ?</a>--}}
            {{--                </div>--}}
            {{--                <div class="alert alert-success" role="alert">--}}
            {{--                    <a href="#" class="alert-link">Quando não vai ser crime ambiental ?</a>--}}
            {{--                </div>--}}

            {{--                <div class="alert alert-success" role="alert">--}}
            {{--                    <a href="#" class="alert-link">Você se deparou com algum crime contra a flora ?</a>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4">--}}
            {{--                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">--}}
            {{--                        <div class="features-icons-icon d-flex">--}}
            {{--                            <i class="icon-screen-desktop m-auto text-primary"></i>--}}
            {{--                        </div>--}}
            {{--                        <h3>Fully Responsive</h3>--}}
            {{--                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4">--}}
            {{--                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">--}}
            {{--                        <div class="features-icons-icon d-flex">--}}
            {{--                            <i class="icon-layers m-auto text-primary"></i>--}}
            {{--                        </div>--}}
            {{--                        <h3>Bootstrap 4 Ready</h3>--}}
            {{--                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4">--}}
            {{--                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">--}}
            {{--                        <div class="features-icons-icon d-flex">--}}
            {{--                            <i class="icon-check m-auto text-primary"></i>--}}
            {{--                        </div>--}}
            {{--                        <h3>Easy to Use</h3>--}}
            {{--                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

        </section>
    </div>

@endsection

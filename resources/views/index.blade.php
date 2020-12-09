@extends('layout')
@section('content')
    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Pesquisa leis</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Digite o código da lei ou assunto">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Pesquisar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    <div class="container">
    <section class="features-icons">
        <div class="accordion" id="accordionExample">
            @if($perguntas)
            @foreach($perguntas as $pergunta)
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse-{{$pergunta->id}}" aria-expanded="{{ $pergunta == $perguntas->first() ? "true" : "false" }}">
                        <span class="title">{{ $pergunta->title }}</span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>

                    <div id="collapse-{{$pergunta->id}}" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            {!! $pergunta->description !!}
                            <br>
                            <br>

                            @if($pergunta->status)
                                @foreach($subCategorias as $subCategoria)
                                    @if($subCategoria->parent_id == $pergunta->id)
                                        <h5><a href="{{ url('respostas/'.$subCategoria->id) }}">{{ $subCategoria->title }}</a></h5>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </section>
    </div>

@endsection

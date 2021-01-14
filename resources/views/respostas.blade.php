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
                                    {!! $pergunta->description !!}
                                    <br>
                                        @foreach($subCategorias as $subCategoria)
                                            @if($subCategoria->parent_id == $pergunta->id)
                                                <h6><a href="{{ url('respostas/'.$subCategoria->id) }}" target="_blank">{{ $subCategoria->title }}</a></h6>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
    </div>
@endsection

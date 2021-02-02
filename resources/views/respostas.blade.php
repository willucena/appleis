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
                                    @foreach($subCategorias as $subCategoria)
                                        @if($subCategoria->parent_id == $pergunta->id)
                                            <h6><a href="{{ url('respostas/'.$subCategoria->id) }}" target="_blank">{{ $subCategoria->title }}</a></h6>
                                        @endif
                                    @endforeach
                                    {!! $pergunta->description !!}

                                        <?php $file = json_decode($pergunta->file) ?>
                                        @if(is_array($file) && count($file) >= 1)
                                        <a target="_blank" href="{{ '/storage/'.json_decode($pergunta->file)[0]->download_link }}" download> {{ json_decode($pergunta->file)[0]->original_name }}</a>
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

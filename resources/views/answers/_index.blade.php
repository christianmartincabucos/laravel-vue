<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answersCount  ." ". str_plural('Answer', $answersCount) }}</h2>
                </div>
                <hr>
                @foreach($answers as $answer)
                <div class="media">
                    <div class="d-flex flex-column vote-controls">
                        <a title="This answer is useful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="vote-count">1230</span>
                        <a title="This answer is not useful" class="v te-down off">
                            <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a title="Mark this as best answer (Click again to undo)" class="vote-accepted mt-2">
                            <i class="fas fa-check fa-2x"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        @parsedown ($answer->body)
                        <div class="float-right">
                            <span class="text-muted">Answered {{ $answer->created_date }}</span>
                            <div class="media mt-2">
                                <a href="{{ $answer->user->url }}" class="pr-2">
                                    <img src="{{ $answer->user->avatar }}">
                                </a>
                                <div class="media-body mt-1">
                                    <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
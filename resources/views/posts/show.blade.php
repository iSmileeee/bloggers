<x-app-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Post Content -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h1 class="h2 mb-0">{{ $post->title }}</h1>
                                @if(Auth::id() === $post->user_id)
                                    <div class="btn-group">
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary btn-sm">
                                            <i class="fas fa-edit mr-1"></i>Edit
                                        </a>
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}" onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash mr-1"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>

                            <div class="post-meta mb-4">
                                <span class="mr-3"><i class="fas fa-user mr-1"></i>{{ $post->user?->name ?? 'Anonymous' }}</span>
                                <span><i class="fas fa-calendar mr-1"></i>{{ $post->created_at->format('M d, Y \a\t H:i') }}</span>
                            </div>

                            <div class="post-content">
                                {!! nl2br(e($post->content)) !!}
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="h4 mb-4">
                                <i class="fas fa-comments mr-2 text-primary"></i>Comments ({{ $post->comments->count() }})
                            </h3>

                            @forelse($post->comments as $comment)
                                <div class="comment-bubble mb-3 p-3 bg-light rounded">
                                    <div class="d-flex align-items-start">
                                        <div class="comment-avatar mr-3">
                                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="comment-header mb-2">
                                                <strong>{{ $comment->user?->name ?? 'Anonymous' }}</strong>
                                                <small class="text-muted ml-2">{{ $comment->created_at->diffForHumans() }}</small>
                                            </div>
                                            <div class="comment-content">
                                                {{ $comment->content }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-4">
                                    <i class="fas fa-comment-slash fa-2x text-muted mb-2"></i>
                                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                                </div>
                            @endforelse

                            @auth
                                <div class="comment-form mt-4">
                                    <h5 class="mb-3">
                                        <i class="fas fa-reply mr-2 text-secondary"></i>Add a Comment
                                    </h5>
                                    <form method="POST" action="{{ route('comments.store', $post) }}">
                                        @csrf
                                        <div class="form-group">
                                            <textarea id="content" name="content" rows="4" class="form-control" placeholder="Share your thoughts..." required></textarea>
                                            @error('content')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane mr-2"></i>{{ __('Post Comment') }}
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="text-center py-3 bg-light rounded">
                                    <p class="mb-2">Want to join the conversation?</p>
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-sign-in-alt mr-1"></i>Login to Comment
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

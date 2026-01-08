<x-app-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="h3 mb-0">
                                    <i class="fas fa-list mr-2 text-primary"></i>{{ __('My Posts') }}
                                </h2>
                                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus mr-2"></i>Create New Post
                                </a>
                            </div>

                            @forelse($posts as $post)
                                <div class="post-card mb-3">
                                    <div class="card border">
                                        <div class="card-body p-3">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">
                                                        <a href="{{ route('posts.show', $post) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                                                    </h5>
                                                    <div class="post-meta small text-muted">
                                                        <span><i class="fas fa-calendar mr-1"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                                        <span class="ml-3"><i class="fas fa-comments mr-1"></i>{{ $post->comments->count() }} comments</span>
                                                    </div>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form method="POST" action="{{ route('posts.destroy', $post) }}" onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-5">
                                    <i class="fas fa-edit fa-3x text-muted mb-3"></i>
                                    <h5 class="text-muted mb-2">No posts yet</h5>
                                    <p class="text-muted mb-3">Start sharing your thoughts with the world!</p>
                                    <a href="{{ route('posts.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus mr-2"></i>Create Your First Post
                                    </a>
                                </div>
                            @endforelse

                            <!-- Pagination -->
                            @if($posts->hasPages())
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $posts->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

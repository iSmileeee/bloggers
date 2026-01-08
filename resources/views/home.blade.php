<x-app-layout>
    <!-- Hero Section -->
    <section class="hero text-center py-5">
        <div class="container">
            <h1 class="display-4 font-weight-bold mb-3">Welcome to Bloggers</h1>
            <p class="lead mb-4">Discover amazing stories, insights, and perspectives from our community of writers.</p>
            @auth
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-plus mr-2"></i>Create a Post
                </a>
            @else
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-user-plus mr-2"></i>Join Our Community
                </a>
            @endauth
        </div>
    </section>

    <!-- Posts Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Latest Posts</h2>
            @forelse($posts as $post)
                <div class="post-card mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1">
                                    <h3 class="h4 mb-1">
                                        <a href="{{ route('posts.show', $post) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                                    </h3>
                                    <div class="post-meta">
                                        <span><i class="fas fa-user mr-1"></i>{{ $post->user?->name ?? 'Anonymous' }}</span>
                                        <span><i class="fas fa-calendar mr-1"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                        <span><i class="fas fa-comments mr-1"></i>{{ $post->comments->count() }} comments</span>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text text-muted mb-3">{{ Str::limit(strip_tags($post->content), 300) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="read-more text-primary font-weight-bold">
                                Read More <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">No posts yet</h3>
                    <p class="text-muted">Be the first to share your story!</p>
                    @auth
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus mr-2"></i>Create First Post
                        </a>
                    @endauth
                </div>
            @endforelse

            <!-- Pagination -->
            @if($posts->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>
</x-app-layout>

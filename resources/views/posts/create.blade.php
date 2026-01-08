<x-app-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h2 class="h3">
                                    <i class="fas fa-plus-circle mr-2 text-primary"></i>{{ __('Create New Post') }}
                                </h2>
                                <p class="text-muted">Share your thoughts with the world</p>
                            </div>

                            <form method="POST" action="{{ route('posts.store') }}">
                                @csrf

                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title" class="font-weight-bold">
                                        <i class="fas fa-heading mr-1 text-secondary"></i>{{ __('Title') }}
                                    </label>
                                    <input id="title" class="form-control form-control-lg" type="text" name="title" value="{{ old('title') }}" placeholder="Enter an engaging title..." required autofocus autocomplete="title" />
                                    @error('title')
                                        <div class="text-danger small mt-1">
                                            <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Content -->
                                <div class="form-group">
                                    <label for="content" class="font-weight-bold">
                                        <i class="fas fa-edit mr-1 text-secondary"></i>{{ __('Content') }}
                                    </label>
                                    <textarea id="content" class="form-control" name="content" rows="12" placeholder="Write your post content here..." required>{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="text-danger small mt-1">
                                            <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="fas fa-paper-plane mr-2"></i>{{ __('Create Post') }}
                                    </button>
                                    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-lg ml-2">
                                        <i class="fas fa-times mr-2"></i>Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

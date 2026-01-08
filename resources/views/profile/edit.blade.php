<x-app-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h2 class="h3">
                                    <i class="fas fa-user-edit mr-2 text-primary"></i>{{ __('Profile Settings') }}
                                </h2>
                                <p class="text-muted">Manage your account information</p>
                            </div>

                            <!-- Profile Information -->
                            <div class="mb-4">
                                <h5 class="mb-3">
                                    <i class="fas fa-user mr-2 text-secondary"></i>{{ __('Profile Information') }}
                                </h5>
                                <p class="text-muted small mb-3">{{ __("Update your account's profile information and email address.") }}</p>

                                <form method="post" action="{{ route('profile.update') }}" class="needs-validation" novalidate>
                                    @csrf
                                    @method('patch')

                                    <div class="form-group">
                                        <label for="name" class="font-weight-bold">
                                            <i class="fas fa-signature mr-1 text-secondary"></i>{{ __('Name') }}
                                        </label>
                                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                                        <div class="invalid-feedback">
                                            Please provide a valid name.
                                        </div>
                                        @error('name')
                                            <div class="text-danger small mt-1">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="font-weight-bold">
                                            <i class="fas fa-envelope mr-1 text-secondary"></i>{{ __('Email') }}
                                        </label>
                                        <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        @error('email')
                                            <div class="text-danger small mt-1">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                            </div>
                                        @enderror

                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                            <div class="mt-2">
                                                <p class="text-warning small">
                                                    <i class="fas fa-exclamation-triangle mr-1"></i>{{ __('Your email address is unverified.') }}
                                                </p>
                                                <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-warning btn-sm">
                                                        <i class="fas fa-envelope mr-1"></i>{{ __('Resend Verification Email') }}
                                                    </button>
                                                </form>

                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 text-success small">
                                                        <i class="fas fa-check mr-1"></i>{{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save mr-2"></i>{{ __('Save Changes') }}
                                    </button>

                                    @if (session('status') === 'profile-updated')
                                        <div class="alert alert-success mt-3">
                                            <i class="fas fa-check mr-2"></i>{{ __('Profile updated successfully!') }}
                                        </div>
                                    @endif
                                </form>
                            </div>

                            <hr>

                            <!-- Change Password -->
                            <div class="mb-4">
                                <h5 class="mb-3">
                                    <i class="fas fa-lock mr-2 text-secondary"></i>{{ __('Change Password') }}
                                </h5>
                                <p class="text-muted small mb-3">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label for="current_password" class="font-weight-bold">
                                            <i class="fas fa-key mr-1 text-secondary"></i>{{ __('Current Password') }}
                                        </label>
                                        <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                                        @error('current_password')
                                            <div class="text-danger small mt-1">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="font-weight-bold">
                                            <i class="fas fa-lock mr-1 text-secondary"></i>{{ __('New Password') }}
                                        </label>
                                        <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                                        @error('password')
                                            <div class="text-danger small mt-1">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation" class="font-weight-bold">
                                            <i class="fas fa-lock mr-1 text-secondary"></i>{{ __('Confirm New Password') }}
                                        </label>
                                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                                        @error('password_confirmation')
                                            <div class="text-danger small mt-1">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save mr-2"></i>{{ __('Update Password') }}
                                    </button>
                                </form>
                            </div>

                            <hr>

                            <!-- Delete Account -->
                            <div>
                                <h5 class="mb-3 text-danger">
                                    <i class="fas fa-exclamation-triangle mr-2"></i>{{ __('Delete Account') }}
                                </h5>
                                <p class="text-muted small mb-3">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>

                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteAccountModal">
                                    <i class="fas fa-trash mr-2"></i>{{ __('Delete Account') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Account Modal -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="deleteAccountModalLabel">
                        <i class="fas fa-exclamation-triangle mr-2"></i>{{ __('Delete Account') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="form-group">
                            <label for="password_delete" class="font-weight-bold">{{ __('Password') }}</label>
                            <input id="password_delete" name="password" type="password" class="form-control" placeholder="Enter your password" required />
                            @error('password')
                                <div class="text-danger small mt-1">
                                    <i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fas fa-times mr-1"></i>{{ __('Cancel') }}
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash mr-1"></i>{{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

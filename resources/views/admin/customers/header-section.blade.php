<div class="row">
    <div class="col-12">
        <div class="card mb-6">
            <div class="user-profile-header-banner">
                <img src="{{ App\Helper\Helper::getCoverImage('storage/user/profile/'.$user->id.'/cover', $user?->cover_image) }}"
                    alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-8">
                <div class="flex-shrink-0 mt-1 mx-sm-0 mx-auto">
                    <img src="{{ App\Helper\Helper::getProfileImage('storage/user/profile/'.$user->id, $user?->profile_image) }}"
                        alt="user image"
                        class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img d-block rounded">
                </div>
                <div class="flex-grow-1 mt-3 mt-lg-5">
                    <div
                        class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4 class="mb-2 mt-lg-7">{{ $user->name }}</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 mt-4">

                                <li class="list-inline-item">
                                    <i class="bx bx-calendar me-2 align-top"></i><span class="fw-medium">
                                        Joined
                                        {{ App\Helper\Helper::formatStringDate($user->created_at, false) }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('custom.layouts.app')
@section('content')
@include('custom.inc.sidebar')
<main class="main-content mt-1 border-radius-lg">
    @include('custom.inc.navbar')
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Authors table</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            {{-- <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                            </div> --}}
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $post->user->name }}</h6>
                              <p class="text-xs text-secondary mb-0">{{ $post->user->email }}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $post->title }}</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ $post->created_at->diffForHumans() }}</span>
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('post.edit', $post->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</main>
@endsection
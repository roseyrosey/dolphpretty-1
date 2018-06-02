@extends('layouts.app')

@section('template_title')
	{{ $user->name }}'s Profile
@endsection


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-body">

    					{{-- <img src="@if ($user->profile->avatar_status == 1) {{ $user->profile->avatar }} @else {{ Gravatar::get($user->email) }} @endif" alt="{{ $user->name }}" class="user-avatar"> --}}

						<dl class="user-info">

							<dd>
								{{ $user->name }}
							</dd>

							
							<dd>
								{{ $user->prenom }}
							</dd>

							<dd>
								{{ $user->phone }}
							</dd>
							<dd>
								@if($user->user_type == 1)
								Coifseusse
								@else 
								client
								@endif
								
							</dd>

							
							<dd>
								{{ $user->email }}
							</dd>

						</dl>
					</div>
					<div class="panel-footer">
						@if ( Auth::user() == $user )
                        <a href="{{route('profile.edit',$user->id )}}" class="btn btn-info"> Modifier mon Profil </a>
					    @endif
					</div>
					<br>
					<div class="panel-footer">
						@if($user->user_type == 1)
							 <a href="{{route('profile.edit',$user->id )}}" class="btn btn-info"> Ajouter un service </a>	
							  <a href="{{route('profile.edit',$user->id )}}" class="btn btn-info"> Ajouter une realisation </a>	
								@else 
								
								@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@extends('layouts/app')

@section('content')
    <main id="comics">
        <div class="container">
            <div class="comics-list">
                <div class="current-series">
                    Current Series
                </div>
                
                @foreach($comic as $comicItem)
                    <div class="comic">
                        <div class="comic-image">
                            <img class="comic-img" src="{{$comicItem['thumb']}}" alt="">
                        </div>
                        <h6 class="comic-title">{{ $comicItem['title'] }}</h6>
                    </div>
                    {{-- <a href="{{route('comic')}}" class="">
                    </a> --}}
                @endforeach
    
                <button class="btn">
                    Load more
                </button>
            </div>
        </div>
        
    </main>
@endsection
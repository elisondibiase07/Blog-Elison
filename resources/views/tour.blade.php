{{-- <x-layout>
    
    <x-header title="Benvenuti nella Grande Mela"/>
    
    <div class="container-fluid d-flex">
        <div class="row">
            @foreach($posti as $posto)
            <div class="col-12 col-md-4 col-lg-4 ">
                <x-card
                name="{{$posto['name']}}"
                description="{{$posto['description']}}"
                img="{{$posto['img']}}"
                />
            </div>
            @endforeach
        </div>
        
    </div>
    
    
</x-layout> --}}

<x-layout>
    <x-header
    title="Benvenuto nella Grande Mela"
    />
    <div class="container-fluid my-5">
        <div class="row ">
            @foreach($posti as $posto)
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column">
                <x-card
                img="{{$posto['img']}}"
                name="{{$posto['name']}}"
                    />
            </div>
            @endforeach
        </div>
    </div>
    
       
</x-layout>
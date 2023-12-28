@extends('layouts.app')

@section('content')
   <div class="col-md-6 offset-md-3 mt-10">
        <div class="alert p-10 bg-primary text-center pt-5 text-white pb-0">
            You got <b>{{Auth::user()->accesses()->where('status','1')->count()}}</b> type of access 
            @foreach (Auth::user()->accesses()->where('status','1')->get() as $item)
            <b class="bg-warning text-white pl-2 pr-2 border ">{{$item->title}}</b>
            @endforeach

            <hr>

            Choose one to continue
            <select name="loginType" class="p-2" id="selectOption">
                <option value="">Login as</option>
                @foreach (Auth::user()->accesses()->where('status','1')->get() as $item)
                    <option value="/{{$item->title}}/dashboard">{{$item->title}}</option>
                @endforeach
            </select>
        </div>

   </div>
@endsection

@push('scripts')
<script>
    document.getElementById('selectOption').addEventListener('change', function() {
      // Get the selected option value
      var selectedValue = this.value;

      // Check if a valid option is selected
      if (selectedValue) {
        // Redirect to the selected route
        window.location.href = selectedValue;
      }
    });
  </script>
@endpush
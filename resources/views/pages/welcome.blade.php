@extends('layout.main')

@section('header')
	@parent
	<p>I'm Header</p>

@endsection

@section('content')
	
	<div id="app">
	 	 
		  <p> @{{ message }} </p>
		  <input v-model="message">
		  <pre>
		  @{{ $data | json }}
		  </pre>
	</div>
@endsection

@section('footer')
<!-- footer here! -->
@endsection

@section('scripts')

		<script type="text/javascript">
            var app = new Vue({
              el: '#app',
              data: {
                message: "Input some text!"
              }
            })
        </script>

@endsection
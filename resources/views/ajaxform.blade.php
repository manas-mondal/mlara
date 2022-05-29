
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<p><select name="country" onchange="getstate(this.value);">
	<option value="">-Select-</option>

	@foreach($countries as $c)
        <option value="{{ $c->id }}">{{$c->name }}</option>
	@endforeach	
</select>
</p>

<p>
	<select name="state" id="state">
		<option>-States</option>
		<option></option>
	</select>
	</p>

	<script >
		function getstate(cid){

		  var fd=new FormData();
		  fd.append("cid",cid);
		  fd.append("_token","{{Session::token()  }}");
		  $.ajax({
		  	url:"{{ url('/abc') }}",
		  	type:'POST',
		  	data:fd,
		  	processData:false,
		  	contentType:false,
		  	success:function(resp){
		  		$("#state").html(resp);
		  	}
		  })

		}
		
	</script>
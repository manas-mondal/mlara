<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
     <form action="{{url('/upd_ins')}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value={{$dt->id}}>
     	@csrf
     	<p>Name</p>
     	<p><input type="text" name="name" value={{ $dt->name }}></p>
     	@error("name")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     	<p>Gender</p>
     	<p><input @if($dt->gender=="Male") checked @endif type="radio" name="gender" value="Male">Male
     		<input @if($dt->gender=="Female") checked @endif type="radio" name="gender" value="Female">Female</p>
     		@error("gender")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Stream</p>
     		<p><select name="stream">
     			<option value="">-select-</option>
     			<option @if($dt->stream=="Btech") selected @endif value="Btech">Btech</option>
     			<option @if($dt->stream=="Bcom") selected @endif value="Bcom">Bcom</option>
     		</select>
     		</p>
     		@error("stream")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Enter Marks</p>
     		<p><input type="text" name="marks" value={{$dt->marks}}></p>
     		@error("marks")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Subject</p>
     		<p>
     			<input @if(in_array("PHP", $sub)) checked @endif type="checkbox" name="sub[]" value="PHP">PHP
     		<input @if(in_array("JAVA SCRIPT", $sub)) checked @endif type="checkbox" name="sub[]" value="JAVA SCRIPT">JAVA SCRIPT
     		</p>
     		<p><input type="file" name="img"></p>
               <p><img style="width:60px;" src="{{url('/upload')}}/{{$dt->image}}"/></p>
     		
     		<p><input type="submit" name="save" value="Save"></p>
     </form>
</body>
</html>
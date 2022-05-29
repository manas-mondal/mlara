<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
     <form action="{{url('/insfrm')}}" method="post" enctype="multipart/form-data">
     	@csrf
     	<p>Name</p>
     	<p><input type="text" name="name"></p>
     	@error("name")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     	<p>Gender</p>
     	<p><input type="radio" name="gender" value="Male">Male
     		<input type="radio" name="gender" value="Female">Female</p>
     		@error("gender")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Stream</p>
     		<p><select name="stream">
     			<option value="">-select-</option>
     			<option value="Btech">Btech</option>
     			<option value="Bcom">Bcom</option>
     		</select>
     		</p>
     		@error("stream")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Enter Marks</p>
     		<p><input type="text" name="marks"></p>
     		@error("marks")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p>Subject</p>
     		<p>
     			<input type="checkbox" name="sub[]" value="PHP">PHP
     		<input type="checkbox" name="sub[]" value="JAVA SCRIPT">JAVA SCRIPT
     		</p>
     		<p><input type="file" name="img"></p>
     		@error("img")
           <p style="color:#F00">{{$message}}</p>
     	@enderror
     		<p><input type="submit" name="save" value="Save"></p>
     </form>
</body>
</html>
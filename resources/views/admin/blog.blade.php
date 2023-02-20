<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 100px;
  background: #0c0b0b;
}

/* Header/Blog Title */
.header {
  padding: 20px;
  font-size: 15px;
  flood-color: azure;
  text-align: center;
  background: rgb(82, 224, 243);
  margin-top: 40px;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 50%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 400px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
    @foreach ($blog as $key=> $blog )
<div class="header">
  <h1>{{$blog->subject}}</h1>
</div>

<div class="row">
  
  <div class="leftcolumn">
    <div class="card">
       
      <h5>{{$blog->created_at}}</h5>
      <p>Some text..</p>
      <p>{{$blog->msg}}</p>
    </div>
    @endforeach
  </div>
</body>
</html>

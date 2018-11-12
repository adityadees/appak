<html>
<head>
    <title>Dependent select Dropdown box</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <style>
   #loader{
   visibility:hidden;
   }
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><h2>DEPENDENT SELECT BOX(Country & States)</h2></div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group-sm">

                                <div class="col-md-6">
                                    <select name="country" class="form-control">
                                        <option value="">--Select Country--</option>
                                        @foreach ($countries as $country => $value)
                                        <option value="{{ $country }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="state" class="form-control">
                                     <option>--State--</option>

                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                         </div>
                     </form>
                 </div>

                 <div class="panel-footer">- By: [Your Name]</div>
             </div>
         </div>
     </div>
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
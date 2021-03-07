<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    {{-- ***** creat ***** --}}
    <div class="content ">
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card align-items-center mt-5">
                        <div class="card-header">
                            <h4 class="card-title">Manage Users</h4>
                        </div>
                        <div class="card-body">
                            <form id="myForm" action="/create" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName"
                                        placeholder="Enter name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputmobile">Mobile</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="mobile">
                                </div>


                                <div class="form-group">
                                    <input type="hidden" id="serviceHidden" class="form-control" name="service">
                                </div>


                                <div class="form-group">

                                    <input type="hidden" id="timeHidden" class="form-control" name="time">

                                </div>


                                <a class="btn btn-primary btn-block " data-toggle="modal" data-target="#exampleModal"
                            
                                    name="submit"> <i class="fas fa-check"></i>
                                    Submit
                                </a>
                            </form>
                        </div>
                    </div>
                </div>


                {{-- ********************************first pop up ********************** --}}

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please select the service that you are
                                    intrested in </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                @if (isset($services))
                                    @foreach ($services as $service)
                                      <button class="btn btn-primary btn-lg servicesButton ml-4 mr-4 text-center"
                                            value="{{ $service->name }}">
                                            {{ $service->name }}</button>
                                    @endforeach
                                @endif
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-block"   data-dismiss="modal" 
                                  data-toggle="modal" data-target="#exampleModalCenter">
                                        send
                                    </button>
                                

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-defult" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    



                    {{-- ********************************second pop up ********************** --}}

                    <!-- Modal -->
                    
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">When do you want to make the
                                        order ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    @if (isset($times))
                                        @foreach ($times as $time)

                                            <button type="button" class="btn btn-primary btn-lg  ml-4 mr-4 timeButton"
                                                value="{{ $time->time }}">
                                                {{ $time->time }}</button>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button onclick="saveChanges()" type="button" class="btn btn-block">Save
                                        changes</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>




                    <script>
                        function saveChanges() {
                            document.getElementById("myForm").submit();

                        }

                        $(".servicesButton").click(function() {
                         
                            $("#serviceHidden").val($(this).val());

                        });

                        
                        $(".timeButton").click(function() {
                            $("#timeHidden").val($(this).val());
                          
                            // alert(fired_button);
                        });

                    </script>
</body>

</html>

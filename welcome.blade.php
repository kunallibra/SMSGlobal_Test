<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Global Test - Kunal Parekh</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

      <div class="container-fluid p-2 bg-info text-white text-center">
        <h1>  SMS Global Test</h1>
        <p>Kunal Parekh</p>
      </div>
      @if(session()->has('msgSent'))
          <div class="alert alert-success">
              {{ session()->get('msgSent') }}
          </div>
      @endif


      <div class="container mt-5">

        <div class="row">
          <div class="col-sm-12">
            <p>My current balance is: ${{$balance}}</p>
          </div>
        </div>
        <hr>
        <div class="row">

          <div class="col-sm-4">
            <h3>API Key</h3>
            <p>{{$apiKey}}</p>
          </div>

          <div class="col-sm-4">
            <h3>Send SMS</h3>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Send New SMS
            </button>

            <!-- Modal -->
            <form action = "{{URL('/smsg/send-sms')}}"   method="post">
              {{csrf_field()}}
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send SMS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <label class="sr-only" for="phNumInp">Phone Number</label>
                           <div class="input-group mb-2">
                             <div class="input-group-prepend">
                               <div class="input-group-text">+61</div>
                             </div>
                             <input type="text" class="form-control" id="phNumInp" name="phNumInp" placeholder="E.g: 412345678" required>
                           </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="textmsgInp">Message</label>
                          <textarea class="form-control" id="textmsgInp" name="textmsgInp" rows="3" required></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send...</button>
                  </div>
                </div>
              </div>
            </div>
           </form>


          </div>
          <div class="col-sm-4">
            <h3>Sent SMS's</h3>
            <p>Click here to View History</p>
          </div>

        </div>
      </div>


        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">

                </div>

               
            </div>
        </div>
    </body>
</html>

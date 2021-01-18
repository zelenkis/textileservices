<section class="contactus" id="contactus">
    <h1 class="text-center">Contact</h1>
    <div class="container" style="min-height: 200px">
        <div class="row">
            <div class="card-body">
                <h5 class="telephone card-title">Telefon</h5>
                <p class="telephone-text card-text">
                    <i class="fa fa-phone-alt" aria-hidden="true"></i>
                    +373 (79) 123 654
                </p>
            </div>

            <div class="card-body">
                <h5 class="email card-title">Email</h5>
                <p class="email-text card-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    draperii@studio.eu
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="col contactus-right bg-light">
                    <h3 class="message-title text-center"> Formular de contact:</h3>
    
                    {!! Form::open(['route'=>'contactus.store']) !!}
                    @csrf
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::text('name', old('name'), ['class'=>'form-control form-control-lg border-bottom rounded-0 bg-transparent', 'placeholder'=>'Numele dvs.', 'style'=>'border:none']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
    
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::text('email', old('email'), ['class'=>'form-control form-control-lg border-bottom rounded-0 bg-transparent', 'placeholder'=>'Email', 'style'=>'border:none']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
    
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control form-control-lg border-bottom rounded-0 bg-transparent', 'placeholder'=>'Lasati-ne un mesaj aici...', 'style'=>'border:none']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
    
                    <div class="form-group">
                        <button type="submit" class="message-send btn btn-info container-fluid rounded-0">Expediaza</button>
                    </div>
    
                    {!! Form::close() !!}
                </div> -->
</section>

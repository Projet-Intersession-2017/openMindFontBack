@extends('welcome')

@section('menu')

@parent

@endsection

@section('corps')

<div class="row" class="blocContact">
    <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
            <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="paragrapheContact">Votre nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="paragrapheContact">Votre email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                    </div>
                 	<div class="form-group">
                        <label for="subject" class="paragrapheContact">Sujet</label>
                        <input type="text" class="form-control" id="sujet" placeholder="Sujet" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="name" class="paragrapheContact">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                        Envoyer</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('footer')
	@parent
	@endsection
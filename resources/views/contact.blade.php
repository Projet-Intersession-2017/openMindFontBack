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
                        <label for="name">Votre nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Votre email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                    </div>
                 	<div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" class="form-control" id="sujet" placeholder="Sujet" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                        Send Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
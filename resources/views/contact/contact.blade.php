@extends('layouts.app')
@section('content')
<div id="heading-breadcrumbs" style=" background: url('img/prettylogin.jpeg') center center repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1><strong>Contact</strong> </h1>
                    </div>
                    <div class="col-md-8">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><strong>Accueil</strong> </a>
                            </li>
                            <li><strong>Contact</strong> </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>Des objectifs a atteindre? coiffez-vous plus rapidement</h2>
                                </div>

                                <p class="lead">Nous sommes a votre disposition pour toute aide ou information possible. N'hésitez pa a nous contacter</p>
                                
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Adresse</h3>
                                <p>Cameroun-Yaoundé
                                    <br>Mvog-mbi
                                    
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>CONTACT</h3>
                                <p class="text-muted">

                                        <br>contact@dolphpretty.com 
                                        <br>Cameroun: +237 697718256 
                                        <br>Canada: +1(438)722-1440 
                                        <br>Cote d'ivoire: +224 57971825 
                                        <br>France: +33 613202181

</p>
                                
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Email</h3>
                                <p class="text-muted">contact@dolpretty.com</p>
                                <ul class="list-style-none">
                                    
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2> Laissez un message </h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Prenon</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nom</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-location-arrow"></i> Envoyer</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>

@stop
@extends('layouts.app')
@section('content')
<section class="bar background-white" clearfix>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="heading">
                                
                            </div>
                        </div>
                        <div class="col-md-6-center">
                            <div class="heading">
                                <h2>Nos prestataires</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
            <div class="row">
                <!-- mini form de reservation-->
                 <div class="col-md-3 form-align">
                    <form>
                                        
                                <p><font color="white"> Reservez maintenant...</font></p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="firstname" name="nom" placeholder="Nom & Prenon">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="pass" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="coiffeuse">

                                                <option value=""> Votre coiffure </option>
                                                <option value="rasta"> Rasta </option>
                                            <option value="passe meche"> passe meche</option>
                                            <option value="chugnon"> chugnon </option>
                                            <option value="greffe"> greffe</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="coiffeuse">
                                                <option> Pays</option>
                                            <option value="camerou "> Cameroun</option>
                                            <option value="france"> France</option>
                                            <option value="canada"> Canada</option>
                                            <option value="cote d'ivoire"> Cote D'ivoire</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="firstname" name="ville" placeholder="Ville">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="firstname" name="quartier" placeholder="Quartier">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="firstname" name="prenom" placeholder="Date">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="message" class="form-control" name="desc" placeholder="Description"></textarea>
                                        </div>
                                    </div>

                                    
                                </div>
                            </form>
                 </div>
                 <!-- /mini Form de reservation  -->

                 <!-- ***menu prestataires  -->
        <div id="exTab3" class=" col-md-8 container">
                
                
                <div class="tab-content clearfix">
                <div class="tab-pane active" id="1b">
                   <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-2 col-sm-2">
                            <div class="team-member">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="{{asset('img/person-2.jpg')}}" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-2">
                            <div class="team-member">
                                <h3><a href="team-member.html"> {{ $user->name}} </a></h3>
                                <p class="role">{{ $user->prenom }}</p>
                               {{--  <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div> --}}
                                <div class="text">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>          
                    </div>
                     
                 </div>
             </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="see-more">
                                <a href="portfolio-4.html" class="btn btn-template-main">Voir Tous nos membres</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container -->
            </section>
@stop


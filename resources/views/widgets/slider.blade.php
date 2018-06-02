  <section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
                   <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6 right ">
                                    
                                     <h2>  <font color="white" size="6px"> Tous vos services de beauté desormais en un clic ... </font> </h2>
                                    <p class="buttons">
                
                                        <a href="" class="btn btn-template-main">Devenez prestataire </a>
                                    </p>
                                
                                </div>
                                <div class="col-sm-6 right">
                                 
                              
                                 @guest
                                <div class="col-md-8 col-md-offset-2">
                                 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">prenom</label>

                            <div class="col-md-12">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-12">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Client/Coiffeurse</label>

                            <div class="col-md-12">
                                <select id="user_type" name="user_type" class="form-control" required>
                                    <option value="1"> Client </option>
                                    <option value="2"> Coiffeuse </option>
                                </select>
                               
                                @if ($errors->has('user_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                         <hr>
                    @include('widgets.social_login')
                    </form>
                                    </div>
                                    @else
                                    <div class="row text-center form-align ">

                               

                                <div class="col-md-8 col-md-offset-2">
                             <form>
                
                                <div class="row">
                                
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

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-location-arrow"></i> Envoyer</button>
                                   </div>
                                </div>
                                
                                <!-- /.row -->
                            </form>

                                  </div>
                                     @endguest
                                   </div>                                    
                                </div>
                                

                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
      </section>



        <section class="bar background-white no-mb">
         
                <div class="row">
                    <div class="col-md-12">

                        <div class="heading text-center">
                            <h2> Coiffez-vous sereinement avec Dolphpretty </h2>
                        </div>

                        <div class="row">
                        <div class="col-sm-6">
                            <div class="project owl-carousel">
                                <div class="item">
                                    <img src="{{asset('img/prettyimage2.jpg')}}" alt="" class="img-responsive">
                                </div>
                                
                            </div>
                            <!-- /.project owl-slider -->

                        </div>
                                
                    <!-- /.project owl-slider -->
                          <div class="col-sm-6 lead">
                                     <p> <strong>Dolphpretty </strong> est une plateforme de mise en relation entre les femmes et les professionnels de l’esthétique en générale. Nous vous permetons de commander tous vos produits de beauté en ligne et de réserver immédiatement votre meilleure coiffeuse ou estheticienne. Les clientes qui souhaitent des prestations spécifiques et de qualité peuvent trouver un rendez-vous dans un salon expérimenté ou à domicile.</p>
                                     <br>
                                     <p class="buttons">
                                        <a href="" class="btn btn-template-main">Reservez maintenant </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

         <section class="bar background-white">
            <div class="container">
                <div class="col-md-12">

                       <div class="heading text-center">
                            <h2> Pourquoi nous choisir </h2>
                        </div>
                        
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-mortar-board"></i>
                                </div>
                                <h3> Les meilleures coiffeuses</h3>
                                <p class="intro"> <font color="black">
                                     Des coiffeuses sérieuses offrant un service de qualité. </font></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-mortar-board"></i>
                                </div>
                                <h3>Les meilleures produits</h3>
                                <p class="intro"> 
                                    <font color="black">
                                    Un large choix de produit de très grande marque et de qualités Premium a votre disposition.</font></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-group"></i>
                                </div>
                                <h3>Une équipe à votre écoute</h3>
                                 <p class="intro"> 
                                  <font color="black">Un service clientèle réactif, à votre écoute par mail et SMS.</font></p>
                            </div>
                        </div>
                    

                    
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-white no-mb">
            <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading">
                                <h2>Nos atouts</h2>
                            </div>
                            <ul class="ul-icons">
                                <li><i class="fa fa-check"></i>Une équipe pluridisciplinaire</li>
                                
                                <li><i class="fa fa-check"></i>Le goût du travail bien fait</li>
                                
                                <li><i class="fa fa-check"></i>Une équipe portée vers le social</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="heading">
                                <h2>Nos valeurs</h2>
                            </div>

                            <ul class="ul-icons">
                                <li><i class="fa fa-check"></i>Nous sommes centre-clients : Nous définissons nos priorités par rapport aux demandes des clients.</li>
                                
                                <li><i class="fa fa-check"></i>Fluidité et confort : Nous effectuons dans un délais bref le service du client et celui-ci n’a aucun effort à faire tout est pris en charge par notre équipe.</li>
                                
                            </ul>
                        </div>
                         <div class="col-md-4">
                            <div class="heading">
                                <h2> valeurs ajoutees</h2>
                            </div>

                            <ul class="ul-icons">
                                <li><i class="fa fa-check"></i>Gain de temps</li>
                                <li><i class="fa fa-check"></i>Optimisation du rapport qualité / prix.</li>
                                <li><i class="fa fa-check"></i>La garantie de la qualité de service
</li>
                            </ul>
                        </div>
                    </div> 
               </div>
        </section>


         


          
         

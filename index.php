    <?php get_header(); ?>
    <?php wp_enqueue_script("jquery"); ?> 
    <script>
      $(document).ready(function() {
        $('#contact').hide();
        $('#ecoute').hide();
        $('#formule').hide();
        $('#presentation').hide();
        $('#calendar').hide();
        $('#thierry').hide();
        $('#norbert').hide();
        $('#ludo').hide();
        $('#gilles').hide();
        $('#coralie').hide();
        $( "#presentationToggle" ).click(function() {

            $('#contact').hide();
            $('#ecoute').hide();
            $('#formule').hide();
            
            $('#calendar').hide();
            $( "#presentation" ).slideToggle( "slow", function() {
            // Animation complete.
            
            });
        });
        $('#formuleToggle').click(function() {
          $('#contact').hide();
              $('#ecoute').hide();
              
              $('#presentation').hide();
              $('#calendar').hide();
          $('#formule').slideToggle("slow", function() {
              
          });
        });
        $('#ecouteToggle').click(function() {
          $('#contact').hide();
              
          $('#formule').hide();
          $('#presentation').hide();
          $('#calendar').hide();
          $('#ecoute').slideToggle("slow", function() {
              
          });
        });
        $('#contactToggle').click(function() {
          $('#ecoute').hide();
          $('#formule').hide();
          $('#presentation').hide();
          $('#calendar').hide();
          $('#contact').slideToggle("slow", function() {

          });
        });
        $('#calendarToggle').click(function() {
          $('#contact').hide();
          $('#ecoute').hide();
          $('#formule').hide();
          $('#presentation').hide();
          $('#calendar').slideToggle("slow", function() {
              
          });
        });
        $('#tuba').mouseenter(function() {
          $('#thierry').fadeIn("slow")
        });
        $('#tuba').mouseleave(function() {
          $('#thierry').fadeOut("slow")
        });
        $('#cor').mouseenter(function() {
          $('#norbert').fadeIn("slow")
        });
        $('#cor').mouseleave(function() {
          $('#norbert').fadeOut("slow")
        });
        $('#trompette').mouseenter(function() {
          $('#gilles').fadeIn("slow")
          $('#ludo').fadeIn("slow")
        });
        $('#trompette').mouseleave(function() {
          $('#gilles').fadeOut("slow")
          $('#ludo').fadeOut("slow")
        });
        $('#trombonne').mouseenter(function() {
          $('#coralie').fadeIn("slow")
        });
        $('#trombonne').mouseleave(function() {
          $('#coralie').fadeOut("slow")
        });
      });
    
    </script>

    <div id="page">
    <div id="header">
      <div class="container">
          <div class="col-xs-2">
            <input type="button" class="btn btn-warning" id="presentationToggle" value="Présentation" />
          </div>
          <div class="col-xs-2">
            <input type="button" class="btn btn-warning" id="formuleToggle" value="Nos Formules" />
          </div>
          <div class="col-xs-2">
            <input type="button" class="btn btn-warning" id="ecouteToggle" value="Ecoute gratuite" />
          </div>
          <div class="col-xs-2">
            <input type="button" class="btn btn-warning" id="contactToggle" value="Contact" />
          </div>
          <div class="col-xs-2">
            <input type="button" class="btn btn-warning" id="calendarToggle" value="Calendrier" />
          </div>
          <div class="col-xs-2">
            <a href="http://localhost/wordpress/?page_id=68">
              <input type="button" class="btn btn-warning" id="guestbookToggle" value="Livre d'Or" />
            </a>
          </div>
      </div>
      
      <div class="row"></div>
      <div id="calendar">
        <iframe src="https://www.google.com/calendar/embed?src=vivouskaya%40gmail.com&ctz=Europe/Paris" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
      <div class="col-xs-3">
        <div id="presentation">
            <img class="pres" src="wp-content/themes/skaya/images/pres1.jpg"></img>
                
                  </br>
                    <p>
                      <span id="str"><strong><i>Couleur Cuivre</i></strong></span> est un ensemble de cuivres fondé par cinq musiciens qui se sont rencontrés au sein de l’Orchestre de l’Opéra de Massy.
                      <p>Une envie commune de valoriser leur famille d’instruments hors de l’orchestre les a décidés à former ce quintette.</p>

                      <p>Couleur Cuivre explore plus de quatre siècles de musique, de la Renaissance à notre époque, de Gabrielli à Gainsbourg…</p>
                    </p>
                  </br>          
        </div>
      </div>
      <div class="col-xs-3">
        <div id="formule">
        <h3><strong>Nos Formules</strong></h3>
        <div class="col-xs-6">
            <p><strong>Couleur Cuivre propose différents programmes en fonction des publics auxquels ils s’adressent et des lieux  de concerts:</strong></p>

            <p>
              <p>
                  Le large répertoire exploré par le quintette lui permet de s’intégrer aussi bien dans un festival baroque que dans une journée de musique populaire.
              </p>
              <p>
                A côté de ces concerts "à la carte", Couleur Cuivre décline plusieurs programmes thématiques : église, opéra, chansons et airs populaires, musique de films, baroque...        
              </p>
              <p>
                <strong>"église":</strong>  une heure de musique pour cuivres, traversant différentes époques, construite autour de la solennité et de l'acoustique du lieu.
              </p>
              <p>
                <strong>"opéra":</strong>  ouvertures et airs célèbres du grand répertoire.
              </p>
              <p>
                <strong>"on connaît la chanson":</strong>  programme-surprise d’environ une heure et trente minutes (entracte compris) constitué de mélodies, thèmes et chansons célèbres où Carmen côtoie les Beatles, où la Reine de la nuit répond à la Panthère rose, où Poinçonneur des lilas rime avec Alleluia…
              </p>
            <p>
        </div>
        <div class="col-xs-6">
            <strong>
            Couleur Cuivre encadre et anime par ailleurs des actions pédagogiques en direction des écoles, des conservatoires et des pratiquants amateurs:</strong>
            <p>
            <p><strong>Concert éducatif :</strong></p> d’une durée d’environ une heure, ce concert pour les plus jeunes se compose d’un  programme sur mesure, d’une présentation-découverte et essai des instruments.
            </p>
            <p>
            <p><strong>Mini stage d’une journée :</strong></p> Couleur Cuivre a sélectionné un répertoire pour ensemble de cuivres adapté aux différents niveaux de stagiaires. Le matin, concert de Couleur Cuivre (programme à la carte). L’après-midi, travail en groupes encadrés par les membres de Couleur Cuivre sur des œuvres choisies par niveau et préalablement préparées par les stagiaires. Les œuvres sont ensuite jouées lors d’un concert qui clôture  cette journée.
            </p>
            </p>
        </div>
        </div>
      </div>
      <div class="col-xs-3">
        <div id="ecoute"> 
          <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/58988300&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
        </div>
      </div>
      <div class="col-xs-3">
        <div id="contact"> 
          <br>
            <form id="wess" action="https://getsimpleform.com/messages?form_api_token=a75e916a3296952151820f0c42159dc2" method="post">
              <!-- the redirect_to is optional, the form will redirect to the referrer on submission -->
              <input type='hidden' name='redirect_to' value='http://localhost/wordpress/' />
              <!-- all your input fields here.... -->
              <p>Nom: <input type='text' name='nom' /></p>
              <p>Objet: <input type='text' name='objet' /></p>
              <p>Votre message: 
              <br><textarea rows="3" name='message' id="message"></textarea></p>
              <br>
              <p><input type='submit' class="btn btn-info" value='Envoyer' /></p>
          </form>
        </div>
      </div>
      <!-- informations du blog -->
      <div id="nom">
          <?php bloginfo('name'); ?>
      </div>  
      <div id="description">
      <i>
        <?php bloginfo('description'); ?>
      </i>
      <div class="row"></div>
      </div>
      <div id="icons">
        <div class="col-xs-12">
          <div class="col-xs-3">
            <img class="icon" id="trompette" src="wp-content/themes/skaya/images/iconTrompette.png"></img>
          </div>
          <div class="col-xs-3">
            <img class="icon" id="cor" src="wp-content/themes/skaya/images/iconCor.png"></img>
          </div>
          <div class="col-xs-3">  
            <img class="icon" id="trombonne" src="wp-content/themes/skaya/images/iconTrombonne.png"></img>
          </div>
          <div class="col-xs-3">  
            <img class="icon" id="tuba" src="wp-content/themes/skaya/images/iconTuba.png"></img>
          </div>
        </div>
      </div>
      <div class="row"></div>
          <div class="col-xs-2" id="marge">
              <div id="norbert">
                <div class="col-xs-6">
                  <img class="profil" src="wp-content/themes/skaya/images/norbert1.jpg"></img>
                </div>
                <div class="col-xs-6">
                  <p><strong>Norbert Vergonjanne</strong>, cor :</p>
                  <p>
                  1er Prix du CNR de Limoges, il se perfectionne auprès de J.J. Justafré (cor solo Orchestre Philharmonique de Radio-France).

                  Corniste free-lance, il joue au sein de formations telles l’Orchestre National de France, de l’Orchestre de l’Opéra de Paris, l’Orchestre de Paris…</p>
                  <p>
                  Passionné de jazz, il participe a participé à de nombreuses créations avec Michel Legrand, Denis Leloup…
                  Depuis 2006 il est arrangeur et soliste de "Huit et demi" (une nouvelle formation après JustA7 band).

                  Soliste de l’Orchestre de l’Opéra de Massy, Norbert est professeur au conservatoire à rayonnement régional de Cergy Pontoise.
                  </p>
                </div>  
              </div>
          </div>
          <div class="col-xs-2">
            <div id="ludo">
              <div class="col-xs-6">
                <img class="profil" src="wp-content/themes/skaya/images/ludo1.jpg"></img>
              </div>
              <div class="col-xs-6">
                <p><strong>Ludovic Podevin</strong>, trompette :</p>
                <p>
                1er prix du CNSM de Paris, lauréat du concours de Moulins sur allier, membre de l’Orchestre de la Police Nationale.
                Musicien supplémentaire de l’Orchestres de l’Opéra de Paris,de l’Orchestre National de France, de l’Orchestre National de Lille…
                </p>
                </p>
                <p>
                Soliste de l’Orchestre de l’Opéra de Massy, Ludovic est professeur aux conservatoires d’Aubergenville et Clermont
              </div>  
            </div>
          </div>
            <div class="col-xs-2">
                <div id="gilles">
                  <div class="col-xs-6">
                    <img class="profil" src="wp-content/themes/skaya/images/gilles1.jpg"></img>
                  </div>
                  <div class="col-xs-6">
                     <p><strong>Gilles Akoka</strong>, trompette :</p>
                      <p>
                      1er Prix du CNSM de Paris, ex-trompette-solo de l’Orchestre Régional Provence Alpes Côte d’Azur de Cannes, ex-soliste de l’Orchestre Colonne,
                      aujourd’hui trompettiste free-lance à Paris, membre invité du Mito Chamber Orchestra (Japon, dir. S. Ozawa).
                      </p>
                      <p>
                      Musicien supplémentaire de l’Orchestre National de France, de l’Orchestre de Paris, de l’Opéra de Paris…
                      </p>
                      <p>
                      Soliste de l’Orchestre de l’Opéra de Massy, Gilles est professeur aux conservatoires de Saint Maurice, Chilly Mazarin et Evry.
                      </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-2">
            <div id="thierry">
              <div class="col-xs-6">
                <img class="profil" src="wp-content/themes/skaya/images/thierry1.jpg"></img>
              </div>
              <div class="col-xs-6">
                <p><strong>Thierry Debeaupte</strong>, tuba :</p>
                <p>
                1er Prix de Paris, Caen et Rouen, tuba solo de l’orchestre de la Police Nationale, il participe aux concerts de l’Opéra de Paris, de l’Orchestre de Paris…
                </p>
                <p>
                Soliste de l’Orchestre de l’Opéra de Massy, Thierry est professeur au conservatoire à rayonnement départemental de Gennevilliers.
                </p>
              </div>
              </div>
            </div>
            <div class="col-xs-2">
            <div id="coralie">
              <div class="col-xs-6">
                <img class="profil" src="wp-content/themes/skaya/images/coralie1.jpg"></img>
              </div>
              <div class="col-xs-6">
              <p><strong>Coralie Parisis</strong>, trombone :<p>
                  <p>
                  1er Prix du CNSM de Paris, membre de l’Orchestre de la Police Nationale, Coralie participe régulièrement aux concerts
                  de l’Orchestre de Paris, de l’Opéra de Paris…
                </p>
                <p>
                  Soliste de l’Orchestre de l’Opéra de Massy, Coralie est professeur aux conservatoires de Palaiseau et d’Orsay.
                </p>
              </div>
            </div>
          </div>
    </div>
    
    <div class="row">  </div>
          
        <?php get_footer(); ?>	
  </body>
</html>


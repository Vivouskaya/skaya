      $(document).ready(function() {
        $('#ecoute').hide();
        $('#formule').hide();
        $('#presentation').hide();
        $( "#presentationToggle" ).click(function() {
            $( "#presentation" ).slideToggle( "slow", function() {
            // Animation complete.
            });
        });
        $('#formuleToggle').click(function() {
          $('#formule').slideToggle("slow", function() {

          });
        });
        $('#ecouteToggle').click(function() {
          $('#ecoute').slideToggle("slow", function() {

          });
        });

      });
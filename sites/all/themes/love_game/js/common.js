(function ($) {
  Drupal.behaviors.love_game = {
    attach: function(context) {
      /*Set attribute dropdown*/
      var drop = $(".drop");
      var dropactive = $(".dropactive");

      for (var i = 0; i < drop.length; i++) {
        $(drop[i]).attr("id", "dropdown" + i);
        $(dropactive[i]).attr("data-activates", "dropdown" + i);
      }

      /*set attribute FILTER*/
      var ff = $(".field-filter");
      var lff = $(".lable-field-filter");

      for (var i = 0; i < ff.length; i++) {
        $(ff[i]).attr("id", "test" + i);
        $(lff[i]).attr("for", "test" + i);
      }

      /*SlideshowNav*/
      $('.slider').slider({
        full_width: true,
        height: 800,
        indicators: false
      });

      /*Navbar*/
      $('.dropdown-button').dropdown({
        inDuration: 3,
        outDuration: 225,
        constrain_width: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 10, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'right' // Displays dropdown with edge aligned to the left of button
      });

      /*END navbar*/
      /*Visualization Category Content*/
      $('.form-item-field-category-tid ul.bef-tree, .twosec_mini_categories ul').collapsible({
        accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
        onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
      });

      /*--------------------------------*/
      $('.parallax').parallax();
      
      /*-----------------Information set---------------*/
      if (window.location.pathname == '/information') {
        $('.carousel').carousel();
      }

      if (window.location.pathname != '/') {
        // Initialize fancy select.
        $('select').material_select();
      }
      
      /*--------------------------------*/
      $('.materialboxed').materialbox();
    }
  }
}(jQuery));
<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
  <head>
    <?php print $head; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $head_title; ?></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="adminimal-menu">
    <!--main container-->
    <main>
      <!--item-->
      <div class="item">
        <!--menu-->
        <div class="menuItem">
          <div class="container">
            <nav>
              <div class="nav-wrapper"><a href="../index.html" class="brand-logo left">LOVE GAME</a>
                <ul class="right">
                  <li><a href="#" class="dropdown-button dropactive"> <i class="material-icons">reorder</i></a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="catalog.html">CATALOG</a></li>
                  <li><a href="index.html#threeSection">POPULAR</a></li>
                  <li><a href="info.html">INFORMATION</a></li>
                  <ul class="dropdown-content drop">
                    <li><a href="catalog.html">CATALOG</a></li>
                    <li><a href="index.html#threeSection">POPULAR</a></li>
                    <li><a href="info.html">INFORMATION</a></li>
                  </ul>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!--END menu-->
        <!--item section-->
        <?php print $page; ?>
      </div>
      <!--END item-->
      <!--footer-->
      <div id="footer">
        <div class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <ul>
                  <h4 class="white-text">CUSTOMER SERVICE</h4>
                  <li><a href="#!" class="grey-text text-lighten-3">CONTACT USE</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">RETURNS</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">SITE MAP</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <ul>
                  <h5 class="white-text">EXTRASS</h5>
                  <li><a href="#!" class="grey-text text-lighten-3">BRANDS</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">AFFILIATES</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">SPECIALS</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <ul style="margin:0;" class="left">
                  <h5 class="white-text">SOCIALS</h5>
                  <li><a href="#!" class="grey-text text-lighten-3">Facebook</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">Twitter</a></li>
                  <li><a href="#!" class="grey-text text-lighten-3">Instagramm </br></a></li>
                  <li><a href="#!" class="grey-text text-lighten-4 right">More Links</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">CONTACT US</h5>
                <p class="grey-text text-lighten-4">No 1104 Sky Tower, Newyork, USA</p>
                <p class="grey-text text-lighten-4">Phone: +01 888 (000) 1234</p>
                <p class="grey-text text-lighten-4">Email: suport@yahoo.com</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              <p class="center">|© Powered by Andrei Ghenov (DevBalu)</p>
            </div>
          </div>
        </div>
      </div>
      <!--END footer-->
    </main>
    <!--library-->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="libs/flickity/flickityJS/flickity.min.js"></script>
    <script src="js/common.js"></script>
    <!--END library-->
  </body>
</html>
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
      <!--catalog-->
      <div class="catalogOS">
        <!--menu-->
        <div class="menuCatalog">
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
        <!--filter-->
        <div class="container">
          <div class="row">
            <div class="filter col l3 m4 s12">
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <lable for="search" class="is"><i class="small material-icons">search</i></lable>
                    <input id="search" type="search" required><i class="material-icons">close</i>
                  </div>
                </form>
              </div>
              <ul data-collapsible="expandable" class="collapsible ">
                <li>
                  <div class="collapsible-header active"><i class="material-icons">mode_edit</i>
                    <p>PRICE</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l9 m7 s12">
                      <form action="#">
                        <p class="range-field">
                          <input type="range" id="price" min="0" max="1000">
                        </p>
                      </form>
                    </div>
                    <div class="col l3 m5 s12"><a class="waves-effect waves-light btn"><i class="material-icons">€</i></a></div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">polymer</i>
                    <p>FOR MEN</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Masturbators for men</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Fleshlight Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Sex Doll</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Cock Cages / Penis</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">FPenis Enlargement</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Erotic accessories</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">done</i>
                    <p>FOR WOMEN</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1 offset-m1 offset-s1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Masturbators for men</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Fleshlight Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Tenga Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Meiki Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Sex Doll</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Cock Cages / Penis</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">FPenis Enlargement</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Erotic accessories</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">label_outline</i>
                    <p>SPECIALS</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1 offset-m1 offset-s1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Masturbators for men</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Fleshlight Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">FPenis Enlargement</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Erotic accessories</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">invert_colors</i>
                    <p>FEUTERED</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1 offset-m1 offset-s1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Tenga Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Meiki Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Sex Doll</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Cock Cages / Penis</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">FPenis Enlargement</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Erotic accessories</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">play_for_work</i>
                    <p>SEX TOYS FOR COUPLES</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1 offset-m1 offset-s1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Tenga Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Meiki Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Sex Doll</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Cock Cages / Penis</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">FPenis Enlargement</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Erotic accessories</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header active"><i class="material-icons">skip_next</i>
                    <p>BRANDS</p>
                  </div>
                  <div class="collapsible-body">
                    <div class="col l10 m10 s9 offset-l1 offset-m1 offset-s1">
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Masturbators for men</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Fleshlight Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Tenga Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Meiki Masturbators</label>
                      <input type="checkbox" class="field-filter">
                      <label class="lable-field-filter">Sex Doll</label>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <?php print $page; ?>
          </div>
        </div>
        <!--END filter-->
      </div>
      <!--END catalog-->
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
  </body>
</html>
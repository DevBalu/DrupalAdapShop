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
      <!--ONE SECTION-->
      <div class="oneSection">
        <!--menu one section-->
        <div class="container">
          <!--menu-->
          <nav>
            <div class="nav-wrapper">
            <a href="/" class="brand-logo left">LOVE GAME</a>
              <?php print $love_game_menu_desktop; ?>
              <?php print $love_game_menu_mobile; ?>
            </div>
          </nav>
        </div>
        <?php 
          // slideshow one section.
          $view = views_get_view('frontpage_gallery');
          print $view->render('block');

          // brands slideshow one section.
          $view = views_get_view('frontpage_brands');
          print $view->render('block');
        ?>
      </div>
      <!--TWO SECTION-->
      <div class="twoSection">
        <!--two menu two section-->
        <div class="twoMenu">
          <div class="container">
            <nav>
              <div class="nav-wrapper"><a href="/" class="brand-logo left">LOVE GAME</a>
                <ul class="right">
                  <li><a href="#" class="dropdown-button dropactive"> <i class="material-icons">reorder</i></a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="/catalog">CATALOG</a></li>
                  <li><a href="index.html#threeSection">POPULAR</a></li>
                  <li><a href="info.html">INFORMATION</a></li>
                  <ul class="dropdown-content drop">
                    <li><a href="/catalog">CATALOG</a></li>
                    <li><a href="index.html#threeSection">POPULAR</a></li>
                    <li><a href="info.html">INFORMATION</a></li>
                  </ul>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <?php print $page; ?>
        <!--mini categories two section-->
        <div class="twosec_mini_categories">
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l3">
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <P class="center">MEN</P>
                      </div><img src="img/sort/minCat1.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">WOMEN</p>
                      </div><img src="img/sort/minCat2.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">COUPLES</p>
                      </div><img src="img/sort/minCat3.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">DILDE</p>
                      </div><img src="img/sort/minCat4.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
              </div>
              <div class="col s12 m6 l3">
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">BANDAGE</p>
                      </div><img src="img/sort/minCat5.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">LINGERIE</p>
                      </div><img src="img/sort/afda.png">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">CHRISTMAS</p>
                      </div><img src="img/sort/minCat16.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">SEXY PANTIES</p>
                      </div><img src="img/sort/minCat7.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
              </div>
              <div class="col s12 m6 l3">
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">FETISH WEAR</p>
                      </div><img src="img/sort/minCat8.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">BUT PLUGS</p>
                      </div><img src="img/sort/minCat9.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">ELECTRO</p>
                      </div><img src="img/sort/minCat10.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">MEDICAL</p>
                      </div><img src="img/sort/minCat11.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
              </div>
              <div class="col s12 m6 l3">
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">FETISH</p>
                      </div><img src="img/sort/minCat12.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">CLOTHING</p>
                      </div><img src="img/sort/minCat13.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">DEVICES</p>
                      </div><img src="img/sort/minCat14.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
                <ul data-collapsible="accordion" class="collapsible popout">
                  <li>
                    <div class="collapsible-header">
                      <div class="textatimg">
                        <p class="center">SEXY COSTUMES</p>
                      </div><img src="img/sort/minCat15.jpg">
                    </div>
                    <div class="collapsible-body"><a href="/catalog">
                        <p> Topco Lonely </p></a><a href="/catalog">
                        <p>CyberSkin  </p></a><a href="/catalog">
                        <p>American Beauty</p></a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--THREE SECTION-->
      <div id="threeSection">
        <!--three menu three section-->
        <div class="threeMenu">
          <div class="container">
            <nav>
              <div class="nav-wrapper"><a href="../index.html" class="brand-logo left">LOVE GAME</a>
                <ul class="right">
                  <li><a href="#" class="dropdown-button dropactive"> <i class="material-icons">reorder</i></a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="/catalog">CATALOG</a></li>
                  <li><a href="index.html#threeSection">POPULAR</a></li>
                  <li><a href="info.html">INFORMATION</a></li>
                  <ul class="dropdown-content drop">
                    <li><a href="/catalog">CATALOG</a></li>
                    <li><a href="index.html#threeSection">POPULAR</a></li>
                    <li><a href="info.html">INFORMATION</a></li>
                  </ul>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!--top product three section-->
        <div class="topProduct">
          <!--card top product-->
          <div class="container">
            <div class="row">
              <div class="col s12 m8 l8 offset-l4">
                <div class="card horizontal row">
                  <div class="card-image col s12 m6 l6"><img src="img/fbpage.jpg" class="materialboxed"></div>
                  <div class="card-stacked col s12 m6 l6">
                    <div class="card-content"><a href="item.html"> 
                        <h4>Title</h4></a>
                      <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                      <h5>Price: 1000 €</h5><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i>
                    </div>
                    <div class="card-action right"><a href="#">ADD TO CART</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--top product slideshow-->
          <div class="tpSlideshow">
            <h3 class="center">SIMILAR ITEMS</h3>
            <!--mini card-->
            <div data-flickity="{ &quot;groupCells&quot;: true, &quot;autoPlay&quot;: false}" class="carousel">
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="row">
                  <div>
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div class="wrapimg activator"><img src="img/fbpage2.jpg"></div>
                      </div>
                      <div class="card-content">
                        <div class="center">
                          <P class="center"><a href="#">ADD TO CART</a></P>
                        </div>
                      </div>
                      <div class="card-reveal">
                        <h3>Extravaganza Antonya Vidra Love Doll</h3><br>
                        <p>DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing.Here is some more information about this product that is only revealed once clicked on.Here is some more information about this product that is only revealed once clicked on.</p><br>
                        <br>
                        <h4>Price : 1000 €</h4>
                        <h4 class="left">RATING: </h4><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i><i class="material-icons small">star</i></br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="row">
                          <h5 class="col m6 s12 center"><a href="#">WATCH MORE</a></h5><span class="card-title grey-text text-darken-4 col m6 s12 center"><i style="color:#000; font-size:30px;" class="material-icons ">close</i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        
      </div>
    </main>
  </body>
</html>
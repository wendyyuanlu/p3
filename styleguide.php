<?php include('header.php'); ?>

        <h1 class="full">Let's get styling</h1>

        <section id="styleguide">

          <section>
            <h2>H1 Heading</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;h1&gt;Conversations for SAP Jam&lt;/h1&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <h1>Conversations for SAP Jam</h1>

            <hr>
          </section>

          <section>
            <h2>H2 Heading</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;h2&gt;Conversations for SAP Jam&lt;/h2&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <h2>Conversations for SAP Jam</h2>

            <hr>
          </section>

          <section>
            <h2>H3 Heading</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;h3&gt;&lt;span class="subtext"&gt;UX/UI Design &amp; Art Direction&lt;/span&gt;&lt;/h3&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <h3><span class="subtext">UX/UI Design & Art Direction</span></h3>

            <hr>
          </section>

          <section>
            <h2>Paragraph</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;p class="narrow"&gt;Duis venenatis, tortor sit amet congue aliquet, enim nisl vehicula orci, vel auctor lacus tortor lacinia tellus. Nam dictum dolor in semper vulputate. In porttitor tincidunt mauris. Ut pretium viverra ultrices. Praesent scelerisque dictum lectus ac consequat. Ut dolor arcu, vehicula nec est vel, tempor sagittis nunc. &lt;/p&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <p class="narrow">Duis venenatis, tortor sit amet congue aliquet, enim nisl vehicula orci, vel auctor lacus tortor lacinia tellus. Nam dictum dolor in semper vulputate. In porttitor tincidunt mauris. Ut pretium viverra ultrices. Praesent scelerisque dictum lectus ac consequat. Ut dolor arcu, vehicula nec est vel, tempor sagittis nunc. </p>

            <hr>
          </section>

          <section>
            <h2>Lists</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;ul&gt;
              &lt;li&gt;Duis venenatis, tortor sit amet congue aliquet&lt;/li&gt;
              &lt;li&gt;Genim nisl vehicula orci, vel auctor lacus tortor&lt;/li&gt;
              &lt;li&gt;Go lacinia tellus am dictum dolor in semper vulput&lt;/li&gt;
              &lt;li&gt;In porttitor tincidunt mauris. Ut pretium viverra&lt;/li&gt;
              &lt;li&gt;Praesent scelerisque dictum lectus ac consequatt dolor&lt;/li&gt;
            &lt;/ul&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <ul>
              <li>Duis venenatis, tortor sit amet congue aliquet</li>
              <li>Genim nisl vehicula orci, vel auctor lacus tortor</li>
              <li>Go lacinia tellus am dictum dolor in semper vulput</li>
              <li>In porttitor tincidunt mauris. Ut pretium viverra</li>
              <li>Praesent scelerisque dictum lectus ac consequatt dolor</li>
            </ul>

            <hr>
          </section>

          <section>
            <h2>In-text Link</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;a href="#"&gt;Send an e-mail&lt;/a&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <a href="#">Send an e-mail</a>

            <hr>
          </section>

          <section>
            <h2>Menu Link</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;nav&gt;
              &lt;a href="#"&gt;About&lt;/a&gt;
            &lt;/nav&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <nav>
              <a href="#">About</a>
            </nav>

            <hr>
          </section>

          <section>
            <h2>Main Navigation</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;header&gt;
             &lt;nav&gt;
             &lt;div id="desktop1" class="desktop"&gt;
             &lt;ul&gt;
             &lt;li&gt;&lt;a href="index.php"&gt;Work&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="about.php"&gt;Resume&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
             &lt;/div&gt;
             &lt;div class="logo"&gt;
             &lt;a href="index.php"&gt;&lt;img src="img/logo.png" alt="Wendy Lu"&gt;&lt;/a&gt;
             &lt;/div&gt;
             &lt;div id="desktop2" class="desktop"&gt;
             &lt;ul&gt;
             &lt;li&gt;&lt;a href="index.php"&gt;About&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="contact.php"&gt;Contact&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
             &lt;/div&gt;
             &lt;div id="mobile" class="mobile"&gt;
             &lt;div id="menu-items"&gt;
             &lt;hr&gt;
             &lt;ul&gt;
             &lt;li&gt;&lt;a href="index.php"&gt;Work&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="about.php"&gt;Resume&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="about.php"&gt;About&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="contact.php"&gt;Contact&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
             &lt;hr&gt;
             &lt;/div&gt; &lt;!--end menu-items--&gt;
             &lt;ul&gt;
             &lt;li&gt;&lt;a id="menu-button" class="hidden" aria-hidden="true" aria-controls="menu-items"&gt;Menu&lt;/a&gt;&lt;/li&gt;
             &lt;/ul&gt;
             &lt;img src="img/spacer.png" alt="spacer"&gt;
             &lt;/div&gt;
             &lt;/nav&gt;
             &lt;/header&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <header>
              <nav>
                <div id="desktop1" class="desktop">
                  <ul>
                    <li><a href="index.php">Work</a></li>
                    <li><a href="about.php">Resume</a></li>
                  </ul>
                </div>
                <div class="logo">
                  <a href="index.php"><img src="img/logo.png" alt="Wendy Lu"></a>
                </div>
                <div id="desktop2" class="desktop">
                  <ul>
                    <li><a href="index.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </div>
                <div id="mobile" class="mobile">
                  <div id="menu-items">
                    <hr>
                    <ul>
                      <li><a href="index.php">Work</a></li>
                      <li><a href="about.php">Resume</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <hr>
                  </div> <!--end menu-items-->
                  <ul>
                    <li><a href="#" id="menu-button" class="hidden" aria-hidden="true" aria-controls="menu-items">Menu</a></li>
                  </ul>
                  <img src="img/spacer.png" alt="spacer">
                </div>
              </nav>
            </header>

            <hr>
          </section>

          <section>
            <h2>Two Column Grid</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;div class="grid grid-center"&gt;
             &lt;div class="col-2"&gt;
             &lt;p&gt;
             Duis laoreet, diam eget egestas tincidunt, arcu dui lacinia mi, sit amet semper justo ex non ex. Sed ullamcorper quis dui fermentum semper. Aliquam vitae lacus molestie, auctor ex at, blandit ipsum. Nam pretium magna laoreet ultricies iaculis. Fusce vitae lobortis risus, vel ultricies elit. Vivamus sollicitudin congue ipsum ut fermentum.
             &lt;/p&gt;
             &lt;/div&gt;
             &lt;div class="col-2"&gt;
             &lt;figure&gt;
             &lt;img src="img/thumb/makerlabs.jpg" alt=""&gt;
             &lt;/figure&gt;
             &lt;/div&gt;
             &lt;/div&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <div class="grid grid-center">
              <div class="col-2">
                <p>
                  Duis laoreet, diam eget egestas tincidunt, arcu dui lacinia mi, sit amet semper justo ex non ex. Sed ullamcorper quis dui fermentum semper. Aliquam vitae lacus molestie, auctor ex at, blandit ipsum. Nam pretium magna laoreet ultricies iaculis. Fusce vitae lobortis risus, vel ultricies elit. Vivamus sollicitudin congue ipsum ut fermentum.
                </p>
              </div>
              <div class="col-2">
                <figure>
                  <img src="img/thumb/makerlabs.jpg" alt="">
                </figure>
              </div>
            </div>

            <hr>
          </section>

          <section>
            <h2>Three Column Grid</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;div class="grid"&gt;
             &lt;div class="col-3"&gt;
             &lt;p&gt;Donec tristique ex eu tincidunt maximus. Donec vel gravida rdum non ac nibh.&lt;/p&gt;
             &lt;/div&gt;
             &lt;div class="col-3"&gt;
             &lt;p&gt;Phasellus placerat lobortis ligula ut blandit. Nullam urna tellus, semper at vestibulum eget.&lt;/p&gt;
             &lt;/div&gt;
             &lt;div class="col-3"&gt;
             &lt;p&gt;Nulla non lobortis dui. Donec eu nisl non leo tristique interdum non ac eros.&lt;/p&gt;
             &lt;/div&gt;
             &lt;/div&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <div class="grid">
              <div class="col-3">
                <p>Donec tristique ex eu tincidunt maximus. Donec vel gravida rdum non ac nibh.</p>
              </div>
              <div class="col-3">
                <p>Phasellus placerat lobortis ligula ut blandit. Nullam urna tellus, semper at vestibulum eget.</p>
              </div>
              <div class="col-3">
                <p>Nulla non lobortis dui. Donec eu nisl non leo tristique interdum non ac eros.</p>
              </div>
            </div>

            <hr>
          </section>

          <section>
            <h2>Image with Image Caption</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;div class="grid"&gt;
             &lt;div class="col-2"&gt;
             &lt;figure&gt;
             &lt;img src="img/thumb/seeingai.jpg" alt="Seeing AI"&gt;
             &lt;figcaption&gt;
             Suspendisse vel nunc bibendum diam rutrum elementum. Vivamus scelerisque tellus ex, sed fringilla nunc sodales eu. Nulla accumsan, erat sed euismod consequat, massa diam aliquet urna, nec molestie cursus sapien vel augue interdum hendrerit.
             &lt;/figcaption&gt;
             &lt;/figure&gt;
             &lt;/div&gt;

             &lt;div class="col-2"&gt;
             &lt;figure&gt;
             &lt;img src="img/thumb/travelocity.jpg" alt="Travelocity"&gt;
             &lt;figcaption&gt;
             Maecenas pellentesque efficitur sem et elementum. Nunc pellentesque malesuada sem in pretium. Maecenas cursus sapien vel augue interdum hendrerit. Donec suscipit, dolor at porttitor cursus, mi augue maximus nulla, nec lacinia lorem risus id lectus.
             &lt;/figcaption&gt;
             &lt;/figure&gt;
             &lt;/div&gt;
             &lt;/div&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <div class="grid">
              <div class="col-2">
                <figure>
                  <img src="img/thumb/seeingai.jpg" alt="Seeing AI">
                  <figcaption>
                    Suspendisse vel nunc bibendum diam rutrum elementum. Vivamus scelerisque tellus ex, sed fringilla nunc sodales eu. Nulla accumsan, erat sed euismod consequat, massa diam aliquet urna, nec molestie cursus sapien vel augue interdum hendrerit.
                  </figcaption>
                </figure>
              </div>

              <div class="col-2">
                <figure>
                  <img src="img/thumb/travelocity.jpg" alt="Travelocity">
                  <figcaption>
                    Maecenas pellentesque efficitur sem et elementum. Nunc pellentesque malesuada sem in pretium. Maecenas cursus sapien vel augue interdum hendrerit. Donec suscipit, dolor at porttitor cursus, mi augue maximus nulla, nec lacinia lorem risus id lectus.
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->

            <hr>
          </section>

          <section>
            <h2>More Project Tiles</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>

            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <section id="more-project">
              <section class="grid">
                <div class="prev-project col-2">
                  <a href="#">
                    <h3><span class="subtext">UX/UI Design</span></h3>
                    <h2>Seeing AI</h2>
                    <p class="arrow">&larr;</p>
                  </a>
                </div>

                <div class="next-project col-2">
                  <a href="#">
                    <h3><span class="subtext">UX/UI & Art Direction</span></h3>
                    <h2>Conversations for SAP Jam</h2>
                    <p class="arrow">&rarr;</p>
                  </a>
                </div>
              </section>
            </section>

            <hr>
          </section>

          <section>
            <h2>Project Preview Tiles</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>&lt;section class="work-container grid"&gt;
             &lt;div class="work-item col-2"&gt;
             &lt;figure&gt;
             &lt;a href="project1.html"&gt;&lt;img src="img/thumb/conversations.jpg" alt="Conversations for SAP Jam"&gt;&lt;/a&gt;
             &lt;/figure&gt;

             &lt;a href="#"&gt;
             &lt;div class="work-overview"&gt;
             &lt;h3&gt;&lt;span class="subtext"&gt;UX/UI &amp; Art Direction&lt;/span&gt;&lt;/h3&gt;
             &lt;h2&gt;Conversations for SAP Jam&lt;/h2&gt;
             &lt;p class="description"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum, diam ac ultrices viverra, massa libero ullamcorper ex.&lt;/p&gt;
             &lt;p class="arrow"&gt;&amp;rarr;&lt;/p&gt;
             &lt;/div&gt;
             &lt;/a&gt;
             &lt;/div&gt;


             &lt;div class="work-item col-2"&gt;
             &lt;figure&gt;
             &lt;a href="#"&gt;&lt;img src="img/thumb/makerlabs.jpg" alt="MakerLabs"&gt;&lt;/a&gt;
             &lt;/figure&gt;

             &lt;a href="#"&gt;
             &lt;div class="work-overview"&gt;
             &lt;h3&gt;&lt;span class="subtext"&gt;Research &amp; UX Design&lt;/span&gt;&lt;/h3&gt;
             &lt;h2&gt;MakerLabs&lt;/h2&gt;
             &lt;p class="description"&gt;Guismod nec nunc vel, ultrices cursus sapien. Vivamus molestie gravida lacus, id ullamcorper lorem volutpat eu.&lt;/p&gt;
             &lt;p class="arrow"&gt;&amp;rarr;&lt;/p&gt;
             &lt;/div&gt;
             &lt;/a&gt;
             &lt;/div&gt;
             &lt;/section&gt;
            </code>

            <h3><span class="subtext">Rendered Element</span></h3>
            <section class="work-container grid">
              <div class="work-item col-2">
                <figure>
                  <a href="project1.html"><img src="img/thumb/conversations.jpg" alt="Conversations for SAP Jam"></a>
                </figure>

                <a href="#">
                  <div class="work-overview">
                    <h3><span class="subtext">UX/UI & Art Direction</span></h3>
                    <h2>Conversations for SAP Jam</h2>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum, diam ac ultrices viverra, massa libero ullamcorper ex.</p>
                    <p class="arrow">&rarr;</p>
                  </div>
                </a>
              </div> <!--end work-item-->


              <div class="work-item col-2">
                <figure>
                  <a href="#"><img src="img/thumb/makerlabs.jpg" alt="MakerLabs"></a>
                </figure>

                <a href="#">
                  <div class="work-overview">
                    <h3><span class="subtext">Research & UX Design</span></h3>
                    <h2>MakerLabs</h2>
                    <p class="description">Guismod nec nunc vel, ultrices cursus sapien. Vivamus molestie gravida lacus, id ullamcorper lorem volutpat eu.</p>
                    <p class="arrow">&rarr;</p>
                  </div>
                </a>
              </div> <!--end work-item-->
            </section>

            <hr>
          </section>

          <section>
            <h2>In-text Link</h2>
            <h3><span class="subtext">Sample Code</span></h3>
            <code>

            </code>

            <h3><span class="subtext">Rendered Element</span></h3>


            <hr>
          </section>


        </section><!-- end styleguide-->

<?php include('footer.php'); ?>

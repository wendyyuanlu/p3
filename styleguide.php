<?php include('header.php'); ?>

        <section class="panel">

          <h1 class="full">Let's get <span class="highlight">styling</span>.</h1>

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
                    &lt;div id=&quot;desktop1&quot; class=&quot;desktop&quot;&gt;
                      &lt;ul&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Work&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;logo&quot;&gt;
                      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;img/logo.png&quot; alt=&quot;Wendy Lu&quot;&gt;&lt;/a&gt;
                    &lt;/div&gt;

                    &lt;div id=&quot;desktop2&quot; class=&quot;desktop&quot;&gt;
                      &lt;ul&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;

                    &lt;div id=&quot;mobile&quot; class=&quot;mobile&quot;&gt;
                      &lt;ul&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Work&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;

                  &lt;/nav&gt;
                &lt;/header&gt;
              </code>

              <h3><span class="subtext">Rendered Element</span></h3>
              <header>
                <nav>
                  <div id="desktop1-style" class="desktop">
                    <ul>
                      <li><a href="#">Work</a></li>
                    </ul>
                  </div>

                  <div class="logo">
                    <a href="#"><img src="img/logo.png" alt="Wendy Lu"></a>
                  </div>

                  <div id="desktop2-style" class="desktop">
                    <ul>
                      <li><a href="#">About</a></li>
                    </ul>
                  </div>

                  <div id="mobile-style" class="mobile">
                    <ul>
                      <li><a href="#">Work</a></li>
                      <li><a href="#">About</a></li>
                    </ul>
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
              <code>&lt;section id=&quot;more-project&quot;&gt;
                  &lt;section class=&quot;grid&quot;&gt;
                    &lt;div class=&quot;prev-project col-2&quot;&gt;
                      &lt;a href=&quot;#&quot;&gt;
                        &lt;h3&gt;&lt;span class=&quot;subtext&quot;&gt;UX/UI Design&lt;/span&gt;&lt;/h3&gt;
                        &lt;h2&gt;Seeing AI&lt;/h2&gt;
                        &lt;p class=&quot;arrow&quot;&gt;&lt;img src=&quot;img/arrow-prev.svg&quot; onerror=&quot;this.src='img/arrow-prev.png'&quot; width=&quot;30&quot; height=&quot;13&quot;&gt;&lt;/p&gt;
                      &lt;/a&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;next-project col-2&quot;&gt;
                      &lt;a href=&quot;#&quot;&gt;
                        &lt;h3&gt;&lt;span class=&quot;subtext&quot;&gt;UX/UI & Art Direction&lt;/span&gt;&lt;/h3&gt;
                        &lt;h2&gt;Conversations for SAP Jam&lt;/h2&gt;
                        &lt;p class=&quot;arrow&quot;&gt;&lt;img src=&quot;img/arrow-next.svg&quot; onerror=&quot;this.src='img/arrow-next.png'&quot; width=&quot;30&quot; height=&quot;13&quot;&gt;&lt;/p&gt;
                      &lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/section&gt;
                &lt;/section&gt;
              </code>

              <h3><span class="subtext">Rendered Element</span></h3>
              <section id="more-project">
                <section class="grid">
                  <div class="prev-project col-2">
                    <a href="#">
                      <h3><span class="subtext">UX/UI Design</span></h3>
                      <h2>Seeing AI</h2>
                      <p class="arrow"><img src="img/arrow-prev.svg" onerror="this.src='img/arrow-prev.png'" width="30" height="13" alt="previous"></p>
                    </a>
                  </div>

                  <div class="next-project col-2">
                    <a href="#">
                      <h3><span class="subtext">UX/UI & Art Direction</span></h3>
                      <h2>Conversations for SAP Jam</h2>
                      <p class="arrow"><img src="img/arrow-next.svg" onerror="this.src='img/arrow-next.png'" width="30" height="13" alt="next"></p>
                    </a>
                  </div>
                </section>
              </section>

              <hr>
            </section>

            <section>
              <h2>Project Preview Tiles</h2>
              <h3><span class="subtext">Sample Code</span></h3>
              <code>&lt;section class=&quot;work-container grid&quot;&gt;
                  &lt;div class=&quot;work-item col-2&quot;&gt;
                    &lt;figure&gt;
                      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;img/thumb/conversations.jpg&quot; alt=&quot;Conversations&quot;&gt;&lt;/a&gt;
                    &lt;/figure&gt;

                    &lt;a href=&quot;#&quot;&gt;
                      &lt;div class=&quot;work-overview&quot;&gt;
                        &lt;h3&gt;&lt;span class=&quot;subtext&quot;&gt;UX/UI & Art Direction&lt;/span&gt;&lt;/h3&gt;
                        &lt;h2&gt;Conversations&lt;/h2&gt;
                        &lt;p class=&quot;description&quot;&gt;A bot-friendly messaging feature that expedites existing workflows by improving the communication between members of an organization.&lt;/p&gt;
                        &lt;p class=&quot;arrow&quot;&gt;&lt;img src=&quot;img/arrow-next.svg&quot; onerror=&quot;this.src='img/arrow-next.png'&quot; width=&quot;30&quot; height=&quot;13&quot;&gt;&lt;/p&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;

                  &lt;div class=&quot;work-item col-2&quot;&gt;
                    &lt;figure&gt;
                      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;img/thumb/makerlabs.jpg&quot; alt=&quot;MakerLabs&quot;&gt;&lt;/a&gt;
                    &lt;/figure&gt;

                    &lt;a href=&quot;#&quot;&gt;
                      &lt;div class=&quot;work-overview&quot;&gt;
                        &lt;h3&gt;&lt;span class=&quot;subtext&quot;&gt;Research & UX Design&lt;/span&gt;&lt;/h3&gt;
                        &lt;h2&gt;MakerLabs&lt;/h2&gt;
                        &lt;p class=&quot;description&quot;&gt;
                          A website redesign that highlights the core services offered by a makerspace company and improves the handling of customer inquiries.
                        &lt;/p&gt;
                        &lt;p class=&quot;arrow&quot;&gt;&lt;img src=&quot;img/arrow-next.svg&quot; onerror=&quot;this.src='img/arrow-next.png'&quot; width=&quot;30&quot; height=&quot;13&quot;&gt;&lt;/p&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/section&gt;
              </code>

              <h3><span class="subtext">Rendered Element</span></h3>
              <section class="work-container grid">
                <div class="work-item col-2">
                  <figure>
                    <a href="#"><img src="img/thumb/conversations.jpg" alt="Conversations"></a>
                  </figure>

                  <a href="#">
                    <div class="work-overview">
                      <h3><span class="subtext">UX/UI & Art Direction</span></h3>
                      <h2>Conversations</h2>
                      <p class="description">A bot-friendly messaging feature that expedites existing workflows by improving the communication between members of an organization.</p>
                      <p class="arrow"><img src="img/arrow-next.svg" onerror="this.src='img/arrow-next.png'" width="30" height="13" alt="next"></p>
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
                      <p class="description">
                        A website redesign that highlights the core services offered by a makerspace company and improves the handling of customer inquiries.
                      </p>
                      <p class="arrow"><img src="img/arrow-next.svg" onerror="this.src='img/arrow-next.png'" width="30" height="13" alt="next"></p>
                    </div>
                  </a>
                </div> <!--end work-item-->
              </section>

            </section>

          </section><!-- end styleguide-->
        </section>

<?php include('footer.php'); ?>

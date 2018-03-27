<?php include('header.php'); ?>
        <section id="project-detail">

          <section id="overview" class="panel intro">
            <div class="grid">
              <div class="col-2">
                <h1>Conversations for SAP Jam</h1>
                <h3><span class="subtext">UX/UI Design & Art Direction</span></h3>
                <p>Conversations is a revamp of the "Private Messages" feature on SAP Jam Collaboration (an enterprise collaboration platform) that allows members of an organization to have direct, real-time messaging with colleagues and bots via a lightweight user interface. It is web-reponsive and supports both desktop and mobile devices.</p>
                <p>Throughout this project, I worked closely with another UX designer, the Development team and the lead Product Manager.</p>
              </div>
              <div class="col-2">
                <img src="img/overview/conversations.png" alt="Conversations for SAP Jam">
              </div>
            </div>
          </section> <!--end panel-->

          <section class="panel details">
            <div class="grid">
              <div class="col-3">
                <h3><span class="subtext">My Roles</span></h3>
                <p>UX/UI Design, Art Direction, Usability Testing</p>
              </div>
              <div class="col-3">
                <h3><span class="subtext">Tools Used</span></h3>
                <p>Sketch</p>
              </div>
              <div class="col-3">
                <h3><span class="subtext">Collaborators</span></h3>
                <p>David Choy, Rob Horne, Tim Cheung, Evangeline Tay</p>
              </div>
            </div>
          </section> <!--end panel-->

          <section id="problem" class="panel">
            <h2>The Problem</h2>
            <h3><span class="subtext">Revamping an Outdated Feature</span></h3>
            <div class="grid">
              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations//pm-home.jpg" onclick="target='_blank'"><img src="img/projects/conversations/pm-home.jpg" alt="Screenshot of the homepage for private messages"></a>
                  <figcaption>
                    Homepage
                  </figcaption>
                </figure>
              </div>

              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations/pm-thread.jpg" onclick="target='_blank'"><img src="img/projects/conversations/pm-thread.jpg" alt="Screenshot of a conversation thread"></a>
                  <figcaption>
                    A message thread
                  </figcaption>
                </figure>
              </div>

              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations/pm-new.jpg" onclick="target='_blank'"><img src="img/projects/conversations/pm-new.jpg" alt="Screenshot of a conversation thread"></a>
                  <figcaption>
                    Composing a new message
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->
            <div class="narrow">
              <p>
                Private Messages was modeled after e-mail and many of its features were outdated, causing several pain points in starting, continuing, and switching between message threads:
              </p>
              <ul>
                <li>Only the first (initial) message of each conversation is shown so users must click into them just to see the most recent message.</li>
                <li>Users must navigate away from their current conversation to see the updates in other conversations.</li>
                <li>The reply box is pushed down each time the user sends a message.</li>
                <li>Not real-time, so users must refresh their page every time someone responds.</li>
                <li>Unfriendly and unintuitive user interface that also has an irrelevant side navigation.</li>
              </ul>

            </div> <!--end narrow-->
          </section> <!--end panel-->

          <section id="process" class="panel">
            <h2>Process</h2>
            <h3><span class="subtext">Initial Sketches</span></h3>
            <div class="narrow">
              <p>
                The project brief initially included the ability for users to have <a href="#future">multiple live conversations</a> without interrupting their workflow. However, it was eventually de-scoped so that it only focused on revamping the features that already existed in the current product. As a result, the project was limited to the existing Private Messages page only.
              </p>

              <p>
                While another UX designer worked on the workflow for creating new conversations, <strong>I focused on the visual design and art direction of the new UI</strong>. I purposely split the interface into two components to push myself to think in a mobile-first approach. This also allowed me to keep in mind how the chat popovers (for a future scope) could look.
              </p>
            </div> <!--end narrow-->

            <figure>
                <a href="img/projects/conversations/sketch-right.jpg" onclick="target='_blank'"><img src="img/projects/conversations/sketch-right.jpg" alt="Sketches of the conversations area in the UI"></a>
              <figcaption>
                Right side of the UI: Conversation area
              </figcaption>
            </figure>

            <figure>
              <a href="img/projects/conversations/sketch-left.jpg" onclick="target='_blank'"><img src="img/projects/conversations/sketch-left.jpg" alt="Sketches of the list of conversations in the UI"></a>
              <figcaption>
                Left side of the UI: List of conversations
              </figcaption>
            </figure>

            <div class="spacer-1"></div>

            <h3><span class="subtext">Interface Design Exploration</span></h3>
            <div class="narrow">
              <p>
                Since several elements of Conversations do not exist in SAP Jam Collaboration, I was responsible for the art direction to define the styling of these new elements while maintaining consistency with the current branding. Some of the key elements I considered included speech bubbles, unread message indicators, time stamps, profile photos, and the reply box. Below are a few of the different visual treatments I explored with.
              </p>
            </div>

            <div class="grid">
              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations/mocks-list.png" onclick="target='_blank'"><img src="img/projects/conversations/mocks-list.png" alt="High fidelity mockups of conversations list"></a>
                  <figcaption>
                    Conversation list - profile photos, time stamps, unread messages
                  </figcaption>
                </figure>
              </div>

              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations/mocks-bubbles.png" onclick="target='_blank'"><img src="img/projects/conversations/mocks-bubbles.png" alt="High fidelity mockups of message bubbles"></a>
                  <figcaption>
                    Message bubbles
                  </figcaption>
                </figure>
              </div>

              <div class="col-3">
                <figure>
                  <a href="img/projects/conversations/mocks-newreply.png" onclick="target='_blank'"><img src="img/projects/conversations/mocks-newreply.png" alt="High fidelity mockups of new messages and reply box"></a>
                  <figcaption>
                    New message indicator and reply box
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->

            <div class="spacer-1"></div>

            <h3><span class="subtext">Guerilla Testing</span></h3>
            <div class="narrow">
              <p>
                To keep the feature as responsive on mobile web as possible, the workflow for creating a new conversation was designed to take place within the conversation list. Using two simple prototypes, another designer and I tested two different workflows for creating a group conversation.
              </p>
            </div>

            <div class="grid">
              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/test-a.png" onclick="target='_blank'"><img src="img/projects/conversations/test-a.png" alt="Workflow A"></a>
                  <figcaption>
                    Workflow A: Starts with one point of entry. Users can then choose if they want to create a group conversation.
                  </figcaption>
                </figure>
              </div>

              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/test-b.png" onclick="target='_blank'"><img src="img/projects/conversations/test-b.png" alt="Workflow B"></a>
                  <figcaption>
                    Workflow B: Creating a group and 1:1 conversation is split into their own separate points of entry. This gives users the option to start a group conversation right away.
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->

            <div class="narrow">
              <p>
                Six of our eight participants preferred Workflow B, so this is the workflow we decided to go with.
              </p>
            </div>
          </section> <!--end panel-->

          <section id="final" class="panel">
            <h2>Final Design</h2>
            <div class="narrow">
              <p>
                After performing an audit of the existing UI patterns on SAP Jam, I selected the design below as it is the most consistent with the product.
              </p>
            </div>

            <figure>
              <a href="img/projects/conversations/final-desk.png" onclick="target='_blank'"><img src="img/projects/conversations/final-desk.png" alt="Final design for Conversations"></a>
              <figcaption>
                The revamped Conversations page.
              </figcaption>
            </figure>

            <div class="grid">
              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/final-desk-bot.png" onclick="target='_blank'"><img src="img/projects/conversations/final-desk-bot.png" alt="Sketches for creating new conversations"></a>
                  <figcaption>
                    Conversation with a bot
                  </figcaption>
                </figure>
              </div>

              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/final-desk-group.png" onclick="target='_blank'"><img src="img/projects/conversations/final-desk-group.png" alt="Sketches for chat popovers"></a>
                  <figcaption>
                    Creating a group conversation
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->

            <div class="spacer-1"></div>

            <h3><span class="subtext">Mobile Web</span></h3>

            <figure>
              <a href="img/projects/conversations/final-mobile-all.png" onclick="target='_blank'"><img src="img/projects/conversations/final-mobile-all.png" alt="Final design for Conversations on mobile web"></a>
              <figcaption>
                From left to right: 1) Conversations homepage. &nbsp; 2) Adding contacts to a conversation. &nbsp; 3) Conversation with new messages. &nbsp; 4) Alerts for wifi disconnection.
              </figcaption>
            </figure>

            <div class="spacer-1"></div>

            <h3><span class="subtext">Implementation</span></h3>
            <div class="narrow">
              <p>
                This design was reviewed and approved by both the lead Product Manager and the Director of UX. Working closely with the Development team, I created documentations for both the workflow and UI specifications to guide them as they implemented the feature. Two lead Developers and I then demoed the revamped Conversations feature to several company stakeholders, including Product Managers, Sales, and Customer Support.
              </p>
            </div> <!--end narrow-->

          </section> <!--end panel-->

          <section id="future" class="panel">
            <h2>Future Scope</h2>
            <h3><span class="subtext">Sketches</span></h3>
            <div class="narrow">
              <p>
                With the core workflows complete and approved, I continued my initial exploration of allowing users to engage in multiple conversations without interrupting their workflow. I experimented with how chat popovers would appear on the screen, different points of entry, and the workflow of starting a conversation.
              </p>
            </div> <!--end narrow-->


            <div class="grid">
              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/sketch-future-new.jpg" onclick="target='_blank'"><img src="img/projects/conversations/sketch-future-new.jpg" alt="Sketches for creating new conversations"></a>
                  <figcaption>
                    Two workflows for starting a new conversation in the Conversations list popover
                  </figcaption>
                </figure>
              </div>

              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/sketch-future-chat.jpg" onclick="target='_blank'"><img src="img/projects/conversations/sketch-future-chat.jpg" alt="Sketches for chat popovers"></a>
                  <figcaption>
                    Different chat popover treatments
                  </figcaption>
                </figure>
              </div>
            </div> <!--end grid-->


            <h3><span class="subtext">High fidelity mock ups</span></h3>
            <div class="grid">
              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/future-chat.png" onclick="target='_blank'"><img src="img/projects/conversations/future-chat.png" alt="Mock up for chat popovers"></a>
                  <figcaption>
                    Chat popovers
                  </figcaption>
                </figure>
              </div>

              <div class="col-2">
                <figure>
                  <a href="img/projects/conversations/future-list.png" onclick="target='_blank'"><img src="img/projects/conversations/future-list.png" alt="Mock up for the conversation list"></a>
                  <figcaption>
                    Conversation list popover
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="spacer-1"></div>

            <h3><span class="subtext">Reception</span></h3>
            <div class="narrow">
              <p>
                These designs were also positively received by the Development, UX, and Product Management team. They have been documented so that the Development team can continue to implement them after my internship ended.
              </p>
            </div> <!--end narrow-->
          </section> <!--end panel-->

          <section id="more-project" class="panel">
            <section class="grid column-center">
              <div class="prev-project col-2">
                <a href="makerlabs.php">
                  <h3><span class="subtext">Research & UX Design</span></h3>
                  <h2>MakerLabs</h2>
                  <p class="arrow"><img src="img/arrow-prev.svg" onerror="this.src='img/arrow-prev.png'" width="30" height="13"></p>
                </a>
              </div>
            </section>
          </section>

        </section> <!--end id="project-detail"-->


        <section id="project-nav" class="hidden">
          <ul>
            <li><a href="#overview">Overview</a></li>
            <li><a href="#problem">The Problem</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#final">Final Design</a></li>
            <li><a href="#future">Future Scope</a></li>
          </ul>
        </section>

<?php include('footer.php'); ?>

  </div>
  </main>
  <footer id="footer">
      <div id="contact-footer">
          <div class="row">
              <div class="col contact__info">
                  <div class="contact___header">
                      <p>Porozmawiajmy o Twoich celach biznesowych.</p>
                  </div>
                  <div class="contact___detail">
                      <div class="wraper">
                          <div class="wraper_content">
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ab similique dolore
                                  eius.
                                  Doloremque tempore officia exercitationem est. Laborum quis ratione cupiditate placeat
                                  qui
                                  natus non ipsam soluta eveniet itaque?</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col contact__form">
                  <div class="wraper">
                      <?php echo do_shortcode('[contact-form-7 id="28" title="Formularz 1"]');  ?>
                  </div>
              </div>
          </div>
      </div>
      <?php get_template_part('template-parts/footer/site-google-map'); ?>
  </footer>
  <svg id="go-to-top" class="js" xmlns="http://www.w3.org/2000/svg" width="25.243" height="24" viewBox="0 0 25.243 24">
      <g id="Icon_feather-arrow-up" data-name="Icon feather-arrow-up" transform="translate(-5.379 -6)">
          <path id="Path_522" data-name="Path 522" d="M18,28.5V7.5" fill="none" stroke="#fff" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="3" />
          <path id="Path_523" data-name="Path 523" d="M7.5,18,18,7.5,28.5,18" fill="none" stroke="#fff"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
      </g>
  </svg>

  <?php wp_footer(); ?>
  </body>

  </html>
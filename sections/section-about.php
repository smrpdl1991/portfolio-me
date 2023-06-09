<?php if(true == get_theme_mod( 'about_switch_setting', 'on')) { ?>
<section class="section-featured section-about">
            <div class="container">
                <div class="section-wrap">
                    <div class="section-left">
                        <div class="section-left-wrap">
                            <?php 
                                $about_title_settings = get_theme_mod( 'about-title', array() );
                                if($about_title_settings) {
                            ?>
                                <h2 class="section-title owl-carousel owl-theme">
                                    <?php foreach ( $about_title_settings as $setting ) : ?>
                                        <span>
                                            <?php echo $setting['text_field']; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </h2>
                            <?php } ?>
                            <?php if(get_theme_mod( 'about_descrition' )) { ?>
                                <div class="desc">
                                    <p><?php echo esc_html( get_theme_mod( 'about_descrition' ) )?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="section-right">
                       
                            <div class="specialized-in">
                                <?php echo esc_html(get_theme_mod( 'specialized-setting' )) ?>
                            </div>
                       
                        
                            <div class="view-my-work">
                                <a href="<?php echo esc_html(get_theme_mod( 'about_url_setting' )) ?>">
                                    <svg width="256" height="257" viewBox="0 0 256 257" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M56.2716 67.261L71.5692 74.3929L71.7243 74.2347L64.285 59.0841L65.9653 57.3696L74.6105 75.5636L72.9561 77.2517L54.5913 68.9755L56.2716 67.261Z"
                                            fill="black" />
                                        <path
                                            d="M73.2065 52.4224L84.2397 67.7789L82.3801 69.115L71.3469 53.7585L73.2065 52.4224Z"
                                            fill="black" />
                                        <path
                                            d="M89.6819 64.2546L81.2805 47.3144L91.5042 42.244L92.4067 44.0638L84.2344 48.1168L87.0731 53.8407L94.716 50.0502L95.6185 51.87L87.9756 55.6604L90.8307 61.4175L99.1354 57.2988L100.038 59.1186L89.6819 64.2546Z"
                                            fill="black" />
                                        <path
                                            d="M107.221 56.9706L98.2382 39.5464L100.514 39.0635L107.576 53.3085L107.757 53.2702L108.498 37.3695L111.027 36.8329L118.162 51.0626L118.342 51.0243L119.012 35.1389L121.288 34.6559L120.154 54.2264L117.842 54.717L110.632 40.8431L110.488 40.8738L109.533 56.48L107.221 56.9706Z"
                                            fill="black" />
                                        <path
                                            d="M140.12 35.9445L142.793 36.5136L145.809 53.2038L146.026 53.25L155.58 39.2364L158.253 39.8056L154.315 58.3001L152.22 57.854L155.212 43.8025L155.031 43.764L146.26 56.5849L144.237 56.1542L141.449 40.8721L141.269 40.8336L138.277 54.8851L136.181 54.439L140.12 35.9445Z"
                                            fill="black" />
                                        <path
                                            d="M164.592 42.5945L166.934 43.7728L167.653 54.0148L167.851 54.1143L176.502 48.5856L178.845 49.7638L167.746 56.6246L164.244 63.5861L162.198 62.5572L165.7 55.5956L164.592 42.5945Z"
                                            fill="black" />
                                        <path
                                            d="M182.568 77.2763L193.449 60.9701L194.975 62.7263L185.943 75.8112L186.064 75.9505L200.329 68.887L202.025 70.8383L193.041 83.9789L193.162 84.1183L207.379 76.9989L208.905 78.7551L191.241 87.256L189.69 85.4719L198.326 72.4378L198.229 72.3263L184.118 79.0604L182.568 77.2763Z"
                                            fill="black" />
                                        <path
                                            d="M209.78 103.047C207.979 103.905 206.268 104.32 204.647 104.295C203.026 104.269 201.59 103.859 200.338 103.064C199.087 102.269 198.115 101.143 197.422 99.6872C196.728 98.2312 196.467 96.767 196.639 95.2945C196.81 93.8221 197.397 92.4485 198.399 91.1737C199.401 89.899 200.802 88.8329 202.603 87.9755C204.403 87.1181 206.114 86.7022 207.735 86.7279C209.356 86.7536 210.793 87.1639 212.044 87.9589C213.295 88.7539 214.267 89.8794 214.961 91.3354C215.654 92.7914 215.915 94.2557 215.743 95.7281C215.572 97.2006 214.985 98.5742 213.983 99.8489C212.981 101.124 211.58 102.19 209.78 103.047ZM208.827 101.046C210.305 100.343 211.435 99.5012 212.216 98.5223C213.001 97.5489 213.454 96.5183 213.577 95.4304C213.702 94.348 213.519 93.29 213.027 92.2563C212.534 91.2226 211.827 90.4106 210.905 89.8202C209.986 89.2353 208.9 88.9377 207.648 88.9274C206.398 88.9226 205.034 89.2722 203.555 89.9761C202.077 90.6801 200.946 91.5187 200.162 92.492C199.38 93.4709 198.927 94.5015 198.801 95.5839C198.679 96.6718 198.863 97.7326 199.355 98.7663C199.848 99.8 200.553 100.609 201.473 101.194C202.395 101.785 203.481 102.082 204.731 102.087C205.983 102.097 207.349 101.75 208.827 101.046Z"
                                            fill="black" />
                                        <path
                                            d="M201.676 110.261L220.159 106.268L221.508 112.513C221.82 113.957 221.83 115.195 221.537 116.228C221.25 117.26 220.727 118.091 219.969 118.721C219.211 119.351 218.287 119.783 217.198 120.019C216.109 120.254 215.095 120.24 214.157 119.977C213.218 119.713 212.409 119.174 211.729 118.357C211.055 117.539 210.563 116.414 210.253 114.982L209.161 109.929L211.183 109.492L212.259 114.473C212.473 115.46 212.789 116.223 213.207 116.762C213.627 117.308 214.131 117.658 214.719 117.815C215.315 117.976 215.982 117.976 216.722 117.817C217.462 117.657 218.079 117.378 218.573 116.982C219.067 116.586 219.398 116.051 219.568 115.379C219.743 114.705 219.723 113.868 219.507 112.87L218.657 108.935L202.16 112.499L201.676 110.261ZM211.859 117.167L204.539 123.51L203.977 120.91L211.313 114.64L211.859 117.167Z"
                                            fill="black" />
                                        <path
                                            d="M204.426 126.674L223.334 126.75L223.325 129.039L213.945 129.002L213.944 129.223L223.29 137.755L223.278 140.747L214.779 132.772L204.369 140.671L204.38 137.901L213.197 131.362L210.547 128.988L204.416 128.963L204.426 126.674Z"
                                            fill="black" />
                                        <path
                                            d="M199.725 189.503L184.427 182.371L184.272 182.529L191.712 197.68L190.031 199.394L181.386 181.2L183.04 179.512L201.405 187.788L199.725 189.503Z"
                                            fill="black" />
                                        <path
                                            d="M182.79 204.341L171.757 188.985L173.616 187.649L184.65 203.005L182.79 204.341Z"
                                            fill="black" />
                                        <path
                                            d="M166.315 192.509L174.716 209.449L164.492 214.52L163.59 212.7L171.762 208.647L168.923 202.923L161.281 206.713L160.378 204.894L168.021 201.103L165.166 195.346L156.861 199.465L155.959 197.645L166.315 192.509Z"
                                            fill="black" />
                                        <path
                                            d="M148.776 199.793L157.758 217.217L155.482 217.7L148.42 203.455L148.24 203.493L147.498 219.394L144.969 219.931L137.835 205.701L137.654 205.739L136.985 221.625L134.709 222.108L135.842 202.537L138.154 202.047L145.364 215.921L145.509 215.89L146.464 200.284L148.776 199.793Z"
                                            fill="black" />
                                        <path
                                            d="M115.877 220.819L113.204 220.25L110.188 203.56L109.971 203.514L100.417 217.527L97.7438 216.958L101.682 198.464L103.777 198.91L100.785 212.961L100.966 213L109.737 200.179L111.76 200.61L114.547 215.892L114.728 215.93L117.72 201.879L119.815 202.325L115.877 220.819Z"
                                            fill="black" />
                                        <path
                                            d="M91.4048 214.169L89.0623 212.991L88.3437 202.749L88.1457 202.649L79.4943 208.178L77.1518 207L88.2508 200.139L91.7525 193.178L93.7981 194.206L90.2964 201.168L91.4048 214.169Z"
                                            fill="black" />
                                        <path
                                            d="M73.4285 179.487L62.5475 195.794L61.0213 194.037L70.0535 180.953L69.9324 180.813L55.6675 187.877L53.9717 185.925L62.9554 172.785L62.8343 172.645L48.6178 179.765L47.0916 178.009L64.7558 169.508L66.3062 171.292L57.6702 184.326L57.7671 184.437L71.8781 177.703L73.4285 179.487Z"
                                            fill="black" />
                                        <path
                                            d="M46.2171 153.717C48.0177 152.859 49.7286 152.443 51.3497 152.469C52.9709 152.495 54.4071 152.905 55.6583 153.7C56.9095 154.495 57.8817 155.62 58.5751 157.076C59.2684 158.532 59.5293 159.997 59.3578 161.469C59.1864 162.942 58.5996 164.315 57.5977 165.59C56.5958 166.865 55.1945 167.931 53.3939 168.788C51.5933 169.646 49.8825 170.061 48.2613 170.036C46.6401 170.01 45.2039 169.6 43.9527 168.805C42.7015 168.01 41.7293 166.884 41.0359 165.428C40.3426 163.972 40.0817 162.508 40.2532 161.036C40.4247 159.563 41.0114 158.19 42.0133 156.915C43.0152 155.64 44.4165 154.574 46.2171 153.717ZM47.1698 155.717C45.6915 156.421 44.5616 157.263 43.7801 158.241C42.996 159.215 42.5425 160.245 42.4198 161.333C42.2943 162.416 42.4777 163.474 42.9699 164.507C43.4621 165.541 44.1692 166.353 45.0912 166.943C46.0106 167.528 47.0965 167.826 48.349 167.836C49.5989 167.841 50.963 167.491 52.4413 166.788C53.9195 166.084 55.0507 165.245 55.8348 164.272C56.6163 163.293 57.0698 162.262 57.1952 161.18C57.318 160.092 57.1333 159.031 56.6411 157.997C56.1489 156.964 55.4431 156.154 54.5238 155.57C53.6018 154.979 52.5158 154.682 51.266 154.677C50.0134 154.666 48.648 155.013 47.1698 155.717Z"
                                            fill="black" />
                                        <path
                                            d="M54.3204 146.502L35.8378 150.496L34.4884 144.251C34.1764 142.807 34.167 141.568 34.4602 140.535C34.7473 139.503 35.2699 138.673 36.0281 138.043C36.7862 137.413 37.7098 136.98 38.7987 136.745C39.8877 136.51 40.9015 136.524 41.84 136.787C42.7785 137.05 43.5878 137.59 44.2681 138.407C44.9423 139.224 45.4341 140.349 45.7435 141.781L46.8354 146.835L44.8139 147.272L43.7375 142.29C43.5243 141.304 43.2083 140.541 42.7895 140.001C42.3694 139.456 41.8654 139.105 41.2775 138.949C40.6822 138.788 40.0146 138.787 39.2745 138.947C38.5345 139.107 37.9177 139.385 37.4239 139.782C36.9302 140.178 36.5986 140.712 36.4291 141.385C36.2535 142.059 36.2737 142.895 36.4895 143.894L37.3397 147.829L53.8368 144.264L54.3204 146.502ZM44.1379 139.597L51.4578 133.254L52.0194 135.853L44.6839 142.124L44.1379 139.597Z"
                                            fill="black" />
                                        <path
                                            d="M51.571 130.09L32.6621 130.014L32.6713 127.724L42.0519 127.762L42.0528 127.54L32.7064 119.008L32.7184 116.017L41.2176 123.992L51.6274 116.093L51.6162 118.863L42.8001 125.401L45.4496 127.776L51.5802 127.8L51.571 130.09Z"
                                            fill="black" />
                                        <circle cx="48.1162" cy="93" r="7" fill="black" />
                                        <circle cx="204.116" cy="161" r="7" fill="black" />
                                        <circle cx="129.5" cy="127.5" r="57.5" fill="black" />
                                        <path
                                            d="M108 143.767L137.6 114.167L111.083 114.167L111.083 108L148.083 108L148.083 145L141.917 145L141.917 118.483L112.317 148.083L108 143.767Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                       
                    </div>
                </div>
            </div>
</section>
<?php } ?>
<footer>
  <section class="footer-top">
    <div class="bg-footer-top">
      <div class="container">
        <div class="row">

          <div class="col col-links">
            <h3>dc comics</h3>
            <ul>
              @foreach ($dc_comics_links as $link)
              <li>
                <a href="">{{ $link }}</a>
              </li>
              @endforeach
            </ul>
            <h3>shop</h3>
            <ul>
              @foreach ($shop_links as $link)
                  <li>
                    <a href="">{{ $link }}</a>
                  </li>
              @endforeach
            </ul>
          </div>
  
          <div class="col col-links">
            <h3>dc</h3>
            <ul>
              @foreach ($dc_links as $link)
                  <li>
                    <a href="">{{ $link }}</a>
                  </li>
              @endforeach
            </ul>
          </div>
  
          <div class="col col-links">
            <h3>sites</h3>
            <ul>
              @foreach ($sites_links as $link)
                  <li>
                    <a href="">{{ $link }}</a>
                  </li>
              @endforeach
            </ul>
          </div>

          <div class="col-links"></div>
  
          <div class="col col-logo"></div>

        </div>

        <p>All site Content TM and copirigth 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved.</p>
        <p><span>Coockies Setting</span></p>
      </div>

    </div>
  </section>

  <section class="footer-bottom">

  </section>
</footer>
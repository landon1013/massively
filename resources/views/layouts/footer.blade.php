<!-- Footer -->
  <footer id="footer">
    <section>
      <form method="post" action="/contact">
        {{ csrf_field() }}
        <div class="field">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="3"></textarea>
        </div>
        <ul class="actions">
          <li><input type="submit" value="Send Message" /></li>
        </ul>
      </form>

      <div class="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </section>
    <section class="split contact">
      <section class="alt">
        <h3>Address</h3>
        <p>1234 Somewhere Road #87257<br />
        Nashville, TN 00000-0000</p>
      </section>
      <section>
        <h3>Phone</h3>
        <p><a href="#">(555) 123-4567</a></p>
      </section>
      <section>
        <h3>Email</h3>
        <p><a href="#">info@untitled.tld</a></p>
      </section>
      <section>
        <h3>Social</h3>
        <ul class="icons alt">
          <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
      </section>
    </section>
  </footer>

<!-- Copyright -->
  <div id="copyright">
    <ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
  </div>

</div>

<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.scrollex.min.js"></script>
<script src="/js/jquery.scrolly.min.js"></script>
<script src="/js/skel.min.js"></script>
<script src="/js/util.js"></script>
<script src="/js/main.js"></script>

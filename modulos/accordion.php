<main>
  <h1 class="animar-texto">Accordion</h1>
</main>

<div class="container p-0">
  <div class="row">
    <div class="col animar-texto">
      <p>Construya acordeones que se contraigan verticalmente en combinación con nuestro complemento Collapse JavaScript.</p>

      <h3>Cómo funciona?</h3>

      <p>El acordeón utiliza el colapso internamente para hacerlo plegable.</p>

      <div class="bd-callout bd-callout-info">
        <p>El efecto de animación de este componente depende de la consulta de medios que prefiere el movimiento reducido.</p>
      </div>
    </div>

    <h3>Ejemplo</h3>


    <p>Haga clic en los acordeones a continuación para expandir/contraer el contenido del accordion.</p>

    <p>Para renderizar un acordeón expandido de forma predeterminada:</p>

    <p>Agregue la clase <code>.show</code> en el elemento <code>.accordion-collapse</code>.
      suelte la clase <code>.collapsed</code> del elemento <code>.accordion-button</code> y establezca su atributo aria-expanded en <code>true</code>.</p>
  </div>

  <div class="card bg-dark tex my-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <span>Código HTML</span>
      <button class="btn btn-sm btn-primary" onclick="copyToClipboard('#codeToCopy')">
        <i class="bi bi-clipboard"></i> Copiar
      </button>
    </div>
    <div class="card-body">
      <pre><code id="codeToCopy" class="language-html">
            &lt;div class="example"&gt;
              &lt;p&gt;Este es un ejemplo de HTML&lt;/p&gt;
            &lt;/div&gt;
            </code></pre>
    </div>
  </div>

  <div class="container mb-5">
    <div class="card border-secondary border-opacity-50 bg-dark animar-texto">
      <div class="card-body">

        <!-- Accordion -->
        <div class="accordion bg-dark animar-texto" id="accordionExample">
          <div class="accordion-item bg-dark border border-secondary">
            <h2 class="accordion-header position-relative">
              <button class="accordion-button bg-dark text-light border-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark border border-secondary">
            <h2 class="accordion-header position-relative">
              <button class="accordion-button bg-dark text-light border-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark border border-secondary">
            <h2 class="accordion-header position-relative">
              <button class="accordion-button bg-dark text-light border-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body text-light">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
        <!-- Accordion -->

      </div>
    </div>
  </div>

</div>
</div>